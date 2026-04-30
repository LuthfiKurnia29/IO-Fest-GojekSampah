<div class="d-flex flex-column justify-content-center align-items-center py-5" style="background-color: #F8F9FA;">

    <div class="card border-0 shadow-sm rounded-3 w-100 p-4 p-sm-5" style="max-width: 450px;">
        <div class="card-body p-0 text-center">
            <div class="d-inline-flex align-items-center justify-content-center rounded-3 mb-3" style="width: 56px; height: 56px; background-color: #D1E8D5; color: #064E3B;">
                <svg fill="#000000" width="165px" height="165px" viewBox="-2.4 -2.4 20.80 20.80" id="new-password-16px" xmlns="http://www.w3.org/2000/svg" transform="matrix(1, 0, 0, 1, 0, 0)rotate(0)" stroke="#000000" stroke-width="0.304">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path id="Path_64" data-name="Path 64" d="M29.5-228h5a.5.5,0,0,0,.5-.5v-4a.5.5,0,0,0-.5-.5H34v-1a2,2,0,0,0-2-2,2,2,0,0,0-2,2v1h-.5a.5.5,0,0,0-.5.5v4A.5.5,0,0,0,29.5-228Zm1.5-6a1,1,0,0,1,1-1,1,1,0,0,1,1,1v1H31Zm-1,2h4v3H30Zm9,0a7.008,7.008,0,0,1-7,7,7.008,7.008,0,0,1-7-7v-1.293l-1.146,1.147A.5.5,0,0,1,23.5-232a.5.5,0,0,1-.354-.146.5.5,0,0,1,0-.708l2-2a.518.518,0,0,1,.163-.109.505.505,0,0,1,.382,0,.518.518,0,0,1,.163.109l2,2a.5.5,0,0,1,0,.708A.5.5,0,0,1,27.5-232a.5.5,0,0,1-.354-.146L26-233.293V-232a6.006,6.006,0,0,0,6,6,6.006,6.006,0,0,0,6-6,6.006,6.006,0,0,0-6-6,.5.5,0,0,1-.5-.5.5.5,0,0,1,.5-.5A7.008,7.008,0,0,1,39-232Z" transform="translate(-23 239)"></path>
                    </g>
                </svg>
            </div>

            <h3 class="fw-bold mb-2" style="color: #1E293B;">Buat Kata Sandi Baru</h3>
            <p class="text-secondary mb-4" style="font-size: 15px;">
                Silahkan masukkan kata sandi baru untuk akun Envyra.
            </p>
            <form class="text-start">
                <div class="mb-3">
                    <label for="password" class="form-label fw-medium text-dark" style="font-size: 14px;">Kata Sandi Baru</label>
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

                <div class="mb-3">
                    <label for="password" class="form-label fw-medium text-dark" style="font-size: 14px;">Konfirmasi Kata Sandi Baru</label>
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

                <button type="submit" class="btn w-100 fw-medium py-2 mb-4" style="background-color: #064E3B; color: #ffffff;">
                    Perbarui Kata Sandi
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </button>
            </form>
        </div>

        <div class="text-center mt-2">
            Butuh bantuan?
            <a href="{{ url('/login') }}" class="text-decoration-none fw-semibold" style="color: #064E3B;">
                Hubungi Pusat Bantuan</a>
        </div>
    </div>
</div>