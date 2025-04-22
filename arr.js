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

// const fruits = ['apple', 'banana', 'apple', 'orange', 'banana', 'apple'];

// let newcount={}

// for (const fruit in fruits) {

// }

// Exercise 1: Create an array with five fruits, then add two more fruits at the end,
// and remove the first fruit. Return the final array.

// const fruits = ['apple', 'banana', 'apple', 'orange', 'banana', 'apple'];

// Exercise 1: Use map to create a new array where each number is multiplied by 2

// let pairarray1 = [1, 9, 4];

// function doubleNumbers(numbers) {

//   let newarr=numbers.map((item)=>{
//     return item*2
//   })
//   console.log(newarr)
// }

// console.log(doubleNumbers(pairarray1))

// Exercise 2: Use filter and map together to get the names of people over 18

let aer = [
  { name: "Alice", age: 25 },
  { name: "Bob", age: 17 },
  { name: "Charlie", age: 30 },
  { name: "David", age: 16 },
];

function getAdultNames(people) {
  return people
    .filter((person) => person.age > 18)
    .map((person) => person.name);
}

console.log(getAdultNames(aer));

// Exercise 3: Use reduce to find the most expensive product in an array

let nes = [
  { name: "Laptop", price: 1200 },
  { name: "Phone", price: 800 },
  { name: "TV", price: 1500 },
  { name: "Headphones", price: 200 },
];

function findMostExpensive(products) {
  return products.reduce((a, b) => {
    return a.price > b.price ? a : b;
  });
}

console.log(findMostExpensive(nes));

// let array=[1,2,3]

// for (let i = 0; i < array.length; i++) {
// let a=12
// }

// console.log(a)

// console.log("1")

// setTimeout(() => {
//   console.log("2")

// }, 2000);

// console.log("3")

const movies = [
  { title: "Inception", year: 2010, genre: "Science-fiction", collection: 800 },
  { title: "Titanic", year: 1997, genre: "Romance", collection: 2187 },
  { title: "Avengers", year: 2012, genre: "Action", collection: 1500 },
  {
    title: "Interstellar",
    year: 2014,
    genre: "Science-fiction",
    collection: 675,
  },
  { title: "The Notebook", year: 2004, genre: "Romance", collection: 150 },
  { title: "Mad Max: Fury Road", year: 2015, genre: "Action", collection: 378 },
];

// {
//   "Science-fiction": [
//       { title: "Inception", year: 2010, collection: 800 },
//       { title: "Interstellar", year: 2014, collection: 675 }
//   ],
//   "Romance": [
//       { title: "Titanic", year: 1997, collection: 2187 },
//       { title: "The Notebook", year: 2004, collection: 150 }
//   ],
//   "Action": [
//       { title: "Avengers", year: 2012, collection: 1500 },
//       { title: "Mad Max: Fury Road", year: 2015, collection: 378 }
//   ]
// }

function names() {
  let newobjcts = {};
  for (let i = 0; i < movies.length; i++) {
    if (newobjcts[movies[i].genre]) {
      newobjcts[movies[i].genre].push({ title: movies[i].title });
    } else {
      newobjcts[movies[i].genre] = [{ title: movies[i].title }];
    }
  }
  return newobjcts;
}

console.log("eeeeeeeeeeeeeeeeeeeeeeeee");
console.log(names());

let stades = [
  (stade1 = {
    name: "bernabio",
    location: "madrid",
    country: "spain",
    capacity: 72000,
  }),
  (stade2 = {
    name: "campno",
    location: "barcelona",
    country: "spain",
    capacity: 80000,
  }),
  (stade3 = {
    name: "anfield",
    location: "liverpool",
    country: "england",
    capacity: 90000,
  }),
  (stade3 = {
    name: "alians arena",
    location: "munich",
    country: "germany",
    capacity: 63000,
  }),
];

console.log("rrrrrrrrrrrrrrrrrrrrr");

function getLMaxx() {
  let max = stades[0].capacity;
  for (let i = 0; i < stades.length; i++) {
    if (max < stades[i].capacity) {
      max = stades[i].capacity;
    }
  }
  return max;
}

console.log(getLMaxx());

// var newsp={}
// for (let i = 0; i < stades.length; i++) {
// if (newsp[stades[i].country]) {
//   newsp[stades[i].country].push({name:stades[i].name})
// }  else{
//   newsp[stades[i].country]=[{name:stades[i].name}]

// }
// // return newsp
// console.log(newsp)
// }

console.log("hhhhhhhhhhhhhhhhhhhhh");

// let A=[11,2,11,34,77,1,2,7]
// let B=[]
// let sum=0
// for (let i = 0; i < A.length; i++) {

//   if (A[i]>10) {
//     B.push(A[i])
//   }else{
//     sum+=A[i]
//     if (sum>10) {
//     B.push(sum)

//     }
//   }
// }

// console.log(B)

// -- 20

// -- SELECT COUNT(*)AS totalproduct,c.CategoryName
// -- FROM `products`  p
// -- JOIN categories c ON c.CategoryID=p.CategoryID
// -- GROUP BY c.CategoryName
// -- ORDER by totalproduct desc;

// -- 21

// -- SELECT COUNT(*) AS totalcustomers,c.Country,c.City
// -- FROM customers c
// -- GROUP BY c.Country,c.City;

// -- 22

// -- SELECT p.ProductID,p.ProductName,p.UnitsInStock,p.ReorderLevel
// -- FROM `products` p
// --  WHERE p.UnitsInStock<p.ReorderLevel;

// -- 23

// -- SELECT p.ProductID,p.ProductName,p.UnitsInStock,p.UnitsOnOrder,p.ReorderLevel ,p.Discontinued
// -- FROM `products` p
// -- WHERE p.UnitsInStock+p.UnitsOnOrder<p.ReorderLevel AND p.Discontinued=0;

// -- 25

// -- SELECT AVG(o.OrderID) AS average, o.ShipCountry
// -- FROM `orders` o
// -- GROUP BY o.ShipCountry
// -- ORDER BY average desc
// -- LIMIT 3;

// -- 26

const newwws = [
  { title: "Inception", year: 2010, genre: "Science-fiction", collection: 800 },
  { title: "Titanic", year: 1997, genre: "Romance", collection: 2187 },
  { title: "Avengers", year: 2012, genre: "Action", collection: 1500 },
  {
    title: "Interstellar",
    year: 2014,
    genre: "Science-fiction",
    collection: 675,
  },
  { title: "The Notebook", year: 2004, genre: "Romance", collection: 150 },
  { title: "Mad Max: Fury Road", year: 2015, genre: "Action", collection: 378 },
];

let newabject = {};
for (let i = 0; i < newwws.length; i++) {
  console.log(newwws[i].genre);
  if (newabject[newwws[i].genre]) {
    newabject[newwws[i].genre].push({ title: newwws[i].title });
  } else {
    newabject[newwws[i].genre] = [{ title: newwws[i].title }];
  }
}

console.log(newabject);

const cc = ["&", "aAA", "a", "b", "cc"];
const dd = ["a", "b"];

// let newY=[]--------------------------------
// let unique=[]

// for (let i = 0; i < cc.length; i++) {
// newY.push(cc[i])
// }

// for (let i = 0; i < dd.length; i++) {
//   newY.push(dd[i])
//   }

// for (let i = 0; i < newY.length; i++) {
//   let count=0
// for (let j = 0; j < newY.length; j++) {
//   if (newY[i]===newY[j]) {
//     count ++
//   }
// }
// if (count===1) {
//   unique.push(newY[i])

// }
// }
// console.log(unique)

// let neee=[]------------------------------------

// for (let i = 0; i < cc.length; i++) {
//   var isduplicate=false;
// for (let j = 0; j < dd.length; j++) {

// if (cc[i]===dd[j]) {
//   isduplicate=true
//   break
// }
// }
// if (!isduplicate) {
// neee.push(cc[i])
// }
// }

// console.log(neee)

// smallest min paire

let arr6 = [6, 2, 5, 8];

let min = arr6[0];
let min2 = arr6[0];
let min3 = arr6[0];

for (let i = 0; i < arr6.length; i++) {
  if (arr6[i] % 2 === 0 && arr6[i] < min) {
    min = arr6[i];
  }else if (arr6[i] % 2 === 0 && arr6[i] < min2 && arr6[i]!==min) {
    min2 = arr6[i];
    
  }
}

console.log(min,min2);

// const arr1 = ["apple", "banana", "orange", "apple"];
// const arr2 = ["banana", "kiwi", "apple"];

// for (let i = 0; i < array.length; i++) {
//   const element = array[i];

// }
