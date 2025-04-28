// 1. Find the Most Frequent Item in an Array

const arr = [1, 2, 2, 2, 3, 4, 5];

function findRepeatedNumber(array) {
  let stock = {};
  let maxCount = 0;
  let valueRepeated;
  for (let i = 0; i < array.length; i++) {
    if (stock[array[i]]) {
      stock[array[i]]++;
    } else {
      stock[array[i]] = 1;
    }
    if (maxCount < stock[array[i]]) {
      maxCount = stock[array[i]];
      valueRepeated = array[i];
    }
  }
  return valueRepeated;
}

console.log(findRepeatedNumber(arr));

// 2. Sort Objects by Property Value
const students = [
  { name: "John", score: 80 },
  { name: "Jane", score: 90 },
  { name: "Jim", score: 80 },
  { name: "Jake", score: 70 },
];

function sortarray(arr) {
  for (let i = 0; i < arr.length - 1; i++) {
    for (let j = 0; j < arr.length - i - 1; j++) {
      let swap;
      if (arr[j].score > arr[j + 1].score) {
        swap = arr[j];
        arr[j] = arr[j + 1];
        arr[j + 1] = swap;
      }
    }
  }
  return arr;
}

console.log(sortarray(students));

// 3. Find the elements that exist in both arrays.

const arr1 = [1, 2, 3, 4, 10, 5];
const arr2 = [4, 1, 5, 6, 7, 10, 8];

function intersection(array1, array2) {
  let stockarray = [];
  let doublon = [];
  for (let i = 0; i < array1.length; i++) {
    stockarray.push(array1[i]);
  }
  for (let i = 0; i < array2.length; i++) {
    stockarray.push(array2[i]);
  }

  for (let i = 0; i < stockarray.length; i++) {
    for (let j = i + 1; j < stockarray.length; j++) {
      if (stockarray[i] === stockarray[j]) {
        doublon.push(stockarray[i]);
      }
    }
  }

  return doublon;
}

console.log(intersection(arr1, arr2));

// 4. Sum of Nested Objects i didnt understand
const data = {
  a: 5,
  b: {
    c: 10,
    d: {
      e: 2,
    },
  },
  f: 3,
};

function Nested(data) {
  let sum = 0;
  for (const key in data) {
    if (typeof data[key] === "number") {
      sum += data[key];
    } else if (typeof data[key] === "object") {
      sum += Nested(data[key]);
    }
  }
  return sum;
}

console.log(Nested(data));

// 5. Find the Longest String in an Array of Objects
const people = [
  { name: "Alice" },
  { name: "Bob" },
  { name: "Catherine" },
  { name: "Dave" },
];

function longest(people) {
  let max = people[0];
  for (let i = 0; i < people.length; i++) {
    if (max.name.length < people[i].name.length) {
      max = people[i];
    }
  }
  return max;
  // console.log(people[0].name.length)
}

console.log(longest(people));

// 6. Find Missing Numbers in a Sequence

const numbers = [1, 2, 4, 5, 6, 8];
let miss = [];
for (let i = 0; i < numbers.length; i++) {
  if (numbers[i] + 1 !== numbers[i + 1]) {
    console.log(numbers[i] + 1);
  }
}

// 7. Flatten an Array of Objects

const arro = [
  { id: 1, values: [1, 2, 3] },
  { id: 2, values: [4, 5] },
  { id: 3, values: [6, 7, 8] },
];

// 8. Unique Elements from Multiple Arrays

const arr12 = [1, 2, 3];
const arr23 = [2, 3, 4];
const arr33 = [3, 4, 5];

function findunique(ar1, ar2, ar3) {
  var newstock = [];
  var unique = [];
  for (let i = 0; i < ar1.length; i++) {
    newstock.push(ar1[i]);
  }
  for (let i = 0; i < ar2.length; i++) {
    newstock.push(ar2[i]);
  }

  for (let i = 0; i < ar3.length; i++) {
    newstock.push(ar3[i]);
  }

  for (let i = 0; i < newstock.length; i++) {
    let count=0
   for (let j = 0; j < newstock.length; j++) {
    if (newstock[j] == newstock[i]) {
      count++

    }    
   }
   if (count===1) {
    unique.push(newstock[i]);
    
   }
  }
  return unique;
}
console.log("'''''''''''''''''''''''''''''''''''''''''''''");

console.log(findunique(arr12, arr23, arr33));

console.log("'''''''''''''''''''''''''''''''''''''''''''''");
// -----------------------------------------------------------------
let arraysaziz = [1, 2, 22, 3, 7, 9, 11];
var sum = 0;

for (let i = 0; i < arraysaziz.length; i=i+3) {

if (arraysaziz[i+1]) {
  sum=arraysaziz[i]+arraysaziz[i+1]
  arraysaziz[i+2]=sum
}
}
console.log(arraysaziz);

// ------------------------------------------------------
const obj1 = { a: 1, b: 2 };
const obj2 = { b: 3, c: 1 };

let enwobj = {};
// let sum = 0;

for (const key in obj1) {
  enwobj[key] = obj1[key];
  for (const keyj in obj2) {
    if (enwobj[keyj] === enwobj[key]) {
      enwobj[keyj] = obj1[key] + obj2[keyj];
    } else {
      enwobj[keyj] = obj2[keyj];
    }
  }
}

// console.log(enwobj);

let copie = ["a", "b", "c", "a", "a", "c"];
let objectss = {};
let count = 0;
for (let i = 0; i < copie.length; i++) {
  if (objectss[copie[i]]) {
    // count++;
    objectss[copie[i]]++;
  } else {
    objectss[copie[i]] = 1
  }
}
console.log("'''''''''''''''''''''''''''''''''''''''''''''");

console.log(objectss);

let abderazak = ["eat", "ate", "tea", "tde", "dte", "bta"];

function sortArray(array) {

  let newarray=[]
 array.forEach(element => {
  for (let i = 0; i < element.length; i++) {

    if (element[i]===element[i+1]) {
    }else{
      newarray.push(element)
      
    }
  }
});
return newarray
}

console.log(sortArray(abderazak));
