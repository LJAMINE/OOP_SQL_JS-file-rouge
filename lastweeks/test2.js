// 1. Find the Most Frequent Item in an Array

const arr = [1, 2, 3, 3, 3, 4, 5];

function findRepeatedNumber(array) {
  var stock = {};
  var countmax = 0;
  var valeurrepeated = 0;
  for (let i = 0; i < array.length; i++) {
    if (stock[array[i]]) {
      stock[array[i]]++;
    } else {
      stock[array[i]] = 1;
    }

    if (stock[array[i]] > countmax) {
      countmax = stock[array[i]];
      valeurrepeated = array[i];
    }
  }
  return valeurrepeated;
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

const arr1 = [1, 2, 3, 4, , 10, 5];
const arr2 = [4, 5, 6, 7, 10, 8];

function intersection(array1, array2) {
  let newarray = [];
  let doublon = [];

  for (let i = 0; i < array1.length; i++) {
    newarray.push(array1[i]);
  }
  for (let i = 0; i < array2.length; i++) {
    newarray.push(array2[i]);
  }

  for (let i = 0; i < newarray.length; i++) {
    for (let j = i + 1; j < newarray.length; j++) {
      if (newarray[j] === newarray[i]) {
        doublon.push(newarray[j]);
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
