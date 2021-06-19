const arrayA = [5, 32, 3, 44, 1];
const arrayB = [57, 4, 21, 2, 13];
let menorA = [],
  menorB = [];

//console.log(menorA);
// for (let itemB of arrayB){
//     if (itemB < menorB[i]) {
//        menorB.push(itemB);
//         i++;
//     }
// }
// console.log(menorB);

let i = 0;
for (let itemA of arrayA) {
  if (itemA < arrayA[i + 1]) {
    menorA.push(itemA);
  }
  i++;
}
console.log(menorA);
