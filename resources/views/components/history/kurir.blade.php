<div class="p-4" style="padding: 32px !important;">
    <div class="row g-3 mb-4">
        <div class="col-12 col-md-6">
            <div class="card border border-light-subtle shadow-sm rounded-4 p-4 h-100">
                <div class="d-flex flex-column align-items-start">
                    <div class="bg-success bg-opacity-10 p-2 rounded-3 mb-3" style="width: 45px; height: 45px; display: flex; align-items: center; justify-content: center;">
                        <svg fill="#000000" width="24" height="24" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M960 1807.059c-467.125 0-847.059-379.934-847.059-847.059 0-467.125 379.934-847.059 847.059-847.059 467.125 0 847.059 379.934 847.059 847.059 0 467.125-379.934 847.059-847.059 847.059M960 0C430.645 0 0 430.645 0 960s430.645 960 960 960 960-430.645 960-960S1489.355 0 960 0M854.344 1157.975 583.059 886.69l-79.85 79.85 351.135 351.133L1454.4 717.617l-79.85-79.85-520.206 520.208Z" fill-rule="evenodd"></path>
                            </g>
                        </svg>
                    </div>

                    <p class="text-muted small fw-medium text-uppercase mb-2" style="letter-spacing: 0.5px;">
                        Total Tugas Selesai
                    </p>

                    <div class="d-flex align-items-baseline">
                        <h1 class="fw-bold mb-0" style="color: #064e3b; font-size: 3rem;">145</h1>
                        <span class="ms-2 fs-4 fw-medium" style="color: #064e3b;">tugas</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="card border border-light-subtle shadow-sm rounded-4 p-4 h-100">
                <div class="d-flex flex-column align-items-start">
                    <div class="bg-success bg-opacity-10 p-2 rounded-3 mb-3" style="width: 45px; height: 45px; display: flex; align-items: center; justify-content: center;">
                        <img src="{{ asset('assets/icon/recycle.svg') }}" alt="Tonase Icon" width="24" height="24">
                    </div>

                    <p class="text-muted small fw-medium text-uppercase mb-2" style="letter-spacing: 0.5px;">
                        Sampah Terkumpul
                    </p>

                    <div class="d-flex align-items-baseline">
                        <h1 class="fw-bold mb-0" style="color: #064e3b; font-size: 3rem;">1.2</h1>
                        <span class="ms-2 fs-4 fw-medium" style="color: #064e3b;">Ton</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
        <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center mb-4 p-3 gap-3">
            <h4 class="fw-bold mb-0" style="color: #134e4a;">
                <img src="{{ asset('assets/icon/history.svg') }}" alt="History Icon" width="24" height="24" class="me-2">
                History
            </h4>

            <div class="d-flex flex-grow-1 justify-content-md-end align-items-center gap-2">
                <button class="btn btn-outline-secondary d-flex align-items-center gap-2 px-3 py-2 rounded-3 shadow-sm bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 0 1-.659 1.591l-5.432 5.432a2.25 2.25 0 0 0-.659 1.591v2.927a2.25 2.25 0 0 1-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 0 0-.659-1.591L3.659 7.409A2.25 2.25 0 0 1 3 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0 1 12 3Z" />
                    </svg>
                    <span>Filter</span>
                </button>

                <input type="text" class="form-control shadow-sm w-100 w-md-auto" style="max-width: 250px;" placeholder="Cari history..." />
            </div>
        </div>

        <div class="table-responsive">
            <table class="table align-middle table-hover mb-0">
                <thead class="table-light">
                    <tr>
                        <th class="ps-3 ps-md-4 border-0">Tanggal</th>
                        <th class="border-0">Pelanggan</th>
                        <th class="border-0 d-none d-sm-table-cell">Berat</th>
                        <th class="border-0 text-center">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="ps-3 ps-md-4">
                            <div class="fw-bold text-dark" style="white-space: nowrap;">12 Mar 2024</div>
                            <small class="text-muted">ID: #SPH-9921</small>
                            <div class="d-sm-none fw-medium text-success mt-1" style="font-size: 0.78rem;">+5.5 kg</div>
                        </td>

                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://ui-avatars.com/api/?name=Budi+Santoso&background=random"
                                    alt="Profile"
                                    class="rounded-circle me-2"
                                    width="32" height="32">
                                <div style="white-space: nowrap;">
                                    <span class="fw-medium d-block">Budi Santoso</span>
                                </div>
                            </div>
                        </td>

                        <td class="d-none d-sm-table-cell fw-medium text-success" style="white-space: nowrap;">
                            +5.5 kg
                        </td>

                        <td class="text-center">
                            <span class="badge bg-success-subtle text-success px-2 px-md-3 py-1 rounded-pill"
                                style="font-size: 0.72rem; white-space: nowrap;">
                                Selesai
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="card-footer bg-white border-0 py-3 px-4">
            <div class="d-flex flex-column flex-sm-row justify-content-between align-items-center gap-3">
                <small class="text-muted">Menampilkan 1-10 dari 120 data</small>
                <nav>
                    <ul class="pagination pagination-sm mb-0">
                        <li class="page-item disabled"><a class="page-link rounded-start" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link rounded-end" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>