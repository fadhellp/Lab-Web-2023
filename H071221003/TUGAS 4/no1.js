// let a = 3
// let b = 4
// let hasil = 1;

// for (let i = 1; i <= b; i++) {
//     hasil *= a
// }

// console.log('Hasil dari ' + a + ' pangkat ' + b + ' Adalah : ' + hasil);

// refactoring kode diatas
function pangkat (a,b) {
    return a**b;
}

console.log(pangkat(3,4));