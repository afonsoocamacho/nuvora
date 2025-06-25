<nav>
    <div class="logo">
        <a href="{{ route('home') }}" style="cursor: pointer, "><x-icon name="wordmark" class="black"
                style="height: 24px;" /></a>
    </div>

    {{-- ToDo: Fix the routes --}}

    <ul class="nav-links">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Features</a></li>
        <li><a href="#">Pricing</a></li>
        <li><a href="#">Team</a></li>
    </ul>

    <div class="nav-actions">
        <a href="{{ route('login') }}" class="btn btn-xsm btn-1-green">Log In</a>
        <a href="{{ route('register') }}" class="btn btn-xsm btn-2-green">Register</a>
    </div>

</nav>
