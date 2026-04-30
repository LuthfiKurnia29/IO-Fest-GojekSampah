<div class="modal fade" id="modalDetailOrder" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg" style="border-radius: 24px; overflow: hidden;">

            <!-- Header dengan Background Tipis -->
            <div class="modal-header border-0 p-4" style="background-color: #f8fafc;">
                <div>
                    <h5 class="modal-title fw-bold mb-1" style="color: #134e4a;">Konfirmasi Penjemputan</h5>
                    <p class="text-secondary small mb-0">ID Order: <span class="fw-bold">ENV-290424-001</span></p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body p-4">
                <!-- 1. Perbandingan Estimasi vs Aktual -->
                <div class="mb-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <label class="form-label small fw-bold text-uppercase tracking-wider text-secondary mb-0">Verifikasi Item Sampah</label>
                        <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-3">2 Jenis Sampah</span>
                    </div>

                    <!-- Item 1 -->
                    <div class="card border shadow-none mb-3" style="border-radius: 16px; background-color: #fdfdfd;">
                        <div class="card-body p-3">
                            <div class="row align-items-center g-3">
                                <div class="col-md-5">
                                    <div class="fw-bold text-dark">Plastik (PET/HDPE)</div>
                                    <div class="text-muted small">Estimasi User: <span class="fw-bold text-primary">5 Kg</span></div>
                                </div>
                                <div class="col-md-7">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text bg-white border-end-0 text-secondary small">Berat Aktual:</span>
                                        <input type="number" class="form-control border-start-0 fw-bold text-success" placeholder="Masukkan berat asli..." step="0.1" value="5.0">
                                        <span class="input-group-text bg-white text-secondary small">Kg</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="card border shadow-none mb-3" style="border-radius: 16px; background-color: #fdfdfd;">
                        <div class="card-body p-3">
                            <div class="row align-items-center g-3">
                                <div class="col-md-5">
                                    <div class="fw-bold text-dark">Kertas / Kardus</div>
                                    <div class="text-muted small">Estimasi User: <span class="fw-bold text-primary">12 Kg</span></div>
                                </div>
                                <div class="col-md-7">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text bg-white border-end-0 text-secondary small">Berat Aktual:</span>
                                        <input type="number" class="form-control border-start-0 fw-bold text-success" placeholder="Masukkan berat asli..." step="0.1" value="12.0">
                                        <span class="input-group-text bg-white text-secondary small">Kg</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2. Ringkasan Perhitungan Keseluruhan -->
                <div class="p-4" style="background-color: #f0fdf4; border-radius: 20px; border: 1px dashed #bbf7d0;">
                    <div class="d-flex align-items-center mb-3 text-success fw-bold small">
                        <i class="bi bi-calculator-fill me-2"></i> RINGKASAN PEMBAYARAN & POIN
                    </div>

                    <div class="row g-3">
                        <div class="col-6">
                            <div class="mb-3">
                                <small class="text-secondary d-block">Total Berat Aktual</small>
                                <span class="fw-bold fs-5">17.0 <small class="fw-normal">Kg</small></span>
                            </div>
                            <div>
                                <small class="text-secondary d-block">Total Poin (EP)</small>
                                <span class="text-success fw-bold fs-5">+ 2.500 <small class="fw-normal">EP</small></span>
                            </div>
                        </div>
                        <div class="col-6 text-end">
                            <div class="mb-3">
                                <small class="text-secondary d-block">Subtotal Item</small>
                                <span class="fw-bold">Rp 14.600</span>
                            </div>
                            <div>
                                <small class="text-secondary d-block">Biaya Penjemputan</small>
                                <span class="fw-bold text-danger">+ Rp 2.000</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3 pt-3 border-top border-success border-opacity-25 d-flex justify-content-between align-items-center">
                        <span class="fw-bold text-dark fs-6">Total Tagihan</span>
                        <h3 class="fw-bold mb-0 text-dark">Rp 16.600</h3>
                    </div>
                </div>
            </div>

            <div class="modal-footer border-0 p-4 pt-0">
                <div class="row w-100 g-2">
                    <div class="col-4">
                        <button type="button" class="btn btn-light w-100 fw-bold py-2" data-bs-dismiss="modal" style="border-radius: 12px;">Batal</button>
                    </div>
                    <div class="col-8">
                        <button type="button" class="btn w-100 py-2 fw-bold text-white shadow-sm" style="background-color: #1a3a34; border-radius: 12px;">
                            <i class="bi bi-check-circle-fill me-2"></i> Konfirmasi Selesai
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Styling tambahan untuk visual premium */
    .modal-backdrop.show {
        opacity: 0.7;
        backdrop-filter: blur(4px);
    }

    .form-control:focus {
        box-shadow: none;
        border-color: #1a3a34;
    }

    .tracking-wider {
        letter-spacing: 0.05em;
    }
</style>