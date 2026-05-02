<x-layouts.sidebar>
    <x-layouts.header />

    <div class="container-fluid py-4" style="background-color: #f8f9fa; min-height: 100vh;">
        <div class="row align-items-center mb-4">
            <div class="col-12 col-lg-6 mb-3 mb-lg-0">
                <h3 class="fw-bold text-dark mb-1">Jejak Kebaikan Anda</h3>
                <p class="text-muted small mb-0">Pantau kontribusi lingkungan dan penukaran poin Anda di satu tempat.</p>
            </div>
            <div class="col-12 col-lg-6 d-flex justify-content-lg-end">
                <ul class="nav nav-pills p-1 bg-history border rounded-pill shadow-sm" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active rounded-pill px-4" id="pills-sampah-tab" data-bs-toggle="pill" data-bs-target="#pills-sampah" type="button" role="tab">Riwayat Sampah</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link rounded-pill px-4" id="pills-market-tab" data-bs-toggle="pill" data-bs-target="#pills-market" type="button" role="tab">Riwayat Market</button>
                    </li>
                </ul>
            </div>
        </div>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-sampah" role="tabpanel">
                @include('components.history.user-sampah')
            </div>
            <div class="tab-pane fade" id="pills-market" role="tabpanel">
                @include('components.history.user-market')
            </div>
        </div>
    </div>
</x-layouts.sidebar>