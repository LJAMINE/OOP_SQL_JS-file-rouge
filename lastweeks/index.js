// 🚀 Exercise 1: Group by Category----------------------------

const products = [
  { name: "Apple", category: "Fruit" },
  { name: "Carrot", category: "Vegetable" },
  { name: "Banana", category: "Fruit" },
  { name: "Celery", category: "Vegetable" },
];

var newobj = {};

for (let i = 0; i < products.length; i++) {
  if (newobj[products[i].category]) {
    newobj[products[i].category].push({ item: products[i].name });
  } else {
    newobj[products[i].category] = [products[i].name];
  }
}

console.log(newobj);

// 🧠 Exercise 2: Remove Duplicates by ID

const users = [
  { id: 1, name: "Alice" },
  { id: 2, name: "Bob" },
  { id: 1, name: "Alice Smith" },
  { id: 3, name: "Charlie" },
];

let duplicate = [];
let ids = [];

for (let i = 0; i < users.length; i++) {
  for (let j = 0; j < users.length; j++) {
    if (users[j].id === users[i].id && !ids.includes(users[i].id)) {
      duplicate.push(users[i]);
      ids.push(users[i].id);
    }
  }
}

console.log(duplicate);

// 💥 Exercise 4: Find the Most Frequent Element
const arr = [1, 3, 1, 3, 2, 1];
let obh = {};
let maxcount = 0;
for (let i = 0; i < arr.length; i++) {
  let count = 0;
  for (let j = 0; j < arr.length; j++) {
    if (arr[i] === arr[j]) {
      count++;
    }
  }
  if (count > maxcount) {
    maxcount = count;
    obh = {
      elem: arr[i],
      num: count,
    };
  }
}

console.log(obh);

// ----------------------------------------------
let people = [
  { name: "amine", age: 12 },
  { name: "sara", age: 17 },
  { name: "youssef", age: 14 },
  { name: "salma", age: 13 },
  { name: "adam", age: 15 },
  { name: "ines", age: 16 },
  { name: "mehdi", age: 18 },
  { name: "mehdi", age: 33 },
  { name: "hana", age: 12 },
  { name: "ayoub", age: 19 },
  { name: "layla", age: 17 },
  { name: "omar", age: 13 },
  { name: "fatima", age: 15 },
  { name: "khalid", age: 14 },
  { name: "nadia", age: 16 },
  { name: "ismail", age: 12 },
  { name: "nour", age: 18 },
  { name: "zakaria", age: 13 },
  { name: "rim", age: 17 },
  { name: "ayman", age: 14 },
  { name: "AAJJA", age: 15 },
  { name: "XJX", age: 1 },
  { name: "XXX", age: 50 },
  { name: "aQ", age: 40 },
  { name: "TTT", age: 67 },
];

function triage(people) {
  for (let i = 0; i < people.length - 1; i++) {
    for (let j = 0; j < people.length - i - 1; j++) {
      let swap;
      if (people[j].age > people[j + 1].age) {
        swap = people[j];
        people[j] = people[j + 1];
        people[j + 1] = swap;
      }
    }
  }
  return [people[0], people[1], people[2]];
}
console.log(triage(people));

// -----------------------------
const stades = [
  {
    nom: "Stade Med V",
    prix: 50,
    sport: "Football",
    availability: true,
    subscriptions: 120,
  },
  {
    nom: "Santiago",
    prix: 70,
    sport: "Basketball",
    availability: true,
    subscriptions: 100,
  },
  {
    nom: "Old tradford",
    prix: 30,
    sport: "Football",
    availability: false,
    subscriptions: 200,
  },
  {
    nom: "Moulay Hassan",
    prix: 40,
    sport: "Tennis",
    availability: false,
    subscriptions: 60,
  },
  {
    nom: "Alkhayma",
    prix: 35,
    sport: "Natation",
    availability: false,
    subscriptions: 500,
  },
];

function showavailabe(stades) {
  let available = [];
  for (let i = 0; i < stades.length; i++) {
    if (stades[i].availability === true) {
      available.push(stades[i]);
    }
  }
  return available;
}

console.log(showavailabe(stades));

function mostSubscriptions(stades) {
  let maxsub = stades[0].subscriptions;
  for (let i = 0; i < stades.length; i++) {
    if (maxsub < stades[i].subscriptions) {
      maxsub = stades[i].subscriptions;
    }
  }
  return maxsub;
}

console.log(mostSubscriptions(stades));

function Total(stades) {
  let sum = 0;
  for (let i = 0; i < stades.length; i++) {
    sum += stades[i].subscriptions;
  }
  return sum;
}
console.log(Total(stades));

function groupe(stades) {
  let newobject = {};
  for (let i = 0; i < stades.length; i++) {
    if (newobject[stades[i].sport]) {
      newobject[stades[i].sport].push({ item: stades[i].nom });
    } else {
      newobject[stades[i].sport] = [stades[i].nom];
    }
  }
  return newobject;
}

console.log(groupe(stades));

function pricesort(stades) {
  for (let i = 0; i < stades.length-1; i++) {
    for (let j = 0; j < stades.length-i-1; j++) {
        let swap;
        if (stades[j].prix > stades[j + 1].prix) {
          swap = stades[j];
          stades[j] = stades[j + 1];
          stades[j + 1] = swap;
        }
    }
 
  }
  return stades;
}

console.log(pricesort(stades));



function filtermap(stades) {
    let newarr=stades.filter((item)=>{
        return item.availability===true
    })
    let finalarr=newarr.map((item)=>{
        return item.nom
    })
    return finalarr
}

console.log(filtermap(stades))


// 2. Calculate the total price of all stadiums that are unavailable.


function filterMMap(stades) {
    let news=stades.filter((item)=>{
        return item.availability===false
    })
    let sum=0
  news.forEach(element => {
    sum+=element.prix
  });
  return sum
}



console.log(filterMMap(stades))

// 3. Create a list of sports offered (no duplicates).



function noduplicate(stades) {
    let sportsarr=[]
    for (let i = 0; i < stades.length; i++) {
        if (!sportsarr.includes(stades[i].sport)) {
            sportsarr.push(stades[i].sport)
        }
    }
    return sportsarr
}
console.log(noduplicate(stades))





