<x-mail::message>
# Atur Ulang Kata Sandi

Halo **{{ $name }}**,

Kami menerima permintaan untuk mengatur ulang kata sandi akun **Envyra** Anda. Klik tombol di bawah ini untuk membuat kata sandi baru:

@component('mail::button', ['url' => $url, 'color' => 'success'])
Atur Ulang Kata Sandi
@endcomponent

**Catatan Keamanan:**
- Tautan ini akan kedaluwarsa dalam 60 menit.
- Jika Anda tidak merasa melakukan permintaan ini, tidak ada tindakan lebih lanjut yang diperlukan. Kata sandi Anda akan tetap sama.

Terima kasih telah menjaga keamanan akun Anda bersama kami.

Terima kasih,<br>
**Tim Envyra**
</x-mail::message>
