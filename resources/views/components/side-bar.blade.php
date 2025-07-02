<aside id="sidebar">

    <div class="sidebar-top">
        <a href="#">
            <div class="logo">
                <img src="{{ asset('assets/img/Artboard 8.svg') }}" alt="" id="sidebar-logo"
                    data-logo-default="{{ asset('assets/img/Artboard 8.svg') }}"
                    data-logo-minimized="{{ asset('assets/img/Artboard 10.png') }}">
            </div>
        </a>
        <div onclick="toggleSidebarMinimize()" class="minimize-sidebar-btn">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M2 12C2 8.31087 2 6.4663 2.81382 5.15877C3.1149 4.67502 3.48891 4.25427 3.91891 3.91554C5.08116 3 6.72077 3 10 3H14C17.2792 3 18.9188 3 20.0811 3.91554C20.5111 4.25427 20.8851 4.67502 21.1862 5.15877C22 6.4663 22 8.31087 22 12C22 15.6891 22 17.5337 21.1862 18.8412C20.8851 19.325 20.5111 19.7457 20.0811 20.0845C18.9188 21 17.2792 21 14 21H10C6.72077 21 5.08116 21 3.91891 20.0845C3.48891 19.7457 3.1149 19.325 2.81382 18.8412C2 17.5337 2 15.6891 2 12Z"
                    stroke="#A8A29E" stroke-width="1.5" />
                <path d="M9.5 3V21" stroke="#A8A29E" stroke-width="1.5" stroke-linejoin="round" />
                <path d="M5 7H6M5 10H6" stroke="#A8A29E" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>

        </div>
        <button class="showSidebar-btn" onclick="toggleSidebar()">close</button>
    </div>



    <div class="sidebar-links">
        <ul>

            @php
                $mainMenuItems = [
                    'dashboard' => [
                        'icon' => 'dashboard',
                        'label' => 'Dashboard',
                        'route' => 'dashboard',
                        'beta' => false,
                    ],
                    'members' => [
                        'icon' => 'members',
                        'label' => 'Members',
                        'route' => 'members',
                        'beta' => false,
                    ],
                    'memberships' => [
                        'icon' => 'memberships',
                        'label' => 'Memberships',
                        'route' => 'memberships',
                        'beta' => false,
                    ],
                    'payments' => [
                        'icon' => 'payments',
                        'label' => 'Payments',
                        'route' => 'payments', // Placeholder for future route
                        'beta' => false,
                    ],
                    'events' => [
                        'icon' => 'events',
                        'label' => 'Events',
                        'route' => 'events', // Placeholder for future route
                        'beta' => false,
                    ],
                    'communication' => [
                        'icon' => 'communication',
                        'label' => 'Communication',
                        'route' => 'communication', // Placeholder for future route
                        'beta' => false,
                    ],
                ];
            @endphp


            @foreach ($mainMenuItems as $item)
                <a href="{{ route($item['route']) }}">
                    <li class="{{ request()->routeIs($item['route']) ? 'active' : '' }}">
                        <x-icon name="{{ $item['icon'] }}" />
                        <span>{{ $item['label'] }}</span>

                        @if ($item['beta'])
                            <div class="label-s fw-medium label-gray-s">Beta</div>
                        @endif

                    </li>
                </a>
            @endforeach

        </ul>

        <div
            style="display: flex; flex-direction: column; gap: 12px; padding-top: 12px; border-top: 1px solid var(--color-gray-30);">
            <ul>

                @php
                    $secondaryMenuItems = [
                        'trash' => [
                            'icon' => 'trash',
                            'label' => 'Trash',
                            'route' => 'trash',
                        ],
                        'settings' => [
                            'icon' => 'settings',
                            'label' => 'Settings',
                            'route' => 'settings',
                        ],
                        'help-support' => [
                            'icon' => 'help-support',
                            'label' => 'Help Center',
                            'route' => 'help-center',
                        ],
                    ];
                @endphp

                @foreach ($secondaryMenuItems as $item)
                    <a href="{{ route($item['route']) }}">
                        <li class="{{ request()->routeIs($item['route']) ? 'active' : '' }}">
                            <x-icon name="{{ $item['icon'] }}" />
                            <span>{{ $item['label'] }}</span>
                        </li>
                    </a>
                @endforeach


            </ul>


        </div>

    </div>

</aside>
