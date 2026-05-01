<div style="padding: 32px; background-color: #f8fafc;">
    <!-- Header Section -->
    <div class="mb-4">
        <h1 class="fw-bold" style="color: #064e3b;">Selamat Datang, {{ Auth::user()->name }}!</h1>
        <p class="text-secondary">Mari lanjut berkontribusi untuk bumi yang lebih hijau hari ini.</p>
    </div>

    <div class="row g-4">
        <!-- Left Column: Stats -->
        <div class="col-lg-4">
            <!-- Point Card -->
            <div class="card border-0 text-white p-4 mb-4 position-relative overflow-hidden shadow-sm"
                style="background-color: #1a5336; border-radius: 20px; height: 210px;">
                <div class="position-relative z-1">
                    <p class="small mb-2 opacity-75">Total Poin Saya</p>
                    <div class="d-flex align-items-end gap-2 mb-3">
                        <h1 class="fw-bold mb-0 display-4">{{ Auth::user()->points??0 }}</h1>
                        <span class="h4 mb-1 fw-bold">EP</span>
                    </div>
                </div>
                <!-- Abstract Circle Decor -->
                <div class="position-absolute" style="right: -30px; top: -10px; opacity: 0.15;">
                    <svg width="200" height="200" viewBox="0 0 200 200">
                        <img src="{{ asset('assets/logo-ep.png') }}" alt="Leaf Icon" class="position-absolute"
                            style="width: 175px; height: 175px; top: 18px; left: 18px;" />
                    </svg>
                </div>
            </div>

            <!-- Weight Card -->
            <div class="card border-0 shadow-sm p-4" style="border-radius: 20px;">
                <div class="d-flex align-items-center">
                    <div class="rounded-circle d-flex align-items-center justify-content-center me-3"
                        style="width: 60px; height: 60px; background-color: #f0fdf4;">
                        <svg fill="#000000" width="30" height="30" viewBox="-0.77 0 50 50" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g id="_3" data-name="3" transform="translate(-290.767 -130.5)">
                                    <path id="Path_224" data-name="Path 224" d="M337.753,130.5h-45.5c-.818,0-1.483.485-1.483,1.081a1.148,1.148,0,0,0,.943,1h46.584a1.147,1.147,0,0,0,.939-1C339.233,130.985,338.57,130.5,337.753,130.5Z"></path>
                                    <path id="Path_225" data-name="Path 225" d="M335.961,177.3h-.439V162.5a20.258,20.258,0,0,0,.013-3.459,20.081,20.081,0,0,0-16.913-19.822v-2.266h15.692a1.406,1.406,0,0,0,1.446-1.364l.947-1.954H293.294l.889,1.954a1.407,1.407,0,0,0,1.448,1.364h16.3v2.32c-.092.016-.184.029-.275.046a20.087,20.087,0,0,0-16.26,18.789,1.674,1.674,0,0,0-.137.656V177.3h-1.215a1.6,1.6,0,0,0,0,3.2h41.92a1.6,1.6,0,0,0,0-3.2Zm-20.018-5.067v-2.577h-.732v2.577a13.6,13.6,0,0,1-13.163-13.662c0-.043.005-.084.005-.126h2.381v-.73H302.09a13.584,13.584,0,0,1,13.121-12.807v2.86h.732V144.9a13.587,13.587,0,0,1,13.134,12.808h-3.338v.73h3.367v-.116c0,.081.013.159.013.242A13.6,13.6,0,0,1,315.943,172.231Z"></path>
                                    <path id="Path_226" data-name="Path 226" d="M316.1,152.925l-.037-.005v-2.839c0-.172-.217-.31-.485-.31s-.485.138-.485.31v2.839l-.038.005a5.375,5.375,0,1,0,1.045,0Zm-.524,10a4.629,4.629,0,0,1-.87-9.169V156a2.367,2.367,0,0,0-1.65,2.22,2.527,2.527,0,0,0,5.044,0,2.368,2.368,0,0,0-1.65-2.22v-2.247a4.629,4.629,0,0,1-.874,9.169Z"></path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div>
                        <p class="text-secondary small mb-0 fw-bold">Total Berat Sampah</p>
                        <h2 class="fw-bold mb-0">42.5 <small class="fs-6 fw-normal">Kg</small></h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column: Sorting Guide -->
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm p-4 h-100" style="border-radius: 20px;">
                <h5 class="fw-bold mb-4" style="color: #064e3b;">Panduan Pemilahan</h5>
                <div class="row g-3 mb-4">
                    <div class="col-md-4">
                        <div class="p-3 rounded-4 h-100 border-0 bg-light" style="background-color: #f8fafc !important;">
                            <div class="rounded-3 p-2 bg-success bg-opacity-10 text-success d-inline-block mb-3">
                                <img src="{{ asset('assets/icon/recycle.svg') }}" alt="Weight Icon" style="width: 30px; height: 30px;">
                            </div>
                            <h6 class="fw-bold">Plastik</h6>
                            <p class="small text-secondary mb-0">Bersihkan sisa makanan, lepaskan label plastik.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 rounded-4 h-100 border-0 bg-light">
                            <div class="rounded-3 p-2 bg-warning bg-opacity-10 text-warning d-inline-block mb-3">
                                <svg fill="#000000" viewBox="-8 0 32 32" width="30" height="30" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <title>paper</title>
                                        <path d="M13.52 5.72h-7.4c-0.36 0-0.56 0.2-0.6 0.24l-5.28 5.28c-0.040 0.040-0.24 0.24-0.24 0.56v12.2c0 1.24 1 2.24 2.24 2.24h11.24c1.24 0 2.24-1 2.24-2.24v-16.040c0.040-1.24-0.96-2.24-2.2-2.24zM5.28 8.56v1.8c0 0.32-0.24 0.56-0.56 0.56h-1.84l2.4-2.36zM14.080 24.040c0 0.32-0.28 0.56-0.56 0.56h-11.28c-0.32 0-0.56-0.28-0.56-0.56v-11.36h3.040c1.24 0 2.24-1 2.24-2.24v-3.040h6.52c0.32 0 0.56 0.24 0.56 0.56l0.040 16.080z"></path>
                                    </g>
                                </svg>
                            </div>
                            <h6 class="fw-bold">Kertas</h6>
                            <p class="small text-secondary mb-0">Lipat agar rapi, pastikan tidak terkena minyak.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 rounded-4 h-100 border-0 bg-light">
                            <div class="rounded-3 p-2 bg-primary bg-opacity-10 text-primary d-inline-block mb-3">
                                <svg fill="#000000" width="30" height="30" viewBox="0 0 512 512" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <g id="Crane">
                                            <g id="XMLID_1633_">
                                                <path d="M255.508,98.937c-6.39,0-11.589,5.199-11.589,11.589c0,6.391,5.199,11.589,11.589,11.589 c6.39,0,11.589-5.199,11.589-11.589C267.098,104.135,261.899,98.937,255.508,98.937z" id="XMLID_1634_"></path>
                                                <rect height="23" id="XMLID_1635_" width="99" x="206" y="2"></rect>
                                                <path d="M308.031,45H203.032l-51.56,131h209.057L308.031,45z M255.508,142.04 c-17.377,0-31.515-14.137-31.515-31.515c0-17.377,14.137-31.514,31.515-31.514c17.377,0,31.515,14.137,31.515,31.514 C287.023,127.903,272.886,142.04,255.508,142.04z" id="XMLID_1642_"></path>
                                                <polygon id="XMLID_1643_" points="189.902,230 321.18,230 352.138,196 159.618,196 "></polygon>
                                                <rect height="45" id="XMLID_1650_" width="121" x="195" y="250"></rect>
                                                <path d="M257.598,467.53c-4.952,11.692-16.348,19.47-29.03,19.47h-10.776c-11.52,0-22.295-4.589-30.338-12.877 c-8.039-8.282-12.276-19.476-11.932-31.004C176.198,420.507,195.47,402,218.482,402h8.47C252.059,402,273,381.862,273,356.755V315 h-24v41.755c0,12.327-9.721,23.245-22.048,23.245h-9.16c-17.576,0-34.087,6.453-46.494,18.98 c-12.403,12.523-19.14,28.751-18.971,46.333C152.672,481.059,182.471,510,218.755,510h9.814c26.756,0,49.087-19,53.784-45H260.7 C259.133,465,258.07,466.415,257.598,467.53z" id="XMLID_1651_"></path>
                                            </g>
                                        </g>
                                        <g id="Layer_1"></g>
                                    </g>
                                </svg>
                            </div>
                            <h6 class="fw-bold">Logam</h6>
                            <p class="small text-secondary mb-0">Pisahkan tutup botol logam dan kaleng makanan.</p>
                        </div>
                    </div>
                </div>
                <button class="btn w-100 py-3 fw-bold text-white shadow-sm mt-auto"
                    style="background-color: #064e3b; border-radius: 12px;">
                    <svg viewBox="0 0 24 24" width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.52832 16.826C8.53464 17.7132 8.01843 18.5166 7.22106 18.8607C6.42369 19.2047 5.50274 19.0213 4.88882 18.3962C4.27491 17.7712 4.08935 16.828 4.41891 16.0077C4.74847 15.1873 5.52803 14.652 6.39307 14.652C6.95731 14.6499 7.49925 14.8777 7.89969 15.2854C8.30013 15.6931 8.52625 16.2473 8.52832 16.826V16.826Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.7015 16.826C18.7078 17.7132 18.1916 18.5166 17.3942 18.8607C16.5969 19.2047 15.6759 19.0213 15.062 18.3962C14.4481 17.7712 14.2625 16.828 14.5921 16.0077C14.9216 15.1873 15.7012 14.652 16.5662 14.652C17.1305 14.6499 17.6724 14.8777 18.0728 15.2854C18.4733 15.6931 18.6994 16.2473 18.7015 16.826Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M14.1804 17.576C14.5946 17.576 14.9304 17.2403 14.9304 16.826C14.9304 16.4118 14.5946 16.076 14.1804 16.076V17.576ZM8.5254 16.076C8.11119 16.076 7.7754 16.4118 7.7754 16.826C7.7754 17.2403 8.11119 17.576 8.5254 17.576V16.076ZM13.4304 16.826C13.4304 17.2403 13.7662 17.576 14.1804 17.576C14.5946 17.576 14.9304 17.2403 14.9304 16.826H13.4304ZM14.9304 11.559C14.9304 11.1448 14.5946 10.809 14.1804 10.809C13.7662 10.809 13.4304 11.1448 13.4304 11.559H14.9304ZM14.1804 16.076C13.7662 16.076 13.4304 16.4118 13.4304 16.826C13.4304 17.2403 13.7662 17.576 14.1804 17.576V16.076ZM14.43 17.576C14.8442 17.576 15.18 17.2403 15.18 16.826C15.18 16.4118 14.8442 16.076 14.43 16.076V17.576ZM18.6972 16.0761C18.283 16.0779 17.9487 16.4151 17.9505 16.8293C17.9523 17.2435 18.2896 17.5779 18.7038 17.576L18.6972 16.0761ZM20.9625 14.485L21.7125 14.4816C21.7123 14.4384 21.7084 14.3954 21.7008 14.3529L20.9625 14.485ZM21.1772 11.4269C21.1042 11.0192 20.7146 10.7478 20.3068 10.8208C19.8991 10.8937 19.6277 11.2834 19.7007 11.6912L21.1772 11.4269ZM14.1794 6.12705C13.7652 6.12705 13.4294 6.46283 13.4294 6.87705C13.4294 7.29126 13.7652 7.62705 14.1794 7.62705V6.12705ZM17.7587 6.87705V7.62705C17.7637 7.62705 17.7688 7.627 17.7739 7.62689L17.7587 6.87705ZM19.3783 7.55055L19.9178 7.02951L19.9178 7.02951L19.3783 7.55055ZM20.0197 9.21805L19.27 9.19669C19.2685 9.24804 19.2723 9.2994 19.2814 9.34996L20.0197 9.21805ZM19.6996 11.691C19.7725 12.0987 20.1621 12.3702 20.5699 12.2974C20.9776 12.2245 21.2491 11.8349 21.1763 11.4271L19.6996 11.691ZM14.9284 6.87705C14.9284 6.46283 14.5927 6.12705 14.1784 6.12705C13.7642 6.12705 13.4284 6.46283 13.4284 6.87705H14.9284ZM13.4284 11.559C13.4284 11.9733 13.7642 12.309 14.1784 12.309C14.5927 12.309 14.9284 11.9733 14.9284 11.559H13.4284ZM13.4284 6.87705C13.4284 7.29126 13.7642 7.62705 14.1784 7.62705C14.5927 7.62705 14.9284 7.29126 14.9284 6.87705H13.4284ZM14.1784 6.07705L14.9285 6.07705L14.9284 6.07167L14.1784 6.07705ZM13.1137 5.00005L13.1137 5.75006L13.1187 5.75003L13.1137 5.00005ZM3.50512 5.00005L3.498 5.75005H3.50512V5.00005ZM2.75423 5.31075L2.22207 4.78225L2.22207 4.78225L2.75423 5.31075ZM2.4375 6.07505L1.6875 6.06834V6.07505H2.4375ZM2.4375 15.75L1.68747 15.75L1.68753 15.7568L2.4375 15.75ZM2.75423 16.5143L3.28638 15.9858L3.28638 15.9858L2.75423 16.5143ZM3.50512 16.825L3.50512 16.075L3.498 16.0751L3.50512 16.825ZM4.25783 17.575C4.67204 17.575 5.00783 17.2393 5.00783 16.825C5.00783 16.4108 4.67204 16.075 4.25783 16.075V17.575ZM14.1804 10.809C13.7662 10.809 13.4304 11.1448 13.4304 11.559C13.4304 11.9733 13.7662 12.309 14.1804 12.309V10.809ZM20.4399 12.309C20.8541 12.309 21.1899 11.9733 21.1899 11.559C21.1899 11.1448 20.8541 10.809 20.4399 10.809V12.309ZM14.1804 16.076H8.5254V17.576H14.1804V16.076ZM14.9304 16.826V11.559H13.4304V16.826H14.9304ZM14.1804 17.576H14.43V16.076H14.1804V17.576ZM18.7038 17.576C19.5117 17.5725 20.281 17.2397 20.8437 16.6573L19.765 15.615C19.4792 15.9108 19.0947 16.0743 18.6972 16.0761L18.7038 17.576ZM20.8437 16.6573C21.4058 16.0756 21.7162 15.2926 21.7125 14.4816L20.2125 14.4885C20.2145 14.9137 20.0514 15.3186 19.765 15.615L20.8437 16.6573ZM21.7008 14.3529L21.1772 11.4269L19.7007 11.6912L20.2242 14.6172L21.7008 14.3529ZM14.1794 7.62705H17.7587V6.12705H14.1794V7.62705ZM17.7739 7.62689C18.1691 7.61888 18.5544 7.7771 18.8389 8.07158L19.9178 7.02951C19.3477 6.43922 18.5622 6.1106 17.7434 6.1272L17.7739 7.62689ZM18.8389 8.07158C19.124 8.36679 19.282 8.77315 19.27 9.19669L20.7694 9.2394C20.7928 8.41808 20.4872 7.61907 19.9178 7.02951L18.8389 8.07158ZM19.2814 9.34996L19.6996 11.691L21.1763 11.4271L20.758 9.08613L19.2814 9.34996ZM13.4284 6.87705V11.559H14.9284V6.87705H13.4284ZM14.9284 6.87705V6.07705H13.4284V6.87705H14.9284ZM14.9284 6.07167C14.9213 5.07677 14.1245 4.24331 13.1088 4.25006L13.1187 5.75003C13.2708 5.74902 13.427 5.87963 13.4285 6.08242L14.9284 6.07167ZM13.1137 4.25005H3.50512V5.75005H13.1137V4.25005ZM3.51225 4.25008C3.02654 4.24547 2.5628 4.43917 2.22207 4.78225L3.28638 5.83925C3.3461 5.77912 3.42257 5.7493 3.498 5.75001L3.51225 4.25008ZM2.22207 4.78225C1.88199 5.12468 1.69183 5.58769 1.68753 6.06834L3.18747 6.08175C3.18832 5.98687 3.22602 5.90003 3.28638 5.83925L2.22207 4.78225ZM1.6875 6.07505V15.75H3.1875V6.07505H1.6875ZM1.68753 15.7568C1.69183 16.2374 1.88199 16.7004 2.22207 17.0428L3.28638 15.9858C3.22602 15.9251 3.18832 15.8382 3.18747 15.7433L1.68753 15.7568ZM2.22207 17.0428C2.5628 17.3859 3.02654 17.5796 3.51225 17.575L3.498 16.0751C3.42257 16.0758 3.3461 16.046 3.28638 15.9858L2.22207 17.0428ZM3.50512 17.575H4.25783V16.075H3.50512V17.575ZM14.1804 12.309H20.4399V10.809H14.1804V12.309Z" fill="#ffffff"></path>
                        </g>
                    </svg>
                    Mulai Penjemputan
                </button>
            </div>
        </div>
    </div>

    <!-- Bottom Section -->
    <div class="row g-4 mt-2">
        <!-- Recent Activities -->
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm p-4 h-100" style="border-radius: 20px;">
                <h5 class="fw-bold mb-4">Aktivitas Terakhir</h5>
                <div class="vstack gap-3">
                    <!-- Item 1 -->
                    <div class="d-flex align-items-center p-3 border-0 bg-light rounded-4">
                        <div class="rounded-circle bg-success bg-opacity-10 p-1 me-3 text-success d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.52832 16.826C8.53464 17.7132 8.01843 18.5166 7.22106 18.8607C6.42369 19.2047 5.50274 19.0213 4.88882 18.3962C4.27491 17.7712 4.08935 16.828 4.41891 16.0077C4.74847 15.1873 5.52803 14.652 6.39307 14.652C6.95731 14.6499 7.49925 14.8777 7.89969 15.2854C8.30013 15.6931 8.52625 16.2473 8.52832 16.826V16.826Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M18.7015 16.826C18.7078 17.7132 18.1916 18.5166 17.3942 18.8607C16.5969 19.2047 15.6759 19.0213 15.062 18.3962C14.4481 17.7712 14.2625 16.828 14.5921 16.0077C14.9216 15.1873 15.7012 14.652 16.5662 14.652C17.1305 14.6499 17.6724 14.8777 18.0728 15.2854C18.4733 15.6931 18.6994 16.2473 18.7015 16.826Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M14.1804 17.576C14.5946 17.576 14.9304 17.2403 14.9304 16.826C14.9304 16.4118 14.5946 16.076 14.1804 16.076V17.576ZM8.5254 16.076C8.11119 16.076 7.7754 16.4118 7.7754 16.826C7.7754 17.2403 8.11119 17.576 8.5254 17.576V16.076ZM13.4304 16.826C13.4304 17.2403 13.7662 17.576 14.1804 17.576C14.5946 17.576 14.9304 17.2403 14.9304 16.826H13.4304ZM14.9304 11.559C14.9304 11.1448 14.5946 10.809 14.1804 10.809C13.7662 10.809 13.4304 11.1448 13.4304 11.559H14.9304ZM14.1804 16.076C13.7662 16.076 13.4304 16.4118 13.4304 16.826C13.4304 17.2403 13.7662 17.576 14.1804 17.576V16.076ZM14.43 17.576C14.8442 17.576 15.18 17.2403 15.18 16.826C15.18 16.4118 14.8442 16.076 14.43 16.076V17.576ZM18.6972 16.0761C18.283 16.0779 17.9487 16.4151 17.9505 16.8293C17.9523 17.2435 18.2896 17.5779 18.7038 17.576L18.6972 16.0761ZM20.9625 14.485L21.7125 14.4816C21.7123 14.4384 21.7084 14.3954 21.7008 14.3529L20.9625 14.485ZM21.1772 11.4269C21.1042 11.0192 20.7146 10.7478 20.3068 10.8208C19.8991 10.8937 19.6277 11.2834 19.7007 11.6912L21.1772 11.4269ZM14.1794 6.12705C13.7652 6.12705 13.4294 6.46283 13.4294 6.87705C13.4294 7.29126 13.7652 7.62705 14.1794 7.62705V6.12705ZM17.7587 6.87705V7.62705C17.7637 7.62705 17.7688 7.627 17.7739 7.62689L17.7587 6.87705ZM19.3783 7.55055L19.9178 7.02951L19.9178 7.02951L19.3783 7.55055ZM20.0197 9.21805L19.27 9.19669C19.2685 9.24804 19.2723 9.2994 19.2814 9.34996L20.0197 9.21805ZM19.6996 11.691C19.7725 12.0987 20.1621 12.3702 20.5699 12.2974C20.9776 12.2245 21.2491 11.8349 21.1763 11.4271L19.6996 11.691ZM14.9284 6.87705C14.9284 6.46283 14.5927 6.12705 14.1784 6.12705C13.7642 6.12705 13.4284 6.46283 13.4284 6.87705H14.9284ZM13.4284 11.559C13.4284 11.9733 13.7642 12.309 14.1784 12.309C14.5927 12.309 14.9284 11.9733 14.9284 11.559H13.4284ZM13.4284 6.87705C13.4284 7.29126 13.7642 7.62705 14.1784 7.62705C14.5927 7.62705 14.9284 7.29126 14.9284 6.87705H13.4284ZM14.1784 6.07705L14.9285 6.07705L14.9284 6.07167L14.1784 6.07705ZM13.1137 5.00005L13.1137 5.75006L13.1187 5.75003L13.1137 5.00005ZM3.50512 5.00005L3.498 5.75005H3.50512V5.00005ZM2.75423 5.31075L2.22207 4.78225L2.22207 4.78225L2.75423 5.31075ZM2.4375 6.07505L1.6875 6.06834V6.07505H2.4375ZM2.4375 15.75L1.68747 15.75L1.68753 15.7568L2.4375 15.75ZM2.75423 16.5143L3.28638 15.9858L3.28638 15.9858L2.75423 16.5143ZM3.50512 16.825L3.50512 16.075L3.498 16.0751L3.50512 16.825ZM4.25783 17.575C4.67204 17.575 5.00783 17.2393 5.00783 16.825C5.00783 16.4108 4.67204 16.075 4.25783 16.075V17.575ZM14.1804 10.809C13.7662 10.809 13.4304 11.1448 13.4304 11.559C13.4304 11.9733 13.7662 12.309 14.1804 12.309V10.809ZM20.4399 12.309C20.8541 12.309 21.1899 11.9733 21.1899 11.559C21.1899 11.1448 20.8541 10.809 20.4399 10.809V12.309ZM14.1804 16.076H8.5254V17.576H14.1804V16.076ZM14.9304 16.826V11.559H13.4304V16.826H14.9304ZM14.1804 17.576H14.43V16.076H14.1804V17.576ZM18.7038 17.576C19.5117 17.5725 20.281 17.2397 20.8437 16.6573L19.765 15.615C19.4792 15.9108 19.0947 16.0743 18.6972 16.0761L18.7038 17.576ZM20.8437 16.6573C21.4058 16.0756 21.7162 15.2926 21.7125 14.4816L20.2125 14.4885C20.2145 14.9137 20.0514 15.3186 19.765 15.615L20.8437 16.6573ZM21.7008 14.3529L21.1772 11.4269L19.7007 11.6912L20.2242 14.6172L21.7008 14.3529ZM14.1794 7.62705H17.7587V6.12705H14.1794V7.62705ZM17.7739 7.62689C18.1691 7.61888 18.5544 7.7771 18.8389 8.07158L19.9178 7.02951C19.3477 6.43922 18.5622 6.1106 17.7434 6.1272L17.7739 7.62689ZM18.8389 8.07158C19.124 8.36679 19.282 8.77315 19.27 9.19669L20.7694 9.2394C20.7928 8.41808 20.4872 7.61907 19.9178 7.02951L18.8389 8.07158ZM19.2814 9.34996L19.6996 11.691L21.1763 11.4271L20.758 9.08613L19.2814 9.34996ZM13.4284 6.87705V11.559H14.9284V6.87705H13.4284ZM14.9284 6.87705V6.07705H13.4284V6.87705H14.9284ZM14.9284 6.07167C14.9213 5.07677 14.1245 4.24331 13.1088 4.25006L13.1187 5.75003C13.2708 5.74902 13.427 5.87963 13.4285 6.08242L14.9284 6.07167ZM13.1137 4.25005H3.50512V5.75005H13.1137V4.25005ZM3.51225 4.25008C3.02654 4.24547 2.5628 4.43917 2.22207 4.78225L3.28638 5.83925C3.3461 5.77912 3.42257 5.7493 3.498 5.75001L3.51225 4.25008ZM2.22207 4.78225C1.88199 5.12468 1.69183 5.58769 1.68753 6.06834L3.18747 6.08175C3.18832 5.98687 3.22602 5.90003 3.28638 5.83925L2.22207 4.78225ZM1.6875 6.07505V15.75H3.1875V6.07505H1.6875ZM1.68753 15.7568C1.69183 16.2374 1.88199 16.7004 2.22207 17.0428L3.28638 15.9858C3.22602 15.9251 3.18832 15.8382 3.18747 15.7433L1.68753 15.7568ZM2.22207 17.0428C2.5628 17.3859 3.02654 17.5796 3.51225 17.575L3.498 16.0751C3.42257 16.0758 3.3461 16.046 3.28638 15.9858L2.22207 17.0428ZM3.50512 17.575H4.25783V16.075H3.50512V17.575ZM14.1804 12.309H20.4399V10.809H14.1804V12.309Z" fill="#ffffff"></path>
                                </g>
                            </svg>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1 fw-bold small">Penjemputan Sampah</h6>
                            <p class="text-secondary mb-0 small">12 Jan 2024 • 4.5 Kg</p>
                        </div>
                        <span class="badge bg-success bg-opacity-10 text-success rounded-pill px-3 py-2">SELESAI</span>
                    </div>
                    <!-- Item 2 -->
                    <div class="d-flex align-items-center p-3 border-0 bg-light rounded-4 d-flex align-items-center justify-content-center">
                        <div class="rounded-circle bg-primary bg-opacity-10 p-1 me-3 text-primary">
                            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M20.2059 14.9709C19.6687 17.6567 19.4001 18.9996 18.5127 19.8646C18.3486 20.0244 18.1712 20.1699 17.9823 20.2994C16.9601 21 15.5906 21 12.8515 21H11.1486C8.40956 21 7.04004 21 6.01786 20.2994C5.82894 20.1699 5.65149 20.0244 5.48746 19.8646C4.59999 18.9996 4.33141 17.6567 3.79424 14.9709C3.02304 11.1149 2.63744 9.18686 3.5251 7.82067C3.68582 7.5733 3.87342 7.34447 4.08447 7.13836C5.25004 6 7.21622 6 11.1486 6H12.8515C16.7839 6 18.7501 6 19.9157 7.13836C20.1267 7.34447 20.3143 7.5733 20.475 7.82067C20.9861 8.60728 21.0751 9.58013 20.9114 11" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path>
                                    <circle cx="15" cy="10" r="1" fill="#ffffff"></circle>
                                    <circle cx="9" cy="10" r="1" fill="#ffffff"></circle>
                                    <path d="M9 6V5C9 3.34315 10.3431 2 12 2C13.6569 2 15 3.34315 15 5V6" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path>
                                </g>
                            </svg>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1 fw-bold small">Tukar Poin Sembako</h6>
                            <p class="text-secondary mb-0 small">10 Jan 2024 • -2.500 EP</p>
                        </div>
                        <span class="badge bg-success bg-opacity-10 text-success rounded-pill px-3 py-2">SELESAI</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Exchange Recommendations -->
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm p-4 h-100" style="border-radius: 20px;">
                <h5 class="fw-bold mb-4">Rekomendasi Penukaran</h5>
                <div class="row g-3">
                    <div class="col-6">
                        <div class="card border h-100 rounded-4 overflow-hidden">
                            <div class="bg-info bg-opacity-25 d-flex align-items-center justify-content-center fw-bold text-info display-4" style="height: 140px;">A</div>
                            <div class="card-body p-3">
                                <h6 class="fw-bold small mb-1">Paket Sembako A</h6>
                                <p class="text-success small fw-bold mb-3"><i class="bi bi-star-fill me-1"></i> 2.500 EP</p>
                                <button class="btn btn-light w-100 text-success small fw-bold py-2" style="background-color: #f0fdf4;">Tukar Sekarang</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card border h-100 rounded-4 overflow-hidden">
                            <div class="bg-light d-flex align-items-center justify-content-center" style="height: 140px;">
                                <i class="bi bi-handbag text-secondary display-4"></i>
                            </div>
                            <div class="card-body p-3">
                                <h6 class="fw-bold small mb-1">Reusable Totebag</h6>
                                <p class="text-success small fw-bold mb-3"><i class="bi bi-star-fill me-1"></i> 1.200 EP</p>
                                <button class="btn btn-light w-100 text-success small fw-bold py-2" style="background-color: #f0fdf4;">Tukar Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>