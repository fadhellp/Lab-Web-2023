function pangkat(angka, pangkat) {
    let hasil = 1;
    for (let i = 0; i < pangkat; i++) {
        hasil *= angka;
    }
    return hasil;
}

const angka1 = parseInt(prompt("Masukkan angka pertama:"));
const angka2 = parseInt(prompt("Masukkan pangkat:"));

if (!isNaN(angka1) && !isNaN(angka2)) {
    const hasilPangkat = pangkat(angka1, angka2);
    alert(`Hasil pangkat dari ${angka1} pangkat ${angka2} adalah ${hasilPangkat}`);
} else {
    alert("Masukan tidak valid. Harap masukkan angka.");
}