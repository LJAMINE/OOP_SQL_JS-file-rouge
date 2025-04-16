// // max et 3 eme max

// let array = [13, 3, 66, 2];

// let max = -Infinity;
// let max2 = -Infinity;
// let max3 = -Infinity;
// for (let i = 0; i < array.length; i++) {
//   if (max < array[i]) {
//     max3 = max2;
//     max2 = max;
//     max = array[i];
//   } else if (array[i] > max2 && array[i] !== max) {
//     max2 = array[i];
//   } else if (array[i] > max3 && array[i] !== max2) {
//     max3 = array[i];
//   }
// }
// // return max

// console.log(max3);

// //get a and index

// let str = ["amie", "sdf", "lala"];

// str.forEach((element) => {
//   for (let i = 0; i < element.length; i++) {
//     if (element[i] === "a") {
//       console.log(element);
//       console.log(i);
//     }
//   }
// });

// // inverse array

// let inverse = [1, 2, 3];

// let newarr = [];
// let arrlength = inverse.length;

// for (let i = arrlength - 1; i >= 0; i--) {
//   newarr.push(inverse[i]);
// }

// console.log(newarr);

// // element manque

// let arraymanque = [1, 2, 3, 5];

// function arrayman(arraymanque) {
//   for (let i = 0; i <= arraymanque.length; i++) {
//     if (arraymanque[i] + 1 !== arraymanque[i + 1]) {
//       return arraymanque[i] + 1;
//     }
//   }
// }

// console.log(arrayman(arraymanque));

// // Exercice : Regrouper les Éléments Identiques dans un Tableau

// const Identiques = ["apple", "banana", "apple", "orange", "banana", "banana"];
// let arrayidenti = [];

// function arryidentiquee(Identiques) {
//   for (let i = 0; i < Identiques.length; i++) {
//     for (let j = i + 1; j < Identiques.length; j++) {
//       if (
//         Identiques[i] === Identiques[j] &&
//         !arrayidenti.includes(Identiques[i])
//       ) {
//         arrayidenti.push(Identiques[i]);
//       }
//     }
//   }
//   return arrayidenti;
// }
// console.log(arryidentiquee(Identiques));

// //🔴 Exercice 6 : Fusionner deux tableaux sans doublons

// const arr1 = [1, 2, 3, 4];
// const arr2 = [3, 4, 5, 6];
// let newtable = [];
// let sansdoubl = [];
// for (let i = 0; i < arr1.length; i++) {
//   newtable.push(arr1[i]);
// }
// for (let i = 0; i < arr2.length; i++) {
//   newtable.push(arr2[i]);
// }

// function sansss(newtable) {
//   for (let i = 0; i < newtable.length; i++) {
//     for (let j = i + 1; j < newtable.length; j++) {
//       if (newtable[i] === newtable[j]) {
//         // sansdoubl.push(newtable[i])
//         newtable.splice(j, 1);
//       }
//     }
//   }
//   return newtable;
// }

// console.log(sansss(newtable));

// // 🔴 Exercice 8 : Trouver les éléments communs dans deux tableaux

// let arrayone = [1, 3, 4];
// let arraytwo = [1, 8, 4];

// let arraymerge = [];

// for (let i = 0; i < arrayone.length; i++) {
//   for (let j = 0; j < arraytwo.length; j++) {
//     if (arrayone[i] === arraytwo[j]) {
//       arraymerge.push(arrayone[i]);
//     }
//   }
// }

// console.log(arraymerge);

// // hamza

// let arrayAyman = ["aa", "aaaaaaaaaaaaaaaa", "aaaaa"];

// let maxlenght = arrayAyman[0];
// for (let i = 0; i < arrayAyman.length; i++) {
//   if (maxlenght.length < arrayAyman[i].length) {
//     maxlenght = arrayAyman[i];
//   }
// }
// console.log(maxlenght);

// arrayAyman.sort();
// console.log(arrayAyman);

// //   somme

// let first = [1, 2, 3, 4, 5, 6];
// let second = [3, 6, 3];

// let arraysomme = [];

// let a = first.length;
// let b = second.length;
// let maxlengh;
// if (a > b) {
//   maxlengh = a;
// } else {
//   maxlengh = b;
// }

// for (let i = 0; i < maxlengh; i++) {
//   if (first[i] && second[i]) {
//     arraysomme.push(first[i] + second[i]);
//   } else if (first[i]) {
//     arraysomme.push(first[i]);
//   } else if (second[i]) {
//     arraysomme.push(second[i]);
//   }
// }
// console.log(arraysomme);

// //repeat

// let newarrayto=[1,2,3,4]
// let pair=[]
// let impair=[]

// for (let i = 0; i < newarrayto.length; i++) {

// }

// let a = 6;
// let b = 2;

// function multiple(i, j) {
//   return i * j;
// }

// console.log(multiple(a, b));

// for (let i = 1; i <= 10; i++) {
//   console.log(i);
// }

// // Sommer un tableau de nombres.

// let arraysomme = [1, 2, 3];
// let somme = 0;

// for (let i = 0; i < arraysomme.length; i++) {
//   somme += arraysomme[i];
// }
// // Vérifier si un mot est un palindrome.

// console.log(somme);

// let mot = "ara";
// let motinverse = "";
// let motlength = mot.length;

// for (let i = motlength - 1; i >= 0; i--) {
//   motinverse += mot[i];
// }
// console.log(motinverse);

// if (mot === motinverse) {
//   console.log("yes");
// } else {
//   console.log("no");
// }

// // console.log("akakak")

// // Déterminer pair/impair avec if-else.

// let array = [1, 2, 3, 4];
// let pair = [];
// let impair = [];

// for (let i = 0; i < array.length; i++) {
//   if (array[i] % 2 === 0) {
//     pair.push(array[i]);
//   } else {
//     impair.push(array[i]);
//   }
// }

// console.log(pair);
// console.log(impair);

// // Renverser un tableau.
// let verseTable = [1, 2, 3];
// let reverse = [];

// let verseLength = verseTable.length;

// for (let i = verseLength - 1; i >= 0; i--) {
//   reverse.push(verseTable[i]);
// }

// console.log(reverse);

// // Implémenter un tri à bulles.

// let tri = [10000, 2, 100, 44];

// for (let i = 0; i < tri.length; i++) {
//   for (let j = i; j < tri.length; j++) {
//     let temp;

//     if (tri[j] > tri[j + 1]) {
//       temp = tri[j];
//       tri[j] = tri[j + 1];
//       tri[j + 1] = temp;
//     }
//   }
// }

// console.log(tri);

// let arraystrinngs = ["aaaaaaaaaaaaaaaaaaaa", "ahaha", "aaajjaja", "aaiaa"];

// let arrayLength = arraystrinngs.length;

// for (let i = 0; i < arrayLength - 1; i++) {
//   for (let j = 0; j < arrayLength - 1 - i; j++) {
//     if (arraystrinngs[j].length > arraystrinngs[j + 1].length) {
//       let temp = arraystrinngs[j];
//       arraystrinngs[j] = arraystrinngs[j + 1];
//       arraystrinngs[j + 1] = temp;
//     }
//   }
// }

// console.log(arraystrinngs);

// let words = [
//   "zzzzzz",
//   "Banana",
//   "apple",
//   "Cherry",
//   "date",
//   "Elderberry",
//   "fig",
//   "grape",
// ];

// let newlenght = words.length;

// for (let i = 0; i < newlenght - 1; i++) {
//   for (let j = 0; j < newlenght - 1 - i; j++) {
//     if (words[j].toLocaleLowerCase() > words[j + 1].toLocaleLowerCase()) {
//       let temp = words[j];

//       words[j] = words[j + 1];
//       words[j + 1] = temp;
//     }
//   }
// }

// console.log(words);

// let people = [
//   { name: "Alice", age: 25 },
//   { name: "Bob", age: 30 },
//   { name: "Charlie", age: 20 },
//   { name: "David", age: 35 }
// ];

// let nn=people.length

// for (let i = 0; i < nn-1; i++) {

//   for (let j = 0; j < nn-1-i; j++) {
//    if (people[j].age>people[j+1].age) {
//     let swap=people[j]
//     people[j]=people[j+1]
//     people[j+1]=swap
//    }

//   }
// }
// console.log(people)

// // people.sort((a,b)=>b.age-a.age)

// // console.log(people)

// // this is the new array where % and map*2 and sort

// let numberstodesc = [3, 8, 12, 5, 7, 10, 20, 15, 6];

// let newwarray=[]

// for (let i = 0; i < numberstodesc.length; i++) {

//   if (numberstodesc[i]%2===0) {
// newwarray.push(numberstodesc[i])
//   }
// }

// console.log(newwarray)

// let newmultip=newwarray.map((a)=>{
// return a*2
// })

// console.log(newmultip)

// let newww=newwarray.length
// for (let i = 0; i < newww-1; i++) {
// for (let j = 0; j < newww-1-i; j++) {
// let temp
//   if (newmultip[j]>newmultip[j+1]) {
//     temp=newmultip[j]
//     newmultip[j]=newmultip[j+1]
//     newmultip[j+1]=temp
//   }

// }
// }

// console.log(newmultip)

// // elemet commun dans deux tableaux

// let tableau1 = [1, 2, 3, 4, 5];
// let tableau2 = [4, 5, 6, 7, 8];

// let arraymerged=[]

// for (let i = 0; i < tableau1.length; i++) {
//     if (tableau2.includes(tableau1[i]) && !arraymerged.includes(tableau1[i])) {
//      arraymerged.push(tableau1[i])
//     }

// }
// console.log(arraymerged)

// let arraymaxx=[222,3888,11]

// let max=arraymaxx[0]
// let max2=arraymaxx[0]

// for (let i = 0; i < arraymaxx.length; i++) {
//   if (arraymaxx[i]>max) {
//     max2=max
//     max=arraymaxx[i]
//   }else if (arraymaxx[i]>max2 && arraymaxx[i]!==max) {
//     max2=arraymaxx[i]
//   }
// }

// console.log(max2)

// 4. Count Even Numbers

const numbers = [1, 22, 4, 6, 7, 9, 12];

let count = 0;
for (let i = 0; i < numbers.length; i++) {
  if (numbers[i] % 2 == 0) {
    count++;
  }
}

// console.log(count);

let avg = 0;
// 5. Students Average Grade
const students = [
  { name: "Ali", grades: [12, 12] },
  { name: "Sara", grades: [14, 16, 17] },
];

for (let i = 0; i < students.length; i++) {
  let somme = 0;

  for (let j = 0; j < students[i].grades.length; j++) {
    somme += students[i].grades[j];
  }
  avg = somme / students[i].grades.length;
  // console.log(avg);
}

// 6. Find the Oldest Person

let arraypeople = [
  { nom: "amine", age: 22222 },
  { nom: "said", age: 1111 },
];

let max = arraypeople[0].age;
for (let i = 0; i < arraypeople.length; i++) {
  if (arraypeople[i].age > max) {
    max = arraypeople[i].age;
  }
}
// console.log(max);

// 7. Merge Arrays of Objects

const list1 = [
  { id: 1, name: "A" },
  { id: 2, name: "B" },
];
const list2 = [
  { id: 3, name: "C" },
  { id: 4, name: "D" },
];

let stock = [];

for (let i = 0; i < list1.length; i++) {
  stock.push(list1[i]);
}

for (let i = 0; i < list2.length; i++) {
  stock.push(list2[i]);
}

// console.log(stock);

// 8. Object of Arrays → Array of Strings

// ["Paris (France)", "Lyon (France)", "Rome (Italy)", ...]

const cities = {
  France: ["Paris", "Lyon"],
  Italy: ["Rome", "Milan"],
  Spain: ["Madrid", "Barcelona"],
};

let newarraystore=[];

for (const country in cities) {
  // console.log(country)
 for (let i = 0; i < cities[country].length; i++) {
  newarraystore.push(`${cities[country][i]} ${country}` )
 }
}



 let newArrays=[
  { name: 'Alice', age: 21 },
  { name: 'Bob', age: 25 },
  { name: 'Charlie', age: 21 },
  { name: 'David', age: 25 },
  { name: 'Eve', age: 30 }
]


let arr21=[]
let arr25=[]
let arr30=[]

for (let i = 0; i < newArrays.length; i++) {

  if (newArrays[i].age===21) {
    arr21.push(newArrays[i])
  }else if (newArrays[i].age===25) {
    arr25.push(newArrays[i])
    
  }else{
    arr30.push(newArrays[i])

  }
  
}

console.log(arr21)
console.log(arr25)
console.log(arr30)


const items = ['apple', 'banana', 'apple', 'orange', 'banana', 'apple'];
