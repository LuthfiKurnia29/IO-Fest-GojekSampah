<div style="padding: 32px;">
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" role="alert"
            style="border-radius: 12px;">
            <i class="bi bi-check-circle me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm mb-4" role="alert"
            style="border-radius: 12px;">
            <i class="bi bi-exclamation-triangle me-2"></i> {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="mb-4">
        <h2 class="fw-bold" style="color: #134e4a;">Penjemputan Sampah</h2>
        <p class="text-secondary">Atur jadwal dan detail penjemputan sampah anorganik Anda.</p>
    </div>

    <form method="POST" action="{{ url('/order-pengambilan') }}" class="row g-4">
        @csrf
        <div class="col-lg-4">
            <!-- Informasi Kontak -->
            <div class="card border-0 shadow-sm p-4 mb-4" style="border-radius: 16px;">
                <div class="d-flex align-items-center mb-3">
                    <div class="bg-light-success rounded-circle d-flex align-items-center justify-content-center me-3"
                        style="width: 40px; height: 40px; background-color: #f0fdf4;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>

                    </div>
                    <h6 class="mb-0 fw-bold">Informasi Kontak</h6>
                </div>
                <div class="mb-3">
                    <label class="form-label small text-secondary">Nama Lengkap</label>
                    <input type="text" class="form-control border-0" value="{{ auth()->user()->username }}"
                        style="background-color: #f5f3ff;" readonly>
                </div>
                <div>
                    <label class="form-label small text-secondary">Nomor Telepon</label>
                    <input type="text" class="form-control border-0" value="{{ auth()->user()->phone }}"
                        style="background-color: #f5f3ff;" readonly>
                </div>
            </div>

            <!-- Alamat Penjemputan -->
            <div class="card border-0 shadow-sm p-4" style="border-radius: 16px;">
                <div class="d-flex align-items-center mb-3">
                    <div class="bg-light-success rounded-circle d-flex align-items-center justify-content-center me-3"
                        style="width: 40px; height: 40px; background-color: #f0fdf4;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                        </svg>

                    </div>
                    <h6 class="mb-0 fw-bold">Alamat Penjemputan</h6>
                </div>
                <textarea class="form-control border-light mb-3" rows="3" name="alamat"
                    placeholder="Masukkan alamat lengkap penjemputan...">{{ auth()->user()->alamat }}</textarea>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="card border-0 shadow-sm p-4" style="border-radius: 16px;">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="d-flex align-items-center">
                        <div class="bg-light-success rounded-circle d-flex align-items-center justify-content-center me-3"
                            style="width: 40px; height: 40px; background-color: #f0fdf4;">
                            <svg fill="#059669" width="24" height="24" viewBox="0 -8 72 72" id="Layer_1"
                                data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" stroke="#059669">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <title>recycle</title>
                                    <path
                                        d="M24.42,30.55,27,32.1c.42,0,.64-.18.64-.53a2.3,2.3,0,0,0-.3-.94l-5.6-10.51-12.39.3a.78.78,0,0,0-.84.87c0,.13.18.3.53.53l2.57,1.55L8.84,27.6a6.15,6.15,0,0,0-1.13,3A4.91,4.91,0,0,0,8.46,33l8.43,14.7a12.58,12.58,0,0,1-.3-2.64A8,8,0,0,1,18,40.64l6.43-10.09Z">
                                    </path>
                                    <path
                                        d="M27.67,22,34.62,11.2q-3.9-8.88-8.28-8.88c-1.76,0-2.94.49-3.55,1.47L16.21,14.3,27.67,22Z">
                                    </path>
                                    <path
                                        d="M22,51.15H35.41V37.2H22.49a47.41,47.41,0,0,0-3,4.61,8.66,8.66,0,0,0-1,3.93q0,5.41,3.48,5.41Z">
                                    </path>
                                    <path
                                        d="M49.63,19.4l6-10a2.22,2.22,0,0,0,.3-1.1c0-.45-.15-.68-.45-.68a2.53,2.53,0,0,1-.61.23L52.12,9,49.63,4.09Q48,.77,43,.77H27.44a12.15,12.15,0,0,1,3.85,1.7q2.39,1.89,4.88,7.1l3.1,6.5L37,17.17a.6.6,0,0,0-.34.61c0,.37.24.59.72.64l12.29,1Z">
                                    </path>
                                    <path
                                        d="M55.6,49.07l8.69-15.8a9.69,9.69,0,0,1-4.19,2.95,17.27,17.27,0,0,1-5.18.61H45.24v-2q0-1.17-.57-1.17a.65.65,0,0,0-.6.3L38,44.57l6.35,9.76c.48.73.89,1,1.24.86s.53-.28.53-.56V51.3h5.37a4.33,4.33,0,0,0,4.16-2.23Z">
                                    </path>
                                    <path
                                        d="M51.82,34.82H57.6A6.91,6.91,0,0,0,61.91,33q2.39-1.89,2.38-4a3.47,3.47,0,0,0-.64-1.93l-6.88-10.5L44.94,23.45l6.88,11.37Z">
                                    </path>
                                </g>
                            </svg>
                        </div>
                        <h6 class="mb-0 fw-bold">Daftar Sampah</h6>
                    </div>
                    <span class="badge rounded-pill" style="background-color: #f0fdf4; color: #166534;">2 Jenis
                        Terpilih</span>
                </div>

                <!-- jenis sampah -->
                <div id="container-sampah"></div>

                <button type="button" id="btn-tambah" class="btn btn-outline-secondary w-100 border-dashed py-2 mb-4"
                    style="border-style: dashed;">
                    <i class="bi bi-plus-circle me-2"></i> Tambah Jenis Sampah
                </button>

                <template id="baris-sampah-template">
                    <div class="row g-3 mb-3 p-3 border rounded-3 align-items-end baris-item shadow-sm">
                        <div class="col-md-7">
                            <label class="form-label small fw-bold text-secondary text-uppercase"
                                style="font-size: 0.7rem;">Jenis Sampah</label>
                            <select class="form-select border-0 bg-light" name="jenis_sampah[]">
                                @foreach ($jenisSampah as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label small fw-bold text-secondary text-uppercase"
                                style="font-size: 0.7rem;">Estimasi Berat</label>
                            <div class="input-group">
                                <input type="number" class="form-control border-0 bg-light" name="berat_sampah[]"
                                    value="0">
                                <span class="input-group-text bg-light border-0 text-secondary small">Kg</span>
                            </div>
                        </div>
                        <!-- Tombol Hapus: Hanya Ikon Sampah -->
                        <div class="col-md-1 text-end">
                            <button type="button" class="btn btn-outline-danger border-0 btn-hapus"
                                title="Hapus Baris">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M4 6H20M16 6L15.7294 5.18807C15.4671 4.40125 15.3359 4.00784 15.0927 3.71698C14.8779 3.46013 14.6021 3.26132 14.2905 3.13878C13.9376 3 13.523 3 12.6936 3H11.3064C10.477 3 10.0624 3 9.70951 3.13878C9.39792 3.26132 9.12208 3.46013 8.90729 3.71698C8.66405 4.00784 8.53292 4.40125 8.27064 5.18807L8 6M18 6V16.2C18 17.8802 18 18.7202 17.673 19.362C17.3854 19.9265 16.9265 20.3854 16.362 20.673C15.7202 21 14.8802 21 13.2 21H10.8C9.11984 21 8.27976 21 7.63803 20.673C7.07354 20.3854 6.6146 19.9265 6.32698 19.362C6 18.7202 6 17.8802 6 16.2V6M14 10V17M10 10V17"
                                            stroke="#000000" stroke-width="0.8640000000000001" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                            </button>
                        </div>
                    </div>
                </template>

                <!-- perhitungan -->
                <div class="bg-light rounded-3 p-4 mb-4">
                    <div class="d-flex align-items-center mb-3 text-success small fw-bold">
                        <i class="bi bi-calculator me-2"></i> RINCIAN PERHITUNGAN
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <div>
                            <div class="fw-bold small">Plastik (PET/HDPE)</div>
                            <div class="text-secondary" style="font-size: 0.75rem;">5 Kg x Rp 1.000 / 200 EP</div>
                        </div>
                        <div class="text-end">
                            <div class="fw-bold small">Rp 5.000</div>
                            <div class="text-success fw-bold" style="font-size: 0.75rem;">1.000 EP</div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <div>
                            <div class="fw-bold small">Kertas / Kardus</div>
                            <div class="text-secondary" style="font-size: 0.75rem;">12 Kg x Rp 800 / 125 EP</div>
                        </div>
                        <div class="text-end">
                            <div class="fw-bold small">Rp 9.600</div>
                            <div class="text-success fw-bold" style="font-size: 0.75rem;">1.500 EP</div>
                        </div>
                    </div>
                    <div class="border-top pt-2 d-flex justify-content-between text-secondary"
                        style="font-size: 0.7rem;">
                        <span>* Estimasi tarif berdasarkan berat input</span>
                        <span>Tgl: 24 Mei 2024</span>
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <p class="text-secondary small mb-1 align-items-center d-flex gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                            </svg>
                            Total dihitung berdasarkan rincian jenis sampah di atas
                        </p>
                        <div class="d-flex align-items-center">
                            <div class="me-4">
                                <span class="text-secondary small">Estimasi Poin Didapat</span>
                                <h4 class="fw-bold mb-0 text-dark">
                                    <img src="{{ asset('assets/logo-ep.png') }}" alt="Logo EP" class="me-1"
                                        style="width: 20px; height: 20px;">
                                    2.500
                                    <small class="fs-6 fw-normal">EP</small>
                                </h4>
                            </div>
                            <div>
                                <span class="text-secondary small">Estimasi Tagihan</span>
                                <h4 class="fw-bold mb-0 text-dark">Rp 14.600</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="btn w-100 py-3 fw-bold text-white shadow"
                    style="background-color: #1a3a34; border-radius: 12px;">
                    Ajukan Penjemputan
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </button>
            </div>
        </div>
    </form>
</div>
