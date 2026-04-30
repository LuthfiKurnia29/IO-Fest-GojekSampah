<x-layouts.base-layout>
    <div class="d-flex w-100" style="min-height: 100vh;">
        <aside class="d-flex flex-column bg-white border-end position-fixed" style="width: 280px; min-height: 100vh; padding: 24px;">

            <div class="mb-auto">
                <h3 class="fw-bold" style="color: #134e4a; margin-bottom: 40px;">Envyra</h3>
            </div>

            <nav class="d-flex flex-column flex-grow-1" style="gap: 8px;">
                @foreach(config('menu.sidebar') as $menu)
                @if(auth()->check() && in_array(auth()->user()->role, $menu['roles']))
                <a href="{{ route($menu['route']) }}" class="nav-link d-flex align-items-center text-dark py-2 px-3 rounded text-decoration-none gap-2">
                    <img src="{{ asset($menu['icon']) }}" alt="Icon" width="20" height="20">
                    {{ $menu['name'] }}
                </a>
                @endif
                @endforeach
            </nav>

            <div class="mt-auto pt-4 border-top">
                <a href="#" class="nav-link d-flex align-items-center text-secondary py-2 px-3 text-decoration-none gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                    </svg>
                    Keluar
                </a>
            </div>

        </aside>

        <div class="flex-grow-1 bg-light min-vh-100 d-flex flex-column"
            style="margin-left: 0; transition: margin-left 0.3s;"
            id="main-content-order-pengambilan">

            <main>
                {{ $slot }}
            </main>
        </div>
    </div>
</x-layouts.base-layout>