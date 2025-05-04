// Online Javascript Editor for free
// Write, Edit and Run your Javascript code using JS Online Compiler

const users = [
  { name: "Alice", age: 17 },
  { name: "Bob", age: 25 },
  { name: "Charlie", age: 35 },
  { name: "Diana", age: 52 },
  { name: "Eve", age: 45 },
];

function groupby(array) {
  let arr18 = [];
  let arr30 = [];
  let arr50 = [];

  for (let i = 0; i < array.length; i++) {
    if (array[i].age > 0 && array[i].age < 18) {
      arr18.push(array[i]);
    } else if (array[i].age > 18 && array[i].age < 30) {
      arr30.push(array[i]);
    }
    if (array[i].age > 30) {
      arr50.push(array[i]);
    }
  }
  return [arr18, arr30, arr50];
}

console.log(groupby(users));

// 🔹 2. Find the most common letter in all employee names
const employees = [
  { name: "amine" },
  { name: "sofia" },
  { name: "hassan" },
  { name: "leila" },
  { name: "karim" },
];

function findletter(array) {
  let maxletter = {};
  let maxl = 0;
  let letre;
  for (let i = 0; i < array.length; i++) {
    for (let j = 0; j < array[i].name.length; j++) {
      if (maxletter[array[i].name[j]]) {
        maxletter[array[i].name[j]]++;
      } else {
        maxletter[array[i].name[j]] = 1;
      }
      if (maxl < maxletter[array[i].name[j]]) {
        maxl = maxletter[array[i].name[j]];
        letre = array[i].name[j];
      }
    }
  }

  return letre;
}

console.log(findletter(employees));

// 🔹 3. Filter out employees with no assigned projects
const employeesz = [
  { name: "Nadia", projects: ["Alpha"] },
  { name: "Youssef", projects: [] },
  { name: "Salma", projects: ["Beta", "Delta"] },
  { name: "Omar", projects: [] },
];

function filterss(array) {
  let empwithoutProject = [];

  for (let i = 0; i < array.length; i++) {
    if (array[i].projects.length === 0) {
      empwithoutProject.push(array[i]);
    }
  }
  return empwithoutProject;
}

console.log(filterss(employeesz));

// 🔹 5. Count unique job titles per department

const employe = [
  { name: "Adam", position: "Manager", department: "HR" },
  { name: "Nora", position: "Recruiter", department: "HR" },
  { name: "Tom", position: "Manager", department: "Sales" },
  { name: "Layla", position: "Sales Rep", department: "Sales" },
];

// function uniqueJobs(array) {
//   let stock = [];
//   for (let i = 0; i < array.length; i++) {
//     if (!stock.includes(array[i].position)) {
//       stock.push(array[i].position);
//     }
//   }
//   return stock;
// }

// console.log(uniqueJobs(employe));

// 🔹 5. Count dublon job titles per department
function doubleJobs(array) {
  let stock = [];
  let count = 0;
  for (let i = 0; i < array.length; i++) {
    for (let j = 0; j < array.length; j++) {
      if (array[i].position === array[j].position) {
        count++;
      }
    }
    if (count == 2) {
      stock.push(array[i].position);
    }
  }
  return stock;
}
console.log(doubleJobs(employe));

// 🔹 6. Top 3 busiest employees (by number of projects)
const persons = [
  { name: "Khalid", projects: ["Alpha", "Beta", "Delta"] },
  { name: "Zara", projects: ["Alpha"] },
  { name: "Mehdi", projects: ["Beta", "Gamma"] },
  { name: "Yasmine", projects: ["Alpha", "Beta", "Gamma", "Delta"] },
];

function busiest(array) {
  for (let i = 0; i < array.length - 1; i++) {
    for (let j = 0; j < array.length - i - 1; j++) {
      let swap = 0;

      if (array[j].projects.length < array[j + 1].projects.length) {
        swap = array[j];
        array[j] = array[j + 1];
        array[j + 1] = swap;
      }
    }
  }
  return [array[0], array[1], array[2]];
}

console.log(busiest(persons));

// 🔹 6. Top  busiest employee (by number of projects)

const people = [
  { name: "Khalid", projects: ["Alpha", "Beta", "Delta"] },
  { name: "Zara", projects: ["Alpha"] },
  { name: "Mehdi", projects: ["Beta", "Gamma"] },
  { name: "Yasmine", projects: ["Alpha", "Beta", "Gamma", "Delta"] },
];

function busy(array) {
  let stock = [];
  let max = array[0].projects.length;
  for (let i = 0; i < array.length; i++) {
    if (array[i].projects.length > max) {
      max = array[i];
    }
  }

  return max;
}

console.log(busy(people));

// 🔹 7. Count how many people are in the same position
const filks = [
  { name: "Ali", position: "engineer" },
  { name: "Samira", position: "engineer" },
  { name: "Othman", position: "designer" },
  { name: "Nada", position: "manager" },
  { name: "Salim", position: "engineer" },
];

function positioncount(array) {
  let stock = {};

  for (let i = 0; i < array.length; i++) {
    if (stock[array[i].position]) {
      stock[array[i].position]++;
    } else {
      stock[array[i].position] = 1;
    }
  }
  return stock;
}
console.log(positioncount(filks));

// 🔹 8. Flatten a nested array of tasks

const tasks = [
  ["Design UI", "Fix bug #14"],
  ["Update docs"],
  ["Deploy", "Code review", "Send report"],
];

function flatten(array) {
  let stock = [];

  for (let i = 0; i < array.length; i++) {
    for (let j = 0; j < array[i].length; j++) {
      stock.push(array[i][j]);
    }
  }
  return stock;
}

console.log(flatten(tasks));

// 🔹 10. Merge two employee lists without duplicate IDs

const teamA = [
  { id: 1, name: "Hana" },
  { id: 2, name: "Omar" },
];

const teamB = [
  { id: 2, name: "Omar" },
  { id: 3, name: "Lina" },
];

function merge(array1, array2) {
  let stock = [];
  let unique = [];
  for (let i = 0; i < array1.length; i++) {
    stock.push(array1[i]);
  }
  for (let i = 0; i < array2.length; i++) {
    stock.push(array2[i]);
  }

  for (let i = 0; i < stock.length; i++) {
    let count = 0;
    // console.log(stock[i].id)

    for (let j = i + 1; j < stock.length; j++) {
      if (stock[i].id !== stock[j].id) {
        count++;
      }
    }
    if (count !== 1) {
      unique.push(stock[i]);
    }
  }

  return unique;
}

console.log(merge(teamA, teamB));

const students = [
  { name: "John", grade: 85 },
  { name: "Jane", grade: 92 },
  { name: "Jim", grade: 76 },
];
// Print the names of students who scored above 80

for (let i = 0; i < students.length; i++) {
  if (students[i].grade > 80) {
    console.log(students[i]);
  }
}

const employee = {
  name: "Sarah",
  address: {
    city: "Paris",
    zip: 75000,
  },
};
// Print the city where Sarah lives

console.log(employee.address.city);

const products = [
  { id: 1, name: "Laptop", price: 800 },
  { id: 2, name: "Phone", price: 500 },
  { id: 3, name: "Tablet", price: 300 },
];
// Find and print the product with id 2

products.forEach((element) => {
  if (element.id === 2) {
    console.log(element);
  }
});

const orders = [
  { item: "Shirt", quantity: 2, price: 20 },
  { item: "Pants", quantity: 1, price: 35 },
  { item: "Hat", quantity: 3, price: 10 },
];
// Calculate the total amount (quantity * price for each)
let sum = 0;
for (let i = 0; i < orders.length; i++) {
  sum = orders[i].price * orders[i].quantity;

  console.log(sum);
}

const userss = [
  { id: 1, name: "Anna" },
  { id: 2, name: "Mark" },
];
// Change the name of the user with id 2 to "Marcus"

for (let i = 0; i < userss.length; i++) {
  if (userss[i].id === 2) {
    userss[i].name = "marcus";
  }
}
console.log(userss);
// "Excellent": grade ≥ 90

// "Good": 70 ≤ grade < 90

// "Fail": grade < 70
// Your output should be:
// const arratss = {
//   Excellent: ["Ali"],
//   Good: ["Zoe", "Lina"],
//   Fail: ["Tom", "Max"],
// };

function groupStudentss(array) {
  let grouped = {
    Excellent: [],
    Good: [],
    Fail: [],
  };

  for (let i = 0; i < array.length; i++) {
    const student = array[i];

    if (student.grade >= 90) {
      grouped.Excellent.push(student.name);
    } else if (student.grade >= 70) {
      grouped.Good.push(student.name);
    } else {
      grouped.Fail.push(student.name);
    }
  }

  return grouped;
}

const studensts = [
  { name: "Ali", grade: 95 },
  { name: "Zoe", grade: 82 },
  { name: "Tom", grade: 67 },
  { name: "Lina", grade: 74 },
  { name: "Max", grade: 59 },
];

console.log(groupStudentss(studensts));

const inventory = [
  { name: "Phone", price: 600, stock: 5 },
  { name: "TV", price: 1000, stock: 0 },
  { name: "Laptop", price: 1200, stock: 3 },
  { name: "Mouse", price: 25, stock: 0 },
  { name: "Keyboard", price: 45, stock: 10 },
];
// Expected: Only products with stock > 0, sorted by price.

function sortProduct(array) {
  let newArray = [];
  for (let i = 0; i < array.length; i++) {
    if (array[i].stock > 0) {
      newArray.push(array[i]);
    }
  }

  for (let i = 0; i < newArray.length - 1; i++) {
    for (let j = 0; j < newArray.length - i - 1; j++) {
      let swap = 0;
      if (newArray[j].stock > newArray[j + 1].stock) {
        swap = newArray[j].stock;
        newArray[j].stock = newArray[j + 1].stock;
        newArray[j + 1].stock = swap;
      }
    }
  }
  return newArray;
}

console.log(sortProduct(inventory));

// Final total should include discounts for electronics only.

const cart = [
  { name: "Headphones", category: "electronics", price: 100, quantity: 2 },
  { name: "T-shirt", category: "clothing", price: 30, quantity: 3 },
  { name: "Monitor", category: "electronics", price: 200, quantity: 1 },
];

function discounts(array) {
  let discount = 0;
  for (let i = 0; i < array.length; i++) {
    if (array[i].category === "electronics") {
      discount += array[i].price * 0.9;
    }
  }
  return discount;
}

console.log(discounts(cart));

// 🧠 1. Double the Numbers in an Array

function doubleArray(array) {
  let val = [];
  for (let i = 0; i < array.length; i++) {
    val.push(array[i] * 2);
  }
  return val;
}

console.log(doubleArray([1, 2, 3])); // Output: [2, 4, 6]

// 🔁 2. Sum All Even Numbers in an Array

function sumEvenNumbers(arr) {
  let sum = 0;
  for (let i = 0; i < arr.length; i++) {
    if (arr[i] % 2 === 0) {
      sum += arr[i];
    }
  }
  return sum;
}

console.log(sumEvenNumbers([1, 2, 3, 4, 5, 6])); // Output: 12

// 📚 3. Find the Oldest Person
const people1 = [
  { name: "Alice", age: 25 },
  { name: "Bob", age: 32 },
  { name: "Charlie", age: 29 },
];

function getolder(array) {
  let max = array[0].age;
  for (let i = 0; i < array.length; i++) {
    if (max < array[i].age) {
      max = array[i].name;
    }
  }
  return max;
}

console.log(getolder(people1));

// 📦 4. Group Numbers by Even and Odd

function groupEvenOdd(array) {
  let even = [];
  let odd = [];

  for (let i = 0; i < array.length; i++) {
    if (array[i] % 2 === 0) {
      even.push(array[i]);
    } else {
      odd.push(array[i]);
    }
  }
  return [even, odd];
}

console.log(groupEvenOdd([1, 2, 3, 4, 5]));

// function arrayToObject(array) {
//   let count=0;
//   let obj = {};
//   for (let i = 0; i < array.length; i++) {
//     if (obj[array[i]]) {
//       obj[array[i]].push({ item: array[i], time: count++ });
//     } else {
//       obj[array[i]] = { item: array[i], time: (count = 1) };
//     }
//   }
//   return obj
// }

// console.log(arrayToObject(["a", "b", "a","c"]));

// 🧩 1. Count Occurrences of Elements
let fruits = ["apple", "banana", "apple", "orange", "banana", "apple"];
// Output: { apple: 3, banana: 2, orange: 1 }

function countItems(array) {
  let obj = {};

  for (let i = 0; i < array.length; i++) {
    if (obj[array[i]]) {
      obj[array[i]]++;
    } else {
      obj[array[i]] = 1;
    }
  }
  return obj;
}

console.log(countItems(fruits));

// 🧠 2. Filter Adults From a List

const people2 = [
  { name: "Alice", age: 17 },
  { name: "Bob", age: 21 },
  { name: "Charlie", age: 19 },
];

// Output: only those with age >= 18
function getAdults(array) {
  let stock = [];
  for (let i = 0; i < array.length; i++) {
    if (array[i].age >= 18) {
      stock.push(array[i]);
    }
  }
  return stock;
}

console.log(getAdults(people2));

func = [1, [2, 3], [4, 5], 6];
// Output: [1, 2, 3, 4, 5, 6]

// 🎯 4. Create an Object from Two Arrays

const keys = ["id", "name", "age"];
const values = [1, "Alice", 25];

// Output: { id: 1, name: "Alice", age: 25 }

function zipToObject(keys, values) {
  let obj = {};

  for (let i = 0; i < keys.length; i++) {
    obj[keys[i]] = values[i];
  }
  return obj;
}
console.log(zipToObject(keys, values));

// 🧪 5. Remove Duplicates

let newArray = [1, 2, 2, 3, 4, 4, 5];
// Output: [1, 2, 3, 4, 5]

function removeDuplicates(array) {
  let newsA = [];
  for (let i = 0; i < array.length; i++) {
    if (array[i] == array[i + 1]) {
      newsA.push(array[i]);
    }
  }
  return newsA;
}

console.log(removeDuplicates(newArray));

// 🧪6. get  unique

let newArray2 = [1, 2, 2, 3, 4, 4, 5];

function getUnique(array) {
  let unique = [];
  for (let i = 0; i < array.length; i++) {
    let count = 0;
    for (let j = 0; j < array.length; j++) {
      if (array[i] === array[j]) {
        count++;
      }
    }
    if (count == 1) {
      unique.push(array[i]);
    }
  }
  return unique;
}

console.log(getUnique(newArray2));

// ---------------------------------------------------------------------------------

let arraytoreverse = ["aze", "aa", 1];

function reverseaArray(array) {
  let newOne = [];
  for (let i = array.length - 1; i >= 0; i--) {
    newOne.push(array[i]);
  }
  return newOne;
}

console.log(reverseaArray(arraytoreverse));

// ---------------------------------------------------------------------------------
let mot = "aze";

function rev(array) {
  let motreverse = "";
  for (let i = array.length - 1; i >= 0; i--) {
    motreverse += array[i];
  }
  return motreverse;
}

console.log(rev(mot));

// -------------------------------------------------------------------
let pali = "aa";

function palindrome(array) {
  let mot = "";
  for (let i = array.length - 1; i >= 0; i--) {
    mot += array[i];
  }
  return mot === pali;
}

console.log(palindrome(pali));

// -------------------------------------------------------------------

let arr = [1, 2, 3, 2, 1];

function arraypalindrome(array) {
  let stock = [];

  for (let i = array.length - 1; i >= 0; i--) {
    stock.push(array[i]);
  }
  return JSON.stringify(stock) === JSON.stringify(array);
}

console.log(arraypalindrome(arr));

// -------------------------------------------------------------------secondmax

let arrsecondMax = [-1, 0, -1, 0, -33];

function secondMax(array) {
  let max1 = -Infinity;
  let max2 = -Infinity;
  for (let i = 0; i < array.length; i++) {
    if (max1 < array[i]) {
      max2 = max1;
      max1 = array[i];
    } else if (max2 < array[i] && array[i] !== max1) {
      max2 = array[i];
    }
  }
  return max2;
}

console.log(secondMax(arrsecondMax));

// -------------------------------------------------------------------duplicate

let arrayduplicate = [1, 2, 3, 3, 4, 5, 5];

function removeduplicate(array) {
  let arrays = [];

  for (let i = 0; i < array.length; i++) {
    let count = 0;
    for (let j = 0; j < array.length; j++) {
      if (array[i] === array[j]) {
        count++;
      }
    }
    if (count == 1) {
      arrays.push(array[i]);
    }
  }
  return arrays;
}

console.log(removeDuplicates(arrayduplicate));

let ARRAYMIN = [1, 3, 7, 9, 4, 2];

function secondmIN(array) {
  let min1 = Infinity;
  let min2 = Infinity;

  for (let i = 0; i < array.length; i++) {
    if (min1 > array[i]) {
      min2 = min1;
      min1 = array[i];
    } else if (array[i] > min1 && array[i] !== min1) {
      min2 = array[i];
    }
  }
  return min2;
}

console.log(secondmIN(ARRAYMIN));

// find the missing number in an array

let aze = [1, 2, 3, 5, 7];
function missingNumber(array) {
  for (let i = 0; i < array.length - 1; i++) {
    if (array[i] + 1 != array[i + 1]) {
      console.log(array[i] + 1);
    }
  }
  // return null
}

console.log(missingNumber(aze));

// Input: [1,2,2,3,2,4], 2 → Output: 3

let inputs = [1, 2, 2, 3, 2, 4, 4];

function findeme(array, a) {
  let count = 0;
  for (let i = 0; i < array.length; i++) {
    if (array[i] === a) {
      count++;
    }
  }
  return count;
}

console.log(findeme(inputs, 2));

// how many time each one

function contss(array) {
  let stock = {};

  for (let i = 0; i < array.length; i++) {
    if (stock[array[i]]) {
      stock[array[i]]++;
    } else {
      stock[array[i]] = 1;
    }
  }
  return stock;
}

console.log(contss(inputs));

// Print numbers from 1 to 30.
// If divisible by 3, print "Fizz".
// If divisible by 5, print "Buzz".
// If divisible by both, print "FizzBuzz".

for (let i = 1; i <= 30; i++) {
  if (i % 3 === 0 && i % 5 === 0) {
    console.log(`${i} FizzBuzz`);
  } else if (i % 3 === 0) {
    console.log(`${i} Fizz`);
  } else if (i % 5 === 0) {
    console.log(`${i} Buzz`);
  } else {
    console.log(i);
  }
}

// Sum of digits of a number:
// Input: 123 → Output: 6

let yar = 123;
let news=yar.toString()
let sumq = 0;
for (let i = 0; i < news.length; i++) {
sumq+=parseInt(news[i])
}

console.log(sumq);




