  @php
  $count_info = \App\Models\Cart::when(Auth::check(), fn($q) => $q->where('user_id', Auth::id()))
  ->when(!Auth::check(), fn($q) => $q->where('session_id', session('session_id')));
  $count_data = $count_info->count();
  $totalCartPrice = \App\Models\Cart::totalCartPrice();
  @endphp

  <style>
/* ================= Floating Desktop Cart ================= */
.envato-buy-redirect {
    position: fixed;
    top: 45%;
    right: 20px;
    z-index: 9999;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: #ffffff;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.25);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: 2px solid #0c0c0cff;
}

.envato-buy-redirect:hover {
    transform: scale(1.1);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.35);
}

.envato-buy-redirect i {
    font-size: 28px;
    color: #020202ff;
}

.extra-cart-info {
    position: absolute;
    top: -5px;
    right: -5px;
    background: #030303ff;
    color: #fff;
    font-size: 12px;
    font-weight: bold;
    border-radius: 50%;
    width: 22px;
    height: 22px;
    display: flex;
    align-items: center;
    justify-content: center;
}
  </style>


  <!-- 🛒 Floating Add to Cart Button -->
  <a class="envato-buy-redirect" href="{{ route('new.checkout') }}">
      <!-- <i class="fas fa-shopping-cart"></i> -->
        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path
        d="M19.6667 21H2.33333C1.59733 21 1 20.4027 1 19.6667V2.33333C1 1.59733 1.59733 1 2.33333 1H19.6667C20.4027 1 21 1.59733 21 2.33333V19.6667C21 20.4027 20.4027 21 19.6667 21Z"
        stroke="#080808ff" stroke-width="2" stroke-miterlimit="10"
        stroke-linecap="round" stroke-linejoin="round" />
        <path
        d="M15.6666 6.33334C15.6666 8.91068 13.5773 11 11 11C8.42265 11 6.33331 8.91068 6.33331 6.33334"
        stroke="#080808ff" stroke-width="2" stroke-miterlimit="10"
        stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      <span class="extra-cart-info"><span class="cartItemsCount">{{ $count_data }}</span></span>
  </a>