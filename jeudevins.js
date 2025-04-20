// let a=1

// for (let i = 0; i < 7; i++) {

//     let b=Math.floor(Math.random()*100)
//     if (a===b) {
//        console.log("equals !!! win  ")
//        break
//     }else if (a>b) {
//         console.log(`${a} is bigger than ${b}`)
//     }else{
//         console.log(`${b} is bigger than ${a}`)
//     }

// }

// let arr1 = [1, 2, 3, 3, 2];
// let arr2 = [11, 7, 7, 8];

// let newArray = [];
// let doublon = [];
// let notDoublon = [];

// for (let i = 0; i < arr1.length; i++) {
//   newArray.push(arr1[i]);
// }
// for (let i = 0; i < arr2.length; i++) {
//   newArray.push(arr2[i]);
// }
// console.log(newArray);

// for (let i = 0; i < newArray.length; i++) {
//   for (let j = i+1; j < newArray.length; j++) {
//     if (newArray[i] === newArray[j]) {
//       doublon.push(newArray[i]);
//     }else{
//         notDoublon.push(newArray[i])
//     }
//   }
// }

// console.log(doublon)
// console.log(notDoublon)

// const students = [
//     { name: "Alice", grades: [12, 1, 10, 16] },
//     { name: "Bob", grades: [8, 9, 7] },
//     { name: "Charlie", grades: [13, 13, 12] },
//     { name: "Diana", grades: [6, 8, 9, 7] }
//   ];

//   for (let i = 0; i < students.length; i++) {
//     let sum=0
// for (let j = 0; j < students[i].grades.length; j++) {

//     sum+=students[i].grades[j]
// }
// students[i].avg=sum/students[i].grades.length
// if ((sum/students[i].grades.length)>10) {
//     students[i].passed="passed"
// }else{
//     students[i].passed="failed"

// }
// }

//  console.log(students)

// let arr=[11,1,-1,55]

// a=44
// b=3
// swap
// for (let i = 0; i < arr.length-1; i++) {
// for (let j =0 ; j < arr.length-i-1; j++) {

//     let swap;

//     if (arr[j]<arr[j+1]) {
//         swap=arr[j]
//         arr[j]=arr[j+1]
//         arr[j+1]=swap
//     }

// }
// }

// console.log(arr)

//------------------------------------------------deapseak1------------------------------------------

const library = [
  {
    id: 1,
    title: "The Great Gatsby",
    author: "F. Scott Fitzgerald",
    year: 1925,
    genres: ["novel", "fiction"],
    available: true,
  },
  {
    id: 2,
    title: "To Kill a Mockingbird",
    author: "Harper Lee",
    year: 1960,
    genres: ["fiction", "drama"],
    available: false,
  },
  {
    id: 3,
    title: "1984",
    author: "George Orwell",
    year: 1949,
    genres: ["dystopian", "science fiction"],
    available: true,
  },
  {
    id: 4,
    title: "Pride and Prejudice",
    author: "Jane Austen",
    year: 1813,
    genres: ["romance", "novel"],
    available: true,
  },
];

//   Problems to Solve
// 1- Write a function getAvailableBooks() that returns all available--------------------------------------------------------

function getAvailableBooks(library) {
  let results = library.filter((item) => {
    return item.available === true;
  });
  return results;

  //   console.log(reults);
}
// console.log(getAvailableBooks(library));

// 2-Write a function getBooksByGenre(genre) that takes a genre and returns books in that genre----------------------------------------

let genre;
let newarray = [];
function getBooksByGenre(genre) {
  for (let i = 0; i < library.length; i++) {
    for (let j = 0; j < library[i].genres.length; j++) {
      if (library[i].genres[j] === genre) {
        newarray.push(library[i]);
        break;
      }
    }
  }
  return newarray;
}
// console.log(getBooksByGenre("novel"));

//3- Write a function checkoutBook(id) that:----------------------------------------------

// Finds the book by id

// If available, marks it as unavailable and returns true

// If not available or doesn't exist, returns false

function checkoutBook(id) {
  for (let i = 0; i < library.length; i++) {
    if (library[i].id === id) {
      if (library[i].available) {
        library[i].available === false;
        return true;
      }
      return false;
    }
  }
  //not found
  return false;
}

// console.log(checkoutBook(4));

// Write a function addNewBook(title, author, year, genres) that:----------------------------------------------

// Creates a new book object (auto-increment id)

// Sets available to true by default

// Adds it to the library array

// Returns the new book

function addNewBook(title, author, year, genres) {
  let newOBJ = {};
  newOBJ.id = library.length + 1;
  newOBJ.title = title;
  newOBJ.author = author;
  newOBJ.year = year;
  newOBJ.genres = genres;

  library.push(newOBJ);
  return newOBJ;
}

// console.log(addNewBook("aze", "amine", 1234, ["ayayayay", "alala"]));
// console.log(library);
// console.log("sssssssssssssssssssssssssss")

// Write a function getAuthors() that returns an array of all unique authors

let newARR = [];
function getAuthors() {
  for (let i = 0; i < library.length; i++) {
    for (let j = i + 1; j < library.length; j++) {
      if (
        library[i].author !== library[j].author &&
        !newARR.includes(library[i].author)
      ) {
        newARR.push(library[i].author);
      }
    }
  }
  return newARR;
}
// console.log(getAuthors())

// Write a function getBooksByYear(year) that returns books published in a specific year

function getBooksByYear(year) {
  for (let i = 0; i < library.length; i++) {
    if (library[i].year === year) {
      return library[i];
    }
  }
}

// console.log(getBooksByYear(1960))

// JavaScript Array & Object Exercise: Product Management System---------------------------//------------------------------------------------deapseak2------------------------------------------

// Initial Data
// javascript
const products = [
  {
    id: 101,
    name: "Wireless Mouse",
    price: 24.99,
    categories: ["electronics", "accessories"],
    inStock: true,
  },
  {
    id: 102,
    name: "Mechanical Keyboard",
    price: 89.99,
    categories: ["electronics"],
    inStock: false,
  },
  {
    id: 103,
    name: "Desk Lamp",
    price: 34.5,
    categories: ["furniture", "lighting"],
    inStock: true,
  },
  {
    id: 104,
    name: "Notebook",
    price: 9.99,
    categories: ["stationery"],
    inStock: true,
  },
];
// Problems to Solve (Using for loops)
// List In-Stock Products
// Write a function getAvailableProducts() that returns all products where inStock is true--------------------------------------------

function getAvailableProducts() {
  let newArraystostock = [];
  for (let i = 0; i < products.length; i++) {
    if (products[i].inStock === true) {
      newArraystostock.push(products[i]);
    }
  }
  return newArraystostock;
}

function getAvailableProducts() {
  let news = products.filter((item) => {
    return item.inStock === true;
  });
  return news;
}

// console.log(getAvailableProducts())

// Write a function getProductsByCategory(category) that returns all products in a given category-------------------------------------------

// for--------
function getProductsByCategory(category) {
  let resp = [];
  for (let i = 0; i < products.length; i++) {
    for (let j = 0; j < products[i].categories.length; j++) {
      if (products[i].categories[j] === category) {
        resp.push(products[i]);
      }
    }
  }
  return resp;
}

// foreach-----
// function getProductsByCategory(category) {
//     let resp=[]

// products.forEach(element => {
//     element.categories.forEach(item => {
//         if (item===category) {
//             resp.push(element)
//         }
//     });
// });
// return resp

// }

// filter-------

// function getProductsByCategory(category) {

//     let newss=products.filter((item)=>{
//         return item.categories.includes(category)
//     })
//     return newss
// }

// console.log(getProductsByCategory("electronics"));

// Restock Product----------------------------------------------------------------
// Write a function restockProduct(id) that:

// Finds the product by ID

// If out of stock, marks it as in stock and returns true

// If already in stock or doesn't exist, returns false

function restockProduct(id) {
  for (let i = 0; i < products.length; i++) {
    if (products[i].id === id) {
      if (products[i].inStock === false) {
        products[i].inStock = true;
        return true;
      }
      return false;
    }
  }
  return false;
}

console.log(restockProduct(102));
// Add New Product-------------------------------------------------------
// Write a function addNewProduct(name, price, categories) that:

// Creates a new product with auto-incremented ID

// Sets inStock: true by default

// Adds it to the products array

// Returns the new product

function addNewProduct(name, price, categories) {
  let newabj = {};
  newabj.id = products.length + 1;
  newabj.name = name;
  newabj.price = price;
  newabj.categories = categories;
  newabj.inStock = true;

  products.push(newabj);
  return products;
}

console.log(addNewProduct("azer", 2, ["brocode", "sami"]));
console.log(addNewProduct("azer", 4, ["brocode", "sami"]));

// Get All Categories---------------------------------------------------------------------------
// Write a function getAllCategories() that returns an array of all unique categories (no duplicates)
function getAllCategories() {
  let newtest = [];
  for (let i = 0; i < products.length; i++) {
    for (let j = 0; j < products[i].categories.length; j++) {
      if (!newtest.includes(products[i].categories[j])) {
        newtest.push(products[i].categories[j]);
      }
    }
  }
  return newtest
}

console.log(getAllCategories())

// Apply Discount
// Write a function applyDiscount(category, discountPercent) that:

// Applies discount to all products in the category

// Returns count of discounted products


function applyDiscount(category, discountPercent) {
    for (let i = 0; i < products.length; i++) {

        for (let j = 0; j < products[i].categories.length; j++) {
            if (products[i].categories[j]===category) {
            products[i].price=products[i].price*discountPercent
            }            
        }
    }
    return products
}

console.log(applyDiscount("sami",2))

// Example Usage
// javascript
// console.log(getAvailableProducts());
// console.log(getProductsByCategory("electronics"));
// console.log(restockProduct(102)); // true if was out of stock
// console.log(addNewProduct("Mouse Pad", 12.99, ["accessories"]));
// console.log(getAllCategories());
// console.log(applyDiscount("electronics", 10)); // 10% discount
// You can now implement these functions. Would you like me to review your solutions when you're done?
