let users = [
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
  { name: "XJX", age: 25 },
  { name: "XXX", age: 50 },
  { name: "aQ", age: 40 },
  { name: "TTT", age: 67 },
];

let max = users[0];
let max2 = users[0];
let max3 = users[0];

// for (let i = 0; i < users.length; i++) {
//   if (users[i].age > max.age) {
//     max = users[i];
//   } else if (users[i].age > max2.age && users[i].age !== max.age) {
//     max2 = users[i];
//   } else if (users[i].age > max3.age && users[i].age !== max2.age) {
//     max3 = users[i];
//   }
// }

// console.log(max, max2, max3);

for (let i = 0; i < users.length - 1; i++) {
  for (let j = 0; j < users.length - i - 1; j++) {
    let swap;
    if (users[j].age < users[j + 1].age) {
      swap = users[j];
      users[j] = users[j + 1];
      users[j + 1] = swap;
    }
  }
}
console.log("aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa");
console.log(users[0].age, users[1].age, users[2].age);

let newarray = [];
for (let i = 0; i < users.length; i++) {
  let count = 0;
  for (let j = 0; j < users.length; j++) {
    if (users[i].age === users[j].age) {
      count++;
    }
  }
  if (count === 1) {
    newarray.push(users[i].age);
  }
}

console.log("bbbbbbbbbbbbbbbbbbbbbbbb");
console.log(newarray);

let agemoins18 = [];
let sum18 = 0;
let avg18 = 0;

let agemoins18_30 = [];
let sum18_30 = 0;
let avg18_30 = 0;

let agemoins40 = [];
let sum40 = 0;
let avg40 = 0;

for (let i = 0; i < users.length; i++) {
  if (users[i].age < 18 && users[i].age > 0) {
    agemoins18.push(users[i].age);
    sum18_30 += users[i].age;
    avg = sum18_30 / agemoins18.length;
  } else if (users[i].age > 18 && users[i].age < 30) {
    agemoins18_30.push(users[i].age);
    sum18_30 += users[i].age;
    avg18_30 = sum18_30 / agemoins18_30.length;
  } else if (users[i].age > 40) {
    agemoins40.push(users[i].age);
    sum40 += users[i].age;
    avg40 = sum40 / agemoins40.length;
  }
}

console.log("cccccccccccccccccc");

console.log(avg, avg18_30, avg40);

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

// let arr=["Amine","Bagagga","Cajja","A","C","A"]
// let newss=[]
// for (let i = 0; i < arr.length; i++) {
//     for (let j = 0; j < arr[i].length; j++) {

//         if (arr[i][j]===arr[i][j+1]) {
//             newss.push(arr[i])
//         }
//     }
// }
// console.log(newss)

// const transactions = [
//     { id: 1, category: "Food", amount: 50 },
//     { id: 2, category: "Entertainment", amount: 100 },
//     { id: 3, category: "Food", amount: 30 },
//     { id: 4, category: "Transportation", amount: 70 },
//     { id: 5, category: "Entertainment", amount: 50 },
//   ];
//   // console.log(categorizeExpenses(transactions));
//   /* Should output:
//   [
//     { category: 'Entertainment', totalAmount: 150 },
//     { category: 'Food', totalAmount: 80 },
//     { category: 'Transportation', totalAmount: 70 }
//   ]
//   */

//   let func={}

// function categorzy() {
//     for (let i = 0; i < transactions.length; i++) {

//         if (func[transactions[i].category]) {
//             func[transactions[i].category].push({title:transactions[i].id})
//         }else{
//             func[transactions[i].category]=[transactions[i].id]

//         }
//       }
//       return func
// }

// console.log(categorzy())

// console.log("A")
// console.log("B")
// console.log("C")

// console.log("----------------------------------------------")

// console.log("A")

// setTimeout(() => {
//     console.log("B")

// }, 5000);

// console.log("C")

let arrayossama = [1, 2, 2, 3, 4, 5];
var uniquearr = [];

for (let i = 0; i < arrayossama.length; i++) {
  if (arrayossama[i] !== arrayossama[i + 1]) {
    uniquearr.push(arrayossama[i]);
  }
}
console.log(uniquearr);

const people = [
  { name: "John", age: 30 },
  { name: "Jane", age: 25 },
  { name: "Doe", age: 35 },
];

for (let i = 0; i < people.length - 1; i++) {
  for (let j = 0; j < people.length - i - 1; j++) {
    let swap;
    if (people[j].age > people[j + 1].age) {
      swap = people[j].age;
      people[j].age = people[j + 1].age;
      people[j + 1].age = swap;
    }
  }
}

console.log(people);

const names = [
  { name: "john", age: 30 },
  { name: "amine", age: 30 },
];

function haskey(namesobject, name) {
  for (let i = 0; i < namesobject.length; i++) {
    if (namesobject[i].name === name) {
      return true;
    }
  }
  return false;
}

console.log(haskey(names, "hhhhh"));

// Challenge 1 — Filtrage Dynamique de Produits
// Objectif :
//  Écrire une fonction filtrerProduits qui prend une liste de produits et un mot-clé, et retourne les produits dont le nom contient ce mot (insensible à la casse).
// Exemple d’entrée :
const produitsss = [
  { id: 1, nom: "Casque", prix: 120 },
  { id: 2, nom: "clavier", prix: 85 },
  { id: 3, nom: "souris", prix: 45 },
];
// filtrerProduits(produits, "clavier"); // Doit retourner l’objet Clavier Mécanique

function aff(produitsss, mott) {
  const arroy = [];
  for (let i = 0; i < produitsss.length; i++) {
    if (produitsss[i].nom === mott) {
      arroy.push(produitsss[i]);
    }
  }
  return arroy;
}

console.log(aff(produitsss, "souris"));

// Challenge 2 — Statistiques Étudiants
// Objectif :
//  Écrire une fonction statistiquesEtudiants qui prend un tableau d'étudiants avec leur moyenne, et affiche :
// Nombre total d'étudiants

// Moyenne générale

// Nombre d'étudiants admis (moyenne ≥ 10)

// Exemple de tableau :
const etudiants = [
  { nom: "Amina", moyenne: 15 },
  { nom: "Hassan", moyenne: 8 },
  { nom: "Samira", moyenne: 12 },
];

let counter = 0;
for (let i = 0; i < etudiants.length; i++) {
  if (etudiants[i]) {
    counter++;
  }
}

console.log(counter);

let sum = 0;
for (let i = 0; i < etudiants.length; i++) {
  sum += etudiants[i].moyenne;
}
console.log(sum / etudiants.length);

let counters = 0;
for (let i = 0; i < etudiants.length; i++) {
  if (etudiants[i].moyenne >= 10) {
    counters++;
  }
}

console.log(counters);

// Challenge 3 — Système de TODO List----------------------------------------------------------
// Objectif :
//  Créer un tableau global todos et les fonctions suivantes :
// ajouterTache(titre)

// marquerCommeFaite(index)

// afficherTaches()
//  (→ affiche les tâches avec ✅ ou ❌)

// Exemple attendu :
// 1. ✅ Apprendre JS
// 2. ❌ Faire les courses

var todos = [];

function ajouterteche(titre) {
  todos.push({ titre: titre, fait: false });
}

// Challenge 4 — Mini Calculatrice (Objet)----------------------------------------------
// Objectif :
//  Créer un objet calculatrice avec les méthodes suivantes :
// addition(a, b)

// soustraction(a, b)

// multiplication(a, b)

// division(a, b) → gérer division par 0

// Utiliser console.log pour tester.

// Challenge 5 — Gestion Simplifiée de Candidatures
// Objectif :
//  Créer un tableau candidatures et les fonctions suivantes :
// ajouter(nom, projet)

// changerStatut(id, nouveauStatut) (ex: "validée")

var candidatures = [];

var idcounter = 0;
function ajouter(nom, projet) {
  candidatures.push({
    id: idcounter++,
    nom: nom,
    projet: projet,
    statut: "en attente",
  });
}

function changerStatut(id, nouveauStatut) {
  for (let i = 0; i < candidatures.length; i++) {
    if (candidatures[i].id === id) {
      candidatures[i].statut = nouveauStatut;
      break;
    }
  }
}

console.log(ajouter("amma", "roject"));
console.log(ajouter("aaa", "zzzzz"));
console.log(ajouter("aaa", "zzzzz"));
changerStatut(0, "confirme");

console.log(candidatures);

// afficherStatistiques() → nombre total + combien validées, rejetées, en attente
function afficherStatistiques() {
  let countss = 0;
  let countssconfirm = 0;
  let countssattente = 0;
  for (let i = 0; i < candidatures.length; i++) {
    countss++;
    if (candidatures[i].statut === "confirme") {
      countssconfirm++;
    } else if (candidatures[i].statut === "en attente") {
      countssattente++;
    }
  }
  return [countss, countssconfirm, countssattente];
}

console.log(afficherStatistiques());

// --------------------------------------------------

const eleves = [
  { nom: "Amine", notes: [15, 18, 12] },
  { nom: "Sarah", notes: [8, 9, 11] },
  { nom: "Yassine", notes: [20, 17, 19] },
];

function analyserNotes(eleves) {
  let newAZE = [];
  for (let i = 0; i < eleves.length; i++) {
    let sum = 0;
    for (let j = 0; j < eleves[i].notes.length; j++) {
      sum += eleves[i].notes[j];
    }
    if (sum / eleves[i].notes.length < 10) {
      console.log(`${sum / eleves[i].notes.length} not goood `);
    } else if (
      sum / eleves[i].notes.length >= 14 &&
      sum / eleves[i].notes.length <= 17
    ) {
      console.log(`${sum / eleves[i].notes.length} goood `);
    }
    if (sum / eleves[i].notes.length > 17) {
      console.log(`${sum / eleves[i].notes.length} execenet `);
    }
    // newAZE.push(sum/eleves[i].notes.length);
  }
  return newAZE;
}

console.log(analyserNotes(eleves));

// ((((((((((((((((((((((((((()))))))))))))))))))))))))))
console.log("----------------------------");
const panier = [
  { nom: "Livre", prix: 11111, quantite: 2 },
  { nom: "Stylo", prix: 12222222222.2, quantite: 5 },
  { nom: "Sac à dos", prix: 12, quantite: 1 },
];

function afficherPanier(panier) {
  for (let i = 0; i < panier.length; i++) {
    console.log(panier[i]);
  }
}
console.log(afficherPanier(panier));

console.log("----------------------------");

function totalPanier(panier) {
  let coun = 0;
  for (let i = 0; i < panier.length; i++) {
    console.log(panier[i]);
    coun++
  }
  return coun
}

console.log(totalPanier(panier))



function produitLePlusCher(panier) {
    let max = -Infinity;
    let max2 = -Infinity;
for (let i = 0; i < panier.length; i++) {
    if (max<panier[i].prix) {
        max2=max
        max=panier[i].prix
    }else if (max2<panier[i].prix && panier[i].prix!=max) {
        max2=panier[i].prix
        
    }
}
return [max,max2]
}

console.log(produitLePlusCher(panier))


