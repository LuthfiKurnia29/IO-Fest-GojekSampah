<div class="modal fade" id="assignCourierModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 rounded-4 shadow-lg">
            <div class="modal-header border-0 p-4 pb-0">
                <h5 class="modal-title fw-bold" style="color: #134e4a;">Detail Penugasan Kurir</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body p-4">
                <div class="row g-4">
                    <!-- Sisi Kiri: Informasi Order (Dijabarkan) -->
                    <div class="col-md-6 border-end">
                        <h6 class="fw-bold mb-3 d-flex align-items-center">
                            <i class="bi bi-info-circle me-2 text-success"></i> Rincian Sampah
                        </h6>

                        <!-- List Jenis Sampah Sesuai Referensi -->
                        <div class="container-detail-sampah mb-4">
                            <div class="p-3 rounded-3 bg-light mb-2 border-start border-4 border-primary">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <span class="fw-bold d-block small">Plastik (PET/HDPE)</span>
                                        <small class="text-secondary">Estimasi Berat:</small>
                                    </div>
                                    <span class="badge bg-white text-dark border">5.5 KG</span>
                                </div>
                            </div>
                            <div class="p-3 rounded-3 bg-light mb-2 border-start border-4 border-warning">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <span class="fw-bold d-block small">Kertas / Kardus</span>
                                        <small class="text-secondary">Estimasi Berat:</small>
                                    </div>
                                    <span class="badge bg-white text-dark border">12.0 KG</span>
                                </div>
                            </div>
                        </div>

                        <!-- Perhitungan Tagihan & Poin -->
                        <div class="bg-light-success rounded-3 p-3 border" style="background-color: #f0fdf4;">
                            <div class="d-flex justify-content-between mb-1">
                                <small class="text-secondary">Total Tagihan:</small>
                                <span class="fw-bold">Rp 14.600</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <small class="text-secondary">Estimasi Poin:</small>
                                <span class="fw-bold text-success">2.500 EP</span>
                            </div>
                        </div>
                    </div>

                    <!-- Sisi Kanan: Penugasan Kurir (UX Lebih Efektif) -->
                    <div class="col-md-6">
                        <h6 class="fw-bold mb-3 d-flex align-items-center">
                            <i class="bi bi-person-badge me-2 text-success"></i> Pilih Kurir
                        </h6>

                        <!-- Searchable Courier Selection -->
                        <div class="mb-4">
                            <label class="form-label small text-secondary">Cari Kurir Tersedia</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-light border-end-0"><i class="bi bi-search"></i></span>
                                <input type="text" class="form-control bg-light border-start-0" placeholder="Ketik nama kurir...">
                            </div>

                            <!-- Courier List dengan Scroll (Max Height untuk UX Efektif) -->
                            <div class="overflow-auto" style="max-height: 250px;">
                                <div class="list-group list-group-flush gap-2">
                                    <!-- Item Kurir -->
                                    <label class="list-group-item list-group-item-action border rounded-3 p-3 cursor-pointer">
                                        <div class="d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="selected_courier" value="1">
                                            <div class="flex-grow-1">
                                                <div class="fw-bold small">Rendi Pratama</div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <small class="text-success">● Online</small>
                                                    <small class="text-muted">Kapasitas: 12/25 KG</small>
                                                </div>
                                            </div>
                                        </div>
                                    </label>

                                    <!-- Item Kurir -->
                                    <label class="list-group-item list-group-item-action border rounded-3 p-3 cursor-pointer">
                                        <div class="d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="selected_courier" value="2">
                                            <div class="flex-grow-1">
                                                <div class="fw-bold small">Agus Salim</div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <small class="text-success">● Online</small>
                                                    <small class="text-muted">Kapasitas: 4/25 KG</small>
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer border-0 p-4 pt-0">
                <button type="button" class="btn btn-light px-4 py-2 rounded-3 text-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn text-white px-4 py-2 rounded-3" style="background-color: #1a3a34;">
                    Konfirmasi Penugasan
                </button>
            </div>
        </div>
    </div>
</div>

<style>
    .bg-light-success {
        background-color: #f0fdf4;
    }

    .cursor-pointer {
        cursor: pointer;
        transition: all 0.2s;
    }

    .list-group-item:hover {
        background-color: #f8f9fa;
        border-color: #1a3a34 !important;
    }

    .form-check-input:checked+div .fw-bold {
        color: #1a3a34;
    }

    /* Custom Scrollbar */
    .overflow-auto::-webkit-scrollbar {
        width: 5px;
    }

    .overflow-auto::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    .overflow-auto::-webkit-scrollbar-thumb {
        background: #cbd5e1;
        border-radius: 10px;
    }
</style>