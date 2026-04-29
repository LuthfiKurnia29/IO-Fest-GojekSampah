<div class="min-vh-100 d-flex flex-column justify-content-center align-items-center py-5" style="background-color: #F8F9FA;">

    <div class="card border-0 shadow-sm rounded-4 w-100 overflow-hidden" style="max-width: 650px;">

        <div class="card-body p-4 p-sm-5">

            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3" style="color: #064E3B;">Buat akun Anda</h2>
                <p class="text-secondary mx-auto" style="font-size: 15px; max-width: 450px;">
                    Bergabunglah dalam misi kami untuk memajukan pengelolaan sadar lingkungan demi planet yang lebih hijau.
                </p>
            </div>

            <form class="row g-3 text-start" method="POST" action="{{ url('/register') }}">
                @csrf
                <div class="col-12">
                    <label class="form-label fw-medium text-dark" style="font-size: 14px;">Nama Lengkap</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0" style="border-color: #CBD5E1; color: #64748B;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </span>
                        <input type="text" class="form-control px-3 py-2 shadow-none border-start-0" placeholder="Masukkan nama lengkap Anda" style="border-color: #CBD5E1;">
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <label class="form-label fw-medium text-dark" style="font-size: 14px;">Email</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0" style="border-color: #CBD5E1; color: #64748B;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                        </span>
                        <input type="email" class="form-control px-3 py-2 shadow-none border-start-0" placeholder="contoh@envyra.com" style="border-color: #CBD5E1;">
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <label class="form-label fw-medium text-dark" style="font-size: 14px;">Nama Pengguna</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0" style="border-color: #CBD5E1; color: #64748B;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="4"></circle>
                                <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                            </svg>
                        </span>
                        <input type="text" class="form-control px-3 py-2 shadow-none border-start-0" placeholder="budi_setiawan" style="border-color: #CBD5E1;">
                    </div>
                </div>

                <div class="col-12">
                    <label class="form-label fw-medium text-dark" style="font-size: 14px;">Nomor Telepon</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0" style="border-color: #CBD5E1; color: #64748B;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                        </span>
                        <input type="tel" class="form-control px-3 py-2 shadow-none border-start-0" placeholder="+62 812 0000 0000" style="border-color: #CBD5E1;">
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <label class="form-label fw-medium text-dark" style="font-size: 14px;">Kata Sandi</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0" style="border-color: #CBD5E1; color: #64748B;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                            </svg>
                        </span>
                        <input type="password" class="form-control px-3 py-2 shadow-none border-start-0" placeholder="••••••••" style="border-color: #CBD5E1;">
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <label class="form-label fw-medium text-dark" style="font-size: 14px;">Konfirmasi Kata Sandi</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0" style="border-color: #CBD5E1; color: #64748B;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                <path d="M7 11V7a5 5 0 0 1 9.9-1"></path>
                                <polyline points="13 6 17 6 17 2"></polyline>
                            </svg>
                        </span>
                        <input type="password" class="form-control px-3 py-2 shadow-none border-start-0" placeholder="••••••••" style="border-color: #CBD5E1;">
                    </div>
                </div>

                <div class="col-12 mt-4">
                    <div class="rounded-3 p-3 d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-3" style="background-color: #F8F8FF; border: 1px solid #E2E8F0;">
                        <div>
                            <h6 class="fw-bold mb-1 text-dark" style="font-size: 14px;">Verifikasi Keamanan</h6>
                            <p class="mb-0 text-secondary" style="font-size: 13px;">Berapa hasil dari {{ app('mathcaptcha')->label() }}??</p>
                        </div>

                        {!! app('mathcaptcha')->input(['class' => 'form-control shadow-none text-center', 'style' => 'max-width: 120px; border-color: #CBD5E1;', 'placeholder' => 'Jawaban']) !!}
                    </div>

                    @error('mathcaptcha')
                    <span class="text-danger">Jawaban salah, silakan coba soal baru di atas.</span>
                    @enderror
                </div>

                <div class="col-12 mt-4">
                    <button type="submit" class="btn w-100 fw-medium py-3 d-flex justify-content-center align-items-center gap-2" style="background-color: #1A4731; color: #ffffff; border-radius: 8px;">
                        Daftar Sekarang
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </button>
                </div>

                <div class="col-12 text-center mt-3">
                    <p class="text-secondary mb-0" style="font-size: 14px;">Sudah punya akun? <a href="#" class="text-decoration-none fw-semibold" style="color: #1A4731;">Masuk</a></p>
                </div>

            </form>
        </div>

        <div class="p-3 d-flex align-items-center gap-2" style="background-color: #F4F4FF; border-top: 1px solid #E2E8F0;">
            <div style="color: #0F172A;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="12" y1="16" x2="12" y2="12"></line>
                    <line x1="12" y1="8" x2="12.01" y2="8"></line>
                </svg>
            </div>
            <p class="mb-0 text-secondary" style="font-size: 12px; line-height: 1.5;">
                Dengan mendaftar, Anda menyetujui Ketentuan Layanan dan Kebijakan Privasi Envyra.
            </p>
        </div>

    </div>
</div>