<div class="d-flex flex-column justify-content-center align-items-center py-5" style="background-color: #F8F9FA;">

    <div class="card border-0 shadow-sm rounded-3 w-100 p-4 p-sm-5" style="max-width: 450px;">
        <div class="card-body p-0 text-center">
            <div class="d-inline-flex align-items-center justify-content-center rounded-3 mb-3" style="width: 56px; height: 56px; background-color: #D1E8D5; color: #064E3B;">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" />
                </svg>
            </div>

            <h3 class="fw-bold mb-2" style="color: #1E293B;">Lupa Kata Sandi?</h3>
            <p class="text-secondary mb-4" style="font-size: 15px;">
                Masukkan alamat email Anda yang terdaftar dan kami akan mengirimkan tautan untuk
                <br class="d-none d-sm-block"> mengatur ulang kata sandi Anda.
            </p>
            <form class="text-start">
                <div class="mb-3">
                    <label for="email" class="form-label fw-medium text-dark" style="font-size: 14px;">Email</label>
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

                <button type="submit" class="btn w-100 fw-medium py-2 mb-4" style="background-color: #064E3B; color: #ffffff;">
                    Kirim Tautan
                </button>
            </form>
        </div>

        <div class="text-center mt-2">
            <a href="{{ url('/login') }}" class="text-decoration-none fw-semibold" style="color: #064E3B;">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                </svg>
                Kembali ke Masuk</a>
        </div>
    </div>
</div>