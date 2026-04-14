<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
		console.log("Master script loaded.");
		var csrfToken = $('meta[name="csrf-token"]').attr('content');
		console.log("CSRF Token found:", csrfToken);

		$.ajaxSetup({
			headers: { 'X-CSRF-TOKEN': csrfToken }
		});
		console.log("jQuery AJAX setup with CSRF token complete.");


		$(document).ready(function () {
			console.log("Document ready.");

			$('#searchIcon').on('click', function(e) {
				e.preventDefault();
				$('#searchContainer').toggle();
			});


			// Add to Cart
			$(document).on("click", ".addToCart", function () {
				console.log("'.addToCart' clicked.");
				let btn = $(this);
				let url = btn.data("url");
				let product_id = btn.data("product");
				let qty = parseInt(btn.closest(".productCartItem").find(".product_qty").val()) || 1;

				console.log("Preparing to send AJAX request to:", url);
				console.log("Product ID:", product_id, "Quantity:", qty);

				$.post(url, { product: product_id, qty: qty, _token: $('meta[name="csrf-token"]').attr('content') }, function (res) {
					console.log("AJAX success response:", res);
					if (res.status) {
						btn.closest(".productCartItem").html(res.productCartItem);
						$(".cartCount").text(res.cartCount);
						$(".cartItemsCount").text(res.cartItemsCount);
						$(".cartTotalPrice").text(res.cartTotal.toFixed(2) + " tk");
						$(".mobileCartTotalPrice").text("৳" + res.cartTotal.toFixed(2));

						Swal.fire({
							toast: true, icon: "success", title: res.message,
							position: "top", timer: 2000, showConfirmButton: false
						});
					} else {
						console.error("AJAX response status is false:", res.message);
						Swal.fire("Error", res.message || "Could not add to cart.", "error");
					}
				}).fail(function(jqXHR, textStatus, errorThrown) {
					console.error("AJAX request failed.");
					console.error("Status:", textStatus);
					console.error("Error:", errorThrown);
					console.error("Response Text:", jqXHR.responseText);
					Swal.fire("Error", "A server error occurred. Please check the console and try again.", "error");
				});
			});
			

			$(document).on('click', '.updateCartItemold', function (e) {
				e.preventDefault();

				let $btn = $(this);
				let cartId = $btn.data('cart');
				let url = $btn.data('url');
				let $wrapper = $btn.closest('.cart-action-wrapper');
				let qty = parseInt($wrapper.find('.cartQtyDisplay').text()) || 0;

				// Update quantity
				if ($btn.hasClass('plus')) {
					qty++;
				} else if ($btn.hasClass('minus')) {
					qty--;
					if (qty < 0) qty = 0; // prevent negative qty
				}

				// Disable button during AJAX
				$btn.prop('disabled', true);

				$.ajax({
					url: url,
					method: 'POST',
					data: {
						cart: cartId,
						new_qty: qty,
						_token: $('meta[name="csrf-token"]').attr('content')
					},
					success: function (res) {
						if (res.status) {
							if (qty === 0) {
								// Replace qty box with "Add to Cart"
								$wrapper.html(`
									<input type="hidden" name="product_qty" value="1" class="product_qty">
									<button class="btn btn-outline-primary w-100 btn-sm addToCart"
										data-url="${res.add_to_cart_url}"
										data-product="${res.product_id}">
										ADD TO CART
									</button>
								`);

								// If no cart items left → redirect

							
								if ($(".cart-item").length === 0) {
									window.location.href = "/";
								}
							} else {
								// Update qty display & button data
								$wrapper.find('.cartQtyDisplay').text(qty);
								$wrapper.find('.plus').data('qty', qty);
								$wrapper.find('.minus').data('qty', qty);

								// Update row subtotal
								let $row = $btn.closest('.cart-item');
								let $priceBox = $row.find('.itemTotalPrice');
								if ($priceBox.length) {
									let unitPrice = parseFloat($priceBox.data('unit-price'));
									$priceBox.text("Tk. " + (unitPrice * qty).toFixed(2));
								}
							}

                              // Update header/cart summary
                $('.cartCount').text(res.cartCount);
                $('.cartItemsCount').text(res.cartItemsCount);
  
                $(".subtotal").text("Tk. " + res.cartTotal.toFixed(2));
                $(".discount").text("-Tk. " + res.discount.toFixed(2));
                $(".payable").text("Tk. " + res.payable.toFixed(2));
                $(".mobileCartTotalPrice").text('৳' + res.payable.toFixed(2));
              }
            },
            error: function () {						alert('Something went wrong! Please try again.');
					},
					complete: function () {
						$btn.prop('disabled', false);
					}
				});
			});


			$(document).on('click', '.updateCartItem', function (e) {
				e.preventDefault();

				let $btn = $(this);
				let cartId = $btn.data('cart');
				let url = $btn.data('url');
				let $wrapper = $btn.closest('.cart-action-wrapper');
				let qty = parseInt($wrapper.find('.cartQtyDisplay').text()) || 0;

				// Qty update
				if ($btn.hasClass('plus')) {
					qty++;
				} else if ($btn.hasClass('minus')) {
					qty--;
					if (qty < 0) qty = 0; // negative prevent
				}

				$btn.prop('disabled', true); // prevent double click

				$.ajax({
					url: url,
					method: 'POST',
					data: {
						cart: cartId,
						new_qty: qty,
						_token: $('meta[name="csrf-token"]').attr('content')
					},
					success: function (res) {
						if (res.status) {
							if (qty === 0) {
								// Show Add to Cart
								$wrapper.html(`
									<input type="hidden" name="product_qty" value="1" class="product_qty">
									<button class="btn btn-outline-primary w-100 btn-sm addToCart"
										data-url="${res.add_to_cart_url}"
										data-product="${res.product_id}">
										ADD TO CART
									</button>
								`);

								if ($(".cart-item").length === 0) {
									window.location.href = "/";
								}
							} else {
								// Update qty display
								$wrapper.find('.cartQtyDisplay').text(qty);
								$wrapper.find('.plus').data('qty', qty);
								$wrapper.find('.minus').data('qty', qty);

								// ✅ Row subtotal update (cart page)
								let $row = $btn.closest('.cart-item');
								let $priceBox = $row.find('.itemTotalPrice');
								if ($priceBox.length) {
									let unitPrice = parseFloat($priceBox.data('unit-price'));
									$priceBox.text("Tk. " + (unitPrice * qty).toFixed(2));
								}

								// ✅ Product details price update
								updateProductDetailsPrice(qty);
							}

							// ✅ Header/cart summary update
							$('.cartCount').text(res.cartCount);
							$('.cartItemsCount').text(res.cartItemsCount);
							$(".subtotal").text("Tk. " + res.cartTotal.toFixed(2));
							$(".discount").text("-Tk. " + res.discount.toFixed(2));
							$(".payable").text("Tk. " + res.payable.toFixed(2));
							$(".mobileCartTotalPrice").text('৳' + res.payable.toFixed(2));
						}
					},
					error: function () {
						alert('Something went wrong! Please try again.');
					},
					complete: function () {
						$btn.prop('disabled', false);
					}
				});
			});

			/**
			 * ✅ Update product details page price dynamically
			 */
			function updateProductDetailsPrice(qty) {
				let unitPriceBox = $('.unitPriceBox');
				let finalPriceBox = $('.finalPriceBox');

				if (finalPriceBox.length) {
					let unitFinal = parseFloat(finalPriceBox.data('unit-price'));
					finalPriceBox.text((unitFinal * qty).toFixed(2) + " ৳");
				}
				if (unitPriceBox.length) {
					let unitStrike = parseFloat(unitPriceBox.data('unit-price'));
					unitPriceBox.text((unitStrike * qty).toFixed(2) + " ৳");
				}
			}

			



			// Delete Cart Item
			$(document).on("click", ".deleteCartItem", function () {
				let btn = $(this);
				$.post(btn.data("url"), { _token: $('meta[name="csrf-token"]').attr('content') }, function (res) {
					if (res.status) {
						$('.cart-item[data-cart="' + res.cart_id + '"]').remove();

						if ($(".cart-item").length === 0) {
							window.location.href = "/";
						}

						$(".cartCount").text(res.cartCount);
						$(".cartItemsCount").text(res.cartItemsCount);
						$(".cartTotalPrice").text(res.cartTotal.toFixed(2) + " tk");
						$(".subtotal").text("Tk. " + res.cartTotal.toFixed(2)).attr('data-value', res.cartTotal);
						$(".discount").text("-Tk. " + res.discount.toFixed(2)).attr('data-value', res.discount);
						$(".payable").text("Tk. " + res.payable.toFixed(2));
						$(".mobileCartTotalPrice").text('৳' + res.payable.toFixed(2));

						Swal.fire({
							toast: true, icon: "success", title: res.message,
							position: "top-end", timer: 2000, showConfirmButton: false
						});
					}
				}).fail(() => {
					Swal.fire("Error", "Cart item could not be removed.", "error");
				});
			});

		});
    </script>
  <x-floating-whatsapp/>
  <x-floating-cart/>
