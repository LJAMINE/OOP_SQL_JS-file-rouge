// Create a function that takes an object and a property name, and returns the value of that property.

let obj = { name: "amine", age: 12 };

function afficher(obj) {
  return obj.name;
}

console.log(afficher(obj));

// Write a function that calculates the sum of all numbers in an array using a for loop.

let arr = [1, 2, 3, 4];

function somme(arr) {
  let sum = 0;
  for (let i = 0; i < arr.length; i++) {
    sum += arr[i];
  }
  return sum / arr.length;
}

console.log(somme(arr));

// Create a function that counts the occurrences of each element in an array and returns an object with the counts.

let arrys = ["a", "b", "a", "c", "b", "a"];
let newarray = {};

function counts(array1) {
  for (let i = 0; i < array1.length; i++) {
    let element = array1[i];
    if (newarray[element]) {
      newarray[element]++;
    } else {
      newarray[element] = 1;
    }
  }
  return newarray;
}
console.log(counts(arrys));

// Write a function that converts an array of strings into an object where the keys are the strings and the values are the string lengths.

let fruits = ["apple", "banana", "cherry"];

let arrayObject = {};

function converts1(arr2) {
  arr2.forEach((element) => {
    arrayObject[element] = element.length;
  });
  return arrayObject;
}

console.log(converts1(fruits));

// Create a function that calculates the product of all numbers in an array using forEach.

let productarr = [3, 4, 2];

function product(arr3) {
  let sum = 1;
  arr3.forEach((element) => {
    sum *= element;
  });
  return sum;
}

console.log(product(productarr));

let summ = 1;
for (let i = 0; i < productarr.length; i++) {
  summ *= productarr[i];
}

console.log(summ);

let newresult = productarr.reduce((a, b) => {
  return a * b;
});

console.log(newresult);

// Write a function that takes an array of user objects and returns an array of user information strings.

const users = [
  { id: 1, name: "Alice", age: 25 },
  { id: 2, name: "Bob", age: 30 },
  { id: 3, name: "Charlie", age: 35 },
];

let newUsers = users.map((item) => {
  console.log(`${item.id} and ${item.name} ${item.age}`);
});




// Create a function that takes an array of point objects with x and y coordinates and returns an array of distances from the origin (0,0).

const points = [
    { x: 3, y: 4 },
    { x: 1, y: 2 },
    { x: -2, y: -2 }
  ];

  let results=points.map((item)=>{
let distance=Math.sqrt(item.x **2+item.y**2)
return distance
  })

  console.log(results)

//   Write a function that filters an array of product objects to only include those with a price greater than a specified amount and that are in stock.

const products = [
    { id: 1, name: 'Laptop', price: 1000, inStock: true },
    { id: 2, name: 'Phone', price: 800, inStock: true },
    { id: 3, name: 'Tablet', price: 500, inStock: false },
    { id: 4, name: 'Headphones', price: 200, inStock: true }
  ];


  let newres=products.filter((item)=>{
    return item.price>500 && item.inStock===true
  })

  console.log(newres)

  // Should output: [{ id: 1, name: 'Laptop', price: 1000, inStock: true }, { id: 2, name: 'Phone', price: 800, inStock: true }]




//   Write a function that uses reduce to calculate statistics (min, max, sum, average) from an array of numbers.






// let arr23=[1,2,3,4]
// let arr12=[1,2,44,6]

