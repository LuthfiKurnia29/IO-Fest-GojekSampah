@extends('layouts.layout')
@section('content')
<section class="py-5" style="background-color: #fdfbff;">
  <div class="container">
    <div class="row align-items-center">
      
      <div class="col-lg-6 mb-5 mb-lg-0">
        <span class="badge rounded-pill px-3 py-2 mb-4" style="background-color: #e8eaf6; color: #5c6bc0;">
          <i class="bi bi-shield-check me-1"></i> Conscious Stewardship
        </span>
        
        <h1 class="display-4 fw-bold mb-3" style="color: #064e3b;">
          Ubah Sampah Menjadi <br>
          <span style="color: #78350f;">Berkah.</span>
        </h1>
        
        <p class="text-muted mb-5" style="max-width: 500px; line-height: 1.8;">
          Envyra memberdayakan komunitas untuk mendaur ulang dengan cerdas. 
          Kumpulkan poin, tukarkan dengan kebutuhan pokok, dan jadilah 
          bagian dari solusi global untuk planet yang lebih hijau.
        </p>
        
        <div class="d-flex gap-3">
          <a href="#" class="btn btn-lg px-4 py-3 shadow-sm text-white" style="background-color: #064e3b; border-radius: 12px;">
            Mulai Daur Ulang
          </a>
          <a href="#" class="btn btn-lg px-4 py-3 border shadow-sm" style="color: #78350f; border-color: #d1d5db; border-radius: 12px;">
            Jelajahi Marketplace <i class="bi bi-arrow-right ms-2"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-6 position-relative">
        <div class="ps-lg-5">
          <img src="https://images.unsplash.com/photo-1611284446314-60a58ac0deb9?auto=format&fit=crop&q=80&w=800" 
               alt="Waste Management" 
               class="img-fluid shadow-lg rounded-4 w-100">

          <div class="position-absolute bottom-0 start-0 mb-4 ms-3 ms-lg-5 p-3 bg-white bg-opacity-75 shadow-sm rounded-4 d-flex align-items-center border" 
               style="backdrop-filter: blur(8px); min-width: 300px;">
            <div class="rounded-circle d-flex align-items-center justify-content-center me-3" 
                 style="width: 50px; height: 50px; background-color: #064e3b;">
              <i class="bi bi-recycle text-white fs-4"></i>
            </div>
            <div>
              <small class="text-secondary d-block">Dampak Anda Bulan Ini</small>
              <strong class="fs-5" style="color: #064e3b;">45 kg Terselamatkan</strong>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
@endsection
