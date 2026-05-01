<x-layouts.sidebar>
    <x-layouts.header />

    @php
    $user = auth()->user()->role;
    @endphp

    @if($user === 'user')
    <x-beranda.user />
    @elseif($user === 'kurir')
    <x-beranda.kurir />
    <x-order.kurir.modal-tugas />
    @else
    <x-beranda.admin />
    <x-order.admin.modal-set />
    @endif
</x-layouts.sidebar>