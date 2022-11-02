let arr = 0

// for (var i = n - 1; i > 0; i--) {
//     for (var j = i; j > 0; j--) {
//         if (i % j == 0) {

//         }
//     }
// }

let n = 5;
let counter = 0
let finalcounter = 0

function gcd(m, s) {
    for (let i = 1; i < m; i++) {
        if (m % i == 0 && s % i == 0) {
            counter++
        }
    }
    return counter
}

console.log(gcd(100, 90));
console.log(gcd(100, 6));