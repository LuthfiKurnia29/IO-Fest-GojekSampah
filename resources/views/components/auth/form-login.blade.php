<div class="d-flex flex-column justify-content-center align-items-center py-5" style="background-color: #F8F9FA;">

    <div class="card border-0 shadow-sm rounded-3 w-100 p-4 p-sm-5" style="max-width: 450px;">
        <div class="card-body p-0 text-center">

            <div class="d-inline-flex align-items-center justify-content-center rounded-3 mb-3" style="width: 56px; height: 56px; background-color: #D1E8D5; color: #064E3B;">
                <img src="{{ asset('assets/partner1.svg') }}" alt="TechRestore Logo" width="32" height="32">
            </div>

            <h3 class="fw-bold mb-2" style="color: #1E293B;">Selamat Datang</h3>
            <p class="text-secondary mb-4" style="font-size: 15px;">Lanjutkan langkah pelestarian Anda<br class="d-none d-sm-block"> bersama Envyra</p>

            <form class="text-start">

                <div class="mb-3">
                    <label for="email" class="form-label fw-medium text-dark" style="font-size: 14px;">Email</label>
                    <input type="email" class="form-control px-3 py-2 shadow-none" id="email" placeholder="nama@email.com" style="border-color: #E2E8F0;">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label fw-medium text-dark" style="font-size: 14px;">Kata Sandi</label>
                    <div class="input-group">
                        <input type="password" class="form-control px-3 py-2 shadow-none border-end-0" id="password" placeholder="••••••••" style="border-color: #E2E8F0;">
                        <span class="input-group-text bg-white border-start-0" style="border-color: #E2E8F0; cursor: pointer; color: #94A3B8;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                        </span>
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-4" style="font-size: 14px;">
                    <div class="form-check mb-0">
                        <input class="form-check-input shadow-none" type="checkbox" id="ingatSaya" style="border-color: #CBD5E1;">
                        <label class="form-check-label text-secondary" for="ingatSaya">Ingat Saya</label>
                    </div>
                    <a href="{{ url('/lupa-password') }}" class="text-decoration-none fw-medium" style="color: #8A5A3B;">Lupa Kata Sandi?</a>
                </div>

                <button type="submit" class="btn w-100 fw-medium py-2 mb-4" style="background-color: #064E3B; color: #ffffff;">Masuk</button>

                <div class="d-flex align-items-center mb-4">
                    <hr class="flex-grow-1 m-0" style="border-color: #CBD5E1;">
                    <span class="px-3 text-secondary" style="font-size: 13px;">Atau masuk dengan</span>
                    <hr class="flex-grow-1 m-0" style="border-color: #CBD5E1;">
                </div>

                <button type="button" class="btn bg-white w-100 fw-medium py-2 d-flex align-items-center justify-content-center gap-2" style="border: 1px solid #E2E8F0; color: #475569;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4" />
                        <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853" />
                        <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05" />
                        <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335" />
                    </svg>
                    Google
                </button>

            </form>
        </div>

        <div class="text-center mt-5">
            <p class="text-secondary mb-0" style="font-size: 14px;">Belum punya akun?
                <a href="{{ url('/register') }}" class="text-decoration-none fw-semibold" style="color: #064E3B;">Daftar Sekarang</a>
            </p>
        </div>
    </div>
</div>