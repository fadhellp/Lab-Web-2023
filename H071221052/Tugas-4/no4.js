let list = prompt("Masukkan angka dengan pemisah spasi").split(" ").map((str) => parseInt(str))
// Program meminta pengguna untuk memasukkan angka-angka yang dipisahkan oleh spasi melalui fungsi prompt(). 
// Nilai yang dimasukkan kemudian dipisahkan menjadi array menggunakan .split(" "), yang memisahkan input berdasarkan spasi. 
// Fungsi .map((str) => parseInt(str)) digunakan untuk mengonversi setiap elemen dalam array dari string menjadi integer.
for (let i in list){ //Memulai loop for...in untuk mengiterasi melalui indeks array list
    for (let j = 0; j < list.length; j++) { //Memulai loop for dalam loop for...in. Loop ini digunakan untuk membandingkan setiap elemen array dengan elemen-elemen lainnya.
        if (list[j] > list[j + 1]) { //Memeriksa apakah elemen saat ini (list[j]) lebih besar dari elemen berikutnya (list[j + 1]).
            let sementara = list[j] //Jika elemen saat ini lebih besar dari elemen berikutnya, nilai elemen saat ini disimpan dalam variabel sementara
            list[j] = list[j + 1] //Nilai elemen berikutnya kemudian dipindahkan ke elemen saat ini
            list[j + 1] = sementara //Nilai elemen sementara dipindahkan ke elemen berikutnya, sehingga elemen-elemen dipertukarkan.
        }
    }
}
alert(list)

