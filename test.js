let arr = [0, 1000, 228888, 3];

function max2rams(table) {
  let max1 = table[0];
  let max2 = table[0];

  for (let i = 0; i < table.length; i++) {
    if (table[i] > max1) {
      max2 = max1;
      max1 = table[i];
    } else if (table[i] > max2 && table[i] !== max1) {
      max2 = table[i];
    }
  }
  return max2;
}

console.log(max2rams(arr));

//a

let str = ["amie", "sdf", "lala"];

str.forEach((element) => {
  for (let i = 0; i < element.length; i++) {
    if (element[i] === "a") {
      console.log(element);
      console.log(i);
    }
  }
});

//inverse
let arro = [1, 2, 3];

let somme = 0;
for (let i = 0; i < arro.length; i++) {
  somme += arro[i];
}

console.log(somme);

let inve = [1, 2, 3];
let inverseTbale = [];

for (let i = inve.length - 1; i >= 0; i--) {
  inverseTbale += inve[i];
}

console.log(inverseTbale);

// element manque

let manque = [1, 2, 3, 5];

function manquant(manque) {
  for (let i = 0; i <= manque.length; i++) {
    if (manque[i + 1] !== manque[i] + 1) {
      return manque[i] + 1;
    }
  }
}

console.log(manquant(manque));

// Exercice : Regrouper les Éléments Identiques dans un Tableau

const arrray = ["apple", "banana", "apple", "orange", "banana", "banana"];

let newarray = [];

function enee(arrt) {
  for (let i = 0; i < arrt.length; i++) {
    for (let j = i + 1; j < arrt.length; j++) {
      if (arrt[i] === arrt[j] && !newarray.includes(arrt[i])) {
        newarray.push(arrt[i]);
      }
    }
  }
  return newarray;
}

console.log(enee(arrray));

//🔴 Exercice 6 : Fusionner deux tableaux sans doublons

// const arr1 = [1, 2, 3, 4];
// const arr2 = [3, 4, 5, 6];
// let newtable=[]

// for (let i = 0; i < arr1.length; i++) {
//   newtable.push(arr1[i])

// }

// for (let i = 0; i < arr2.length; i++) {
//     newtable.push(arr2[i])

//   }

// for (let j = 0; j < newtable.length; j++) {
// for (let x = j+1; x < newtable.length; x++) {

//     if (newtable[j]===newtable[x]) {
//         newtable.splice(x,1)
//     }

// }
// }
// console.log(newtable)

// 🔴 Exercice 7 : Inverser un tableau sans utiliser la méthode reverse()

let goarray = [1, 2, 3];
let newinverarray = [];

for (let i = goarray.length - 1; i >= 0; i--) {
  newinverarray.push(goarray[i]);
}
console.log(newinverarray);

// 🔴 Exercice 8 : Trouver les éléments communs dans deux tableaux

let arrayone = [1, 3, 4];
let arraytwo = [1, 8, 4];

let arraymerge = [];

function commun(arrayone, arraytwo) {
  for (let i = 0; i < arrayone.length; i++) {
    for (let j = 0; j < arraytwo.length; j++) {
      if (arrayone[i] === arraytwo[j]) {
        arraymerge.push(arrayone[i]);
      }
    }
  }
  return arraymerge;
}

console.log(commun(arrayone, arraytwo));

// 🔴 Exercice 9 : Trouver les éléments uniques dans un tableau

let arryunque = [1, 2, 2, 3, 4, 4, 5];

function arrayyuniquefunc(arryunque) {
  let i;
  let j;
  for (i = 0; i < arryunque.length; i++) {
    for (j = i + 1; j < arryunque.length; j++) {
      if (arryunque[i] === arryunque[j]) {
        console.log(arryunque[i]);
      }
    }
    return arryunque[i];
  }
}

console.log(arrayyuniquefunc(arryunque));

// hamza1

let arrayAyman = ["aaaaaaaaaa", "aaaaaaaaaaaaaaaaaaaaaaa", "aaaaa"];

function arraylength(arrayAyman) {
  let max = arrayAyman[0];

  for (let i = 0; i < arrayAyman.length; i++) {
    if (max.length < arrayAyman[i].length) {
      max = arrayAyman[i];
    }
  }
  return max;
}

console.log(arraylength(arrayAyman));

// hamza2

// let arrayAyman = ["aaaaaaaaaa", "aaaaaaaaaaaaaaaaaaaaaaa", "aaaaa"];

arrayAyman.sort((a, b) => b.length - a.length);
console.log(arrayAyman[0]);

let val = arrayAyman.reduce((a, b) => {
  if (a.length > b.length) {
    return a;
  } else {
    return b;
  }
});

console.log(val);

// hamza 3

// let newarrayboth=[];

// for (let i = 0; i < first.length; i++) {

//     for (let j = 0; j < second.length; j++) {

//         newarrayboth.push(first[i]+second[j])
//         break
//     }

// }

// console.log(newarrayboth)

let first = [1, 2, 3, 4, 5, 6];
let second = [3, 6, 3];

let solution = (a, b) => {
  let arrayAlenght = a.length;
  let arrayBlenth = b.length;

  let alllength = arrayAlenght - arrayBlenth;

  for (let i = 0; i < Math.abs(alllength); i++) {
    if (alllength > 0) {
      b.push(0);
    }
  }

  let arrayHmza = [];
  for (let j = 0; j < arrayAlenght; j++) {
    arrayHmza.push(a[j] + b[j]);
  }
  return arrayHmza;
};

console.log(solution(first, second));
