// let arr = [
//   { name: "amine", notes: [1, 2, 4, 5] },
//   { name: "zair", notes: [14, 5] },
//   { name: "said", notes: [1, 2, 4, 4] },
//   { name: "bro", notes: [2, 4, 5] },
// ];

// let somme = 0;
// let newarray = [];

// arr.forEach((element) => {
//   for (let i = 0; i < element.notes.length; i++) {
//     somme += element.notes[i];
//   }

//   newarray.push(somme / element.notes.length);
//   console.log(somme / element.notes.length);
// });

// console.log(newarray);

// for (let i = 0; i < newarray.length - 1; i++) {
//   for (let j = 0; j < newarray.length - i - 1; j++) {
//     let swap;
//     if (newarray[j] > newarray[j + 1]) {
//       swap = newarray[j];
//       newarray[j] = newarray[j + 1];
//       newarray[j + 1] = swap;
//     }
//   }
// }

// console.log(newarray);

// let newarrayss = [1, 2, 3, 2, 6, 6];

// let double = [];
// let nodouble=[]
// let nondoublant=[]

// for (let i = 0; i < newarrayss.length; i++) {
//   for (let j = i+1; j < newarrayss.length; j++) {
//     if (newarrayss[j] === newarrayss[i] && !double.includes(newarrayss[i])) {
//       double.push(newarrayss[i]);
//     }else if(newarrayss[j] !== newarrayss[i] && !nondoublant.includes(newarrayss[i])){
//         nondoublant.push(newarrayss[i])
//     }
// }
// }
// console.log(double)
// console.log(nondoublant)

// let numbers = [1, 2, 3, 4, 5];

// let sommes=0
// for (let i = 0; i < numbers.length; i++) {
// sommes+=numbers[i]

// }
// console.log(sommes/numbers.length)

// let nums = [10, 15, 20, 25, 30];
// let even=[]
// let noteven=[]

// for (let j = 0; j < nums.length; j++) {

//   if (nums[j]%2===0) {
//     even.push(nums[j])
//   }else{
//     noteven.push(nums[j])

//   }
// }

// console.log(even)
// console.log(noteven)

// let person = {
//   name: "Alice",
//   age: 25,
//   city: "Paris"
// };

// for (const item in person) {
// console.log(`${item} ${person[item]}`)

// }

// let car = {
//   brand: "Toyota",
//   year: 2020
// };

// car.name="amine"

// console.log(car)

// let users = [
//   { id: 1, name: "Amine" },
//   { id: 2, name: "Sarah" },
//   { id: 3, name: "Ali" }
// ];

// for (let i = 0; i < users.length; i++) {

//   if (users[i].name==="Ali") {
//     console.log(users[i])
//   }
// }

// let fruits = ["apple", "banana", "apple", "orange", "banana", "apple"];

// let countss=0;

// for (let i = 0; i < fruits.length; i++) {
//  for (let j = i; j < fruits.length; j++) {

//   if (fruits[i]===fruits[j]) {
//     console.log(fruits[i])
//     countss++
//   }
//  }

// }

// max 2---------------------------------------

// let arr = [0, 1000, 228888, 3];

// let max=arr[0];
// let max2=arr[0];

// for (let i = 0; i < arr.length; i++) {
//   if (max<arr[i]) {
//     max2=max
//     max=arr[i]
//   }else if (arr[i]>max2 && arr[i]!==max) {
//     max2=arr[i]

//   }
// }
// console.log(max2)

// -----------------------------inverse array

// let arr = [0, 1000, 228888, 3];
// let inverseArray=[]
// let arrlength=arr.length

// for (let i =arrlength-1 ; i >=0; i--) {
//   inverseArray.push(arr[i])
// }

// console.log(inverseArray)

// // element manque-----------------------------

// let manque = [1, 2, 3, 4, 5, 7];

// for (let i = 0; i < manque.length-1; i++) {
//   if (manque[i] + 1 !== manque[i + 1]) {
//     console.log(manque[i] +1);
//   }
// }

// Exercice : Regrouper les Éléments Identiques dans un Tableau

// const arrray = ["apple", "banana", "apple", "orange", "banana", "banana"];
// let arraystock=[]

// for (let i = 0; i < arrray.length; i++) {
// for (let j = i+1; j < arrray.length; j++) {
//   if (arrray[i]===arrray[j] && !arraystock.includes(arrray[i]))  {
//     arraystock.push(arrray[i])
//   }
// }
// }

// console.log(arraystock)

// //🔴 Exercice 6 : Fusionner deux tableaux sans doublons

// const arr1 = [1, 2, 3, 4];
// const arr2 = [3, 4, 5, 6];
// let newtable=[]
// let cleantable=[]

// for (let i = 0; i < arr1.length; i++) {

//   newtable.push(arr1[i])

// }
// for (let i = 0; i < arr2.length; i++) {

//   newtable.push(arr2[i])

// }

// console.log(newtable)

// for (let j = 0; j < newtable.length; j++) {

//   for (let x = 0; x < newtable.length; x++) {

//     if (newtable[x]===newtable[j] && !cleantable.includes(newtable[x])) {
//       cleantable.push(newtable[x])
//     }
//   }
// }

// console.log(cleantable)

// 🔴 Exercice 8 : Trouver les éléments communs dans deux tableaux

// let arrayone = [1, 3, 4];
// let arraytwo = [1, 8, 4];

// let arraystock = [];
// // let commun = [];

// // console.log(arraystock)

// for (let i = 0; i < arrayone.length; i++) {

//   for (let j = 0; j < arraytwo.length; j++) {

//     if (arrayone[i]===arraytwo[j] ) {
//       arraystock.push(arrayone[i])
//     }
//   }
// }

// console.log(arraystock)

// 🔴 Exercice 9 : Trouver les éléments uniques dans un tableau

// let arryunque = [1, 2, 2, 3, 4, 4, 5];
// let arruniquesq = [];

// for (let i = 0; i < arryunque.length; i++) {
//   for (let j = i+1; j < arryunque.length; j++) {
//     if (arryunque[i] !== arryunque[j]) {
//       arruniquesq.push(arryunque[i]);
//     }
//   }
// }

// console.log(arruniquesq)

// let arrayAyman = ["aaaaaaaaaa", "aaaaaaaaaaaaaaaaaaaaaaa", "aahahahahahahaahahahahahahaha"];

// let max = arrayAyman[0].length;

// for (let i = 0; i < arrayAyman.length; i++) {
//   if (arrayAyman[i].length > max) {
//     max = arrayAyman[i];
//   }
// }
// console.log(max)

//somme des indices

// let first = [1, 2, 3, 4, 5, 6];
// let second = [3, 6, 3];
// let maxlength = first.length > second.length ? first.length : second.length;

// let arraySomme = [];

// for (let i = 0; i < maxlength; i++) {
//   if (first[i] && second[i]) {
//     arraySomme.push(first[i] + second[i]);
//   }else if (first[i]) {
//     arraySomme.push(first[i])
//   }else if (second[i]) {
//     arraySomme.push(second[i])

//   }
// }

// console.log(arraySomme)

// let biggestarray = ["aaa", "aaaaaaa", "a"];

// let newone=biggestarray.reduce((a,b)=>{

//  return  a.length>b.length ? a : b

// });

// console.log(newone)

// merge and sort
// let pairarray1 = [1, 9, 4];
// let pairarray2 = [6, 3, 2];

// let arry = [];

// for (let i = 0; i < pairarray1.length; i++) {
//   arry.push(pairarray1[i]);
// }
// for (let i = 0; i < pairarray2.length; i++) {
//   arry.push(pairarray2[i]);
// }

// console.log(arry);


// for (let i = 0; i < arry.length-1; i++) {
// for (let j = 0; j < arry.length-i-1; j++) {
//   let temp;
//  if (arry[j]>arry[j+1]) {
//   temp=arry[j]
//   arry[j]=arry[j+1]
//   arry[j+1]=temp
//  }  
// }  
// }

// console.log(arry);



// let mots = ["bonjour", "javascript", "array", "map", "exercice"];


// let newr=mots.map((item)=>{
//   return item.length>4
// })

// console.log(newr)



// let animaux = ["chat", "chien", "tigre", "tortue", "lion"];


// for (let i = 0; i < animaux.length; i++) {

// animaux[i].forEach((element,j) => {
// if (element[j]==="t") {
//   console.log(element[j])
// }
// });
// }


const fruits = ['apple', 'banana', 'apple', 'orange', 'banana', 'apple'];


let newcount={}

for (const fruit in fruits) {

  
}



