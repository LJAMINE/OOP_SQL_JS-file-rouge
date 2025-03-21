// facile

let nombres = [1, 2, 3, 4, 5];

console.log(nombres);

console.log(nombres[2]);

for (let i = 0; i < nombres.length; i++) {
  console.log(nombres[i]);
}

//moyenne

function sommeTableau(tableau) {
  let total = 0;
  for (let i = 0; i < tableau.length; i++) {
    total += tableau[i];
  }
  return total / tableau.length;
}

let tablee = [4, 4, 4];
console.log(sommeTableau(tablee));

// let newval=10
// let i=0
// while (i<=newval) {

//     console.log(i)

//     i++
// }

let newval = 10;
let i = 0;
do {
  console.log(i);
  i++;
} while (i <= newval);

// Créer pairs avec les nombres pairs de 1 à 20.

let pairarray = [];
let impairarray = [];

for (let i = 0; i < 20; i++) {
  if (i % 2 === 0) {
    pairarray.push(i);
  } else {
    impairarray.push(i);
  }
}

console.log(pairarray);
console.log(impairarray);

// Inverser un tableau avec une boucle.-------

let tableinverse = [1, 2, 3];

for (let i = tableinverse.length - 1; i >= 0; i--) {
  // console.log(tableinverse[i])
}

//difficle

function trouverMax(tableau) {
  let max = [0];
  for (let i = 0; i < tableau.length; i++) {
    if (max > tableau[i]) {
      // console.log(max)
    } else {
      max = tableau[i];
      // console.log(max)
    }
  }
  return max;
}

// let newone=[11111,222,3]
// console.log(trouverMax(newone))



// sort---------------------------------------------
let triertable = [9999, 322, 1];

for (let i = 0; i < triertable.length; i++) {
  for (let j = 0; j < triertable.length - 1; j++) {
    let swap;
    if (triertable[j + 1] < triertable[j]) {
      swap = triertable[j];
      triertable[j] = triertable[j + 1];
      triertable[j + 1] = swap;
    }
  }
  console.log(triertable);
}

//-------------------merge and sort 
let array1 = [5, 2, 9];
let array2 = [3, 7, 1];
let mergedArray = [];

for (let i = 0; i < array1.length; i++) {
  mergedArray.push(array1[i]);
}
for (let i = 0; i < array2.length; i++) {
  mergedArray.push(array2[i]);
}


for (let i = 0; i < mergedArray.length; i++) {

    for (let z = 0; z < mergedArray.length-1; z++) {

        let swap
        if (mergedArray[z+1]<mergedArray[z]) {
            swap=mergedArray[z];
            mergedArray[z]=mergedArray[z+1];
            mergedArray[z+1]=swap;
        }
    }
    
}


console.log(mergedArray);



// Créer supprimerDoublons(tableau) sans doublons.


let tabledoblon=[1,2,2,3]

for (let i = 0; i < tabledoblon.length; i++) {

if (tabledoblon[i]===tabledoblon[i+1]) {
    // tabledoblon.pop(tabledoblon[i])
    tabledoblon.splice(i+1,1)
}
    
}
console.log(tabledoblon)