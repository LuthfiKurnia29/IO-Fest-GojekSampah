<x-mail::message>
# Verifikasi Alamat Email Anda

Halo **{{ $name }}**,

Terima kasih telah bergabung dengan **Envyra**! Kami sangat senang Anda menjadi bagian dari misi kami untuk menjaga kelestarian bumi melalui pengelolaan sampah yang cerdas.

Langkah terakhir untuk mengaktifkan akun Anda adalah dengan memverifikasi alamat email. Silakan klik tombol di bawah ini:

@component('mail::button', ['url' => $url, 'color' => 'success'])
Verifikasi Email Sekarang
@endcomponent

Jika tombol di atas tidak berfungsi, Anda juga dapat menyalin dan menempelkan tautan berikut ke browser Anda:
[{{ $url }}]({{ $url }})

Jika Anda tidak merasa mendaftar di Envyra, silakan abaikan email ini.

Salam hijau,<br>
**Tim Envyra**
</x-mail::message>
