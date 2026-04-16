{{-- ============================================================
     resources/views/partials/footer.blade.php
     ============================================================ --}}

<footer class="footer">
    <div class="container">
        <div class="footer-content">

            <div class="footer-col">
                <h4>Contact Us</h4>
                <div class="contact-info">
                    <p><strong>Phone:</strong>{{ $ws->contact_mobile }}</p>
                    <p><strong>Email:</strong>{{ $ws->contact_email }}</p>
                    <p>Saturday to Thursday &mdash; 09:00am to 5:00pm</p>
                </div>
            </div>

            <div class="footer-col">
                <h4>About Us</h4>
                <ul>
                    <li><a href="{{ url('/about') }}">About us</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                    <li><a href="#">Help &amp; FAQs</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Learn</h4>
                <ul>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Privacy and Cookies</a></li>
                    <li><a href="#">Login</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Products</h4>
                <ul>
                    <li><a href="#">Parking Tiles</a></li>
                    <li><a href="#">Hollow Block</a></li>
                    <li><a href="#">Solid Bricks</a></li>
                    <li><a href="#">Plank Tiles</a></li>
                </ul>
            </div>

        </div>

        <div class="footer-bottom">
            <div class="footer-links">
                <a href="#">Terms &amp; Conditions</a>
                <a href="#">Privacy &amp; Cookies</a>
            </div>
            <p>&copy; {{ date('Y') }} <a href="https://phenexsoft.com/" target="_blank">PhenexSoft</a>, All Rights Reserved</p>
        </div>
    </div>
</footer>
