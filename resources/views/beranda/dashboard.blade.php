<x-layouts.sidebar>
    <x-layouts.header />

    @php
    $user = auth()->user()->role;
    @endphp

    @if($user === 'user')
    <x-beranda.user />
    @elseif($user === 'kurir')
    <x-beranda.kurir />
    @else
    <x-beranda.admin />
    @endif
</x-layouts.sidebar>