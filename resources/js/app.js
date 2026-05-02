document.addEventListener("DOMContentLoaded", () => {
    const container = document.getElementById("container-sampah");
    const btnTambah = document.getElementById("btn-tambah");
    const template = document.getElementById("baris-sampah-template");

    if (!container || !btnTambah || !template) return;

    function aturTombolHapus() {
        const listBaris = container.querySelectorAll(".baris-item");
        listBaris.forEach((baris) => {
            const tombol = baris.querySelector(".btn-hapus");

            if (listBaris.length === 1) {
                tombol.classList.add("d-none");
            } else {
                tombol.classList.remove("d-none");
            }
        });
    }

    function hitungTotal() {
        const listBaris = container.querySelectorAll(".baris-item");
        const rincianList = document.getElementById("rincian-list");
        const totalPoinElem = document.getElementById("total-poin");
        const totalTagihanElem = document.getElementById("total-tagihan");

        let totalPoin = 0;
        let totalTagihan = 0;
        let rincianHtml = "";

        listBaris.forEach((baris) => {
            const idJenis = baris.querySelector('select[name="jenis_sampah[]"]').value;
            const berat = parseFloat(baris.querySelector('input[name="berat_sampah[]"]').value) || 0;

            const dataJenis = window.jenisSampahData ? window.jenisSampahData.find(item => item.id == idJenis) : null;

            if (dataJenis && berat > 0) {
                const harga = dataJenis.harga;
                const epPerKg = harga / 5; // Asumsi dari contoh: Rp 1000 = 200 EP
                const subtotalHarga = harga * berat;
                const subtotalPoin = epPerKg * berat;

                totalTagihan += subtotalHarga;
                totalPoin += subtotalPoin;

                rincianHtml += `
                    <div class="d-flex justify-content-between mb-2">
                        <div>
                            <div class="fw-bold small">${dataJenis.name}</div>
                            <div class="text-secondary" style="font-size: 0.75rem;">${berat} Kg x Rp ${harga.toLocaleString('id-ID')} / ${epPerKg.toLocaleString('id-ID')} EP</div>
                        </div>
                        <div class="text-end">
                            <div class="fw-bold small">Rp ${subtotalHarga.toLocaleString('id-ID')}</div>
                            <div class="text-success fw-bold" style="font-size: 0.75rem;">${subtotalPoin.toLocaleString('id-ID')} EP</div>
                        </div>
                    </div>
                `;
            }
        });

        if (rincianList) {
            rincianList.innerHTML = rincianHtml || '<p class="text-secondary small">Belum ada sampah yang ditambahkan atau berat masih 0.</p>';
        }
        if (totalPoinElem) totalPoinElem.innerText = totalPoin.toLocaleString('id-ID');
        if (totalTagihanElem) totalTagihanElem.innerText = `Rp ${totalTagihan.toLocaleString('id-ID')}`;
    }

    btnTambah.addEventListener("click", () => {
        const clone = template.content.cloneNode(true);
        container.appendChild(clone);
        aturTombolHapus();
        hitungTotal();
    });

    container.addEventListener("click", (e) => {
        const btnHapus = e.target.closest(".btn-hapus");
        if (btnHapus) {
            const item = e.target.closest(".baris-item");

            item.style.opacity = "0";
            item.style.transform = "scale(0.95)";

            setTimeout(() => {
                item.remove();
                aturTombolHapus();
                hitungTotal();
            }, 150);
        }
    });

    container.addEventListener("input", (e) => {
        if (e.target.name === "berat_sampah[]" || e.target.name === "jenis_sampah[]") {
            hitungTotal();
        }
    });

    container.addEventListener("change", (e) => {
        if (e.target.name === "jenis_sampah[]") {
            hitungTotal();
        }
    });

    // Initial load
    if (container.children.length === 0) {
        btnTambah.click();
    }
    hitungTotal();
});


