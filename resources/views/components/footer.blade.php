<footer>
    <div class="footer-primary">
        <div class="footer-info">
            <x-icon name="wordmark" class="footer-logo" />
            <p class="p-medium">Helping you build your community.</p>
        </div>
        <div class="footer-links">
            <div class="footer-links-group">
                <p class="footer-links-group-title">
                    Overview
                </p>
                <ul>
                    <li>
                        <a class="p-medium" href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <a class="p-medium" href="#">About</a>
                    </li>
                    <li>
                        <a class="p-medium" href="#">Features</a>
                    </li>
                    <li>
                        <a class="p-medium" href="#">Pricing</a>
                    </li>
                    <li>
                        <a class="p-medium" href="#">Team</a>
                    </li>
                </ul>
            </div>
            <div class="footer-links-group">
                <p class="footer-links-group-title">
                    Legal
                </p>

                <ul>
                    <li>
                        <a class="p-medium" href="{{ route('terms') }}">Terms of Use</a>
                    </li>
                    <li>
                        <a class="p-medium" href="{{ route('privacy') }}">Privacy Policy</a>
                    </li>
                    <li>
                        <a class="p-medium" href="#">Cookie Settings</a>
                    </li>
                </ul>

            </div>
            <div class="footer-links-group">
                <p class="footer-links-group-title">
                    Company
                </p>

                <ul>
                    <li>
                        <a class="p-medium" href="{{ route('home') }}">Our Mission</a>
                    </li>
                    <li>
                        <a class="p-medium" href="#">Brand Guidelines</a>
                    </li>
                    <li>
                        <a class="p-medium" href="#">Jobs</a>
                    </li>
                </ul>
            </div>
            <div class="footer-links-group">
                <p class="footer-links-group-title">
                    Support
                </p>

                <ul>
                    <li><a class="p-medium" href="">Contact Us</a></li>
                    <li><a class="p-medium" href="#">Help Center</a></li>
                    <li><a class="p-medium" href="#">FAQs</a></li>
                    <li><a class="p-medium" href="#">Accessibility</a></li>
                </ul>

            </div>
        </div>
    </div>
    <div class="footer-secundary">
        <div class="footer-text">
            <p class="label-l">&copy; {{ date('Y') }} Nuvora. All rights reserved.</p>
        </div>
    </div>

</footer>
