const container = document.getElementById("container-sampah");
const btnTambah = document.getElementById("btn-tambah");
const template = document.getElementById("baris-sampah-template");

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

btnTambah.addEventListener("click", () => {
    const clone = template.content.cloneNode(true);
    container.appendChild(clone);
    aturTombolHapus();
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
        }, 150);
    }
});

btnTambah.click();


