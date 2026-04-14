  <style>
            /* ================= Floating WhatsApp ================= */
        .floating-message-icon {
            position: fixed;
            top: calc(45% + 80px);
            right: 20px;
            z-index: 9999;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #25D366;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.25);
            transition: transform 0.3s ease;
        }
        .floating-message-icon:hover {
            transform: scale(1.1);
        }
        .floating-message-icon img {
            width: 38px;
            height: 38px;
        }

  </style>
  <!-- ✅ Floating WhatsApp Icon -->
<a class="floating-message-icon" href="https://wa.me/8801334927985?text=Hello%20there!" target="_blank">
    <img src="{{ asset('frontend/assets/img/icons/whatsapp.svg') }}" alt="WhatsApp">
</a>