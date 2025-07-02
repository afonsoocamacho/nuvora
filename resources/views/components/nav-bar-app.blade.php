<nav>
    <button class="showSidebar-btn" onclick="toggleSidebar()">Open Side-bar</button>

    <form action="{{ route('logout') }}" method="POST" class="logout-form">
        @csrf
        <button type="submit" class="btn-logout">
            <x-icon name="logout" />
            Logout
        </button>
    </form>

    <div class="account-card-container" x-data="{ open: false }" @click.away="open = false">
        <div class="account-card" @click="open = !open">

            <div class="account-card-img">
                @if (Auth::user()->profile_photo_url)
                    <img src="{{ Auth::user()->profile_photo_url }}" alt="User Logo" width="36" height="36"
                        style="border-radius: 50%; object-fit: cover;">
                @else
                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="18" cy="18" r="18" fill="var(--color-gray-50)" />
                        <path
                            d="M18 18C20.7614 18 23 15.7614 23 13C23 10.2386 20.7614 8 18 8C15.2386 8 13 10.2386 13 13C13 15.7614 15.2386 18 18 18Z"
                            fill="var(--color-gray-20)" />
                        <path d="M6 28C6 23.5817 11.3726 20 18 20C24.6274 20 30 23.5817 30 28"
                            fill="var(--color-gray-20)" />
                    </svg>
                @endif
            </div>

            <div class="account-card-info">
                <p class="p-medium fw-semibold">{{ Auth::user()->name }}</p>
                <p class="p-small fw-regular">{{ Auth::user()->email }}</p>
            </div>

            <!-- Chevron Icon -->

            <div class="arrow" :class="{ 'rotate-180': open }" style=" display:flex; align-items:center;">
                <svg width="24" height="24" viewBox="0 0 20 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 9L10 13L14 9" stroke="var(--color-gray-50)" stroke-width="1" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </div>


        </div>

        <div x-show="open" x-transition class="account-card-menu bottom">
            <ul>
                <a href="#">
                    <li>
                        <span>My Organization</span>

                    </li>
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button style="width: 100%;">
                        <a href="#">
                            <li class="btn-logout">
                                <x-icon name="logout" />
                                <span>Logout</span>

                            </li>
                        </a>
                    </button>
                </form>
            </ul>
        </div>

    </div>

</nav>
