let decimal = parseInt(prompt("Masukkan angka desimal: "));
let binary = ""; 
if (decimal == 0){
    alert(`Binari dari ${decimal} adalah 0`);
} else{
    while (decimal > 0) { 
        binary = (decimal % 2) + binary; 
        decimal = Math.floor(decimal / 2); 
    }
    alert("Angka binary: " + binary);
}
