<x-layouts.base-layout>
    <div class="d-flex w-100" style="min-height: 100vh;">
        <div id="sidebar-overlay" onclick="toggleSidebar()"
            class="position-fixed vh-100 vw-100 d-none"
            style="background: rgba(0,0,0,0.5); z-index: 1040; top: 0; left: 0;">
        </div>

        <aside id="sidebar" class="d-flex flex-column bg-white border-end position-fixed transition-all shadow-sm"
            style="width: 280px; min-height: 100vh; padding: 24px; z-index: 1050; left: 0;">

            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="fw-bold mb-0" style="color: #134e4a;">Envyra</h3>
                <button class="btn d-md-none p-0 border-0" onclick="toggleSidebar()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <nav class="d-flex flex-column flex-grow-1" style="gap: 8px;">
                @foreach(config('menu.sidebar') as $menu)
                @if(auth()->check() && in_array(auth()->user()->role, $menu['roles']))
                @php
                $isActive = request()->routeIs($menu['route']);
                @endphp
                <a href="{{ route($menu['route']) }}"
                    class="nav-link d-flex align-items-center text-dark py-2 px-3 rounded text-decoration-none gap-2"
                    style="{{ $isActive 
                        ? 'background-color: #f0fdf4; color: #166534; font-weight: 500;' 
                        : 'color: #334155;' }}">
                    <img src="{{ asset($menu['icon']) }}" alt="Icon" width="20" height="20">
                    {{ $menu['name'] }}
                </a>
                @endif
                @endforeach
            </nav>

            <div class="mt-auto pt-4 border-top">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="nav-link d-flex align-items-center text-secondary py-2 px-3 text-decoration-none gap-2"
                        style="background: none; border: none; width: 100%; text-align: left; font-size: inherit;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                        </svg>
                        Keluar
                    </button>
                </form>
            </div>

        </aside>

        <div id="main-content" class="flex-grow-1 bg-light min-vh-100 d-flex flex-column transition-all"
            style="margin-left: 280px;">

            <header class="bg-white border-bottom p-3 d-md-none d-flex align-items-center">
                <button class="btn btn-light border" onclick="toggleSidebar()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#134e4a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </button>
                <h5 class="mb-0 ms-3 fw-bold" style="color: #134e4a;">Envyra</h5>
            </header>

            <main>
                {{ $slot }}
            </main>
        </div>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebar-overlay');

            sidebar.classList.toggle('active');
            overlay.classList.toggle('active');
        }
    </script>
</x-layouts.base-layout>