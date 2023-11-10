let text = prompt("Masukkan Kata : ").toLocaleLowerCase(); 
let tukar= "";

for (let i of text) { // untuk setiap huruf dalam string
    tukar = i + tukar;
}

if (tukar === text) {
    alert("Ini Palindrom");
} else {
    alert("Ini Bukan Palindrom");
}