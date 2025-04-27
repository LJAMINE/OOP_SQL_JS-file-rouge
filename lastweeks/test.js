
// https://docs.google.com/document/d/14pX-UNxaDRGchUu65EHSgpOLkFZVbiAQlTA6Pyu1URQ/edit?tab=t.0#heading=h.9e15unrf0key
// Challenge 1 — Filtrage Dynamique de Produits--------------------------------------------------------------------
// Objectif :
//  Écrire une fonction filtrerProduits qui prend une liste de produits et un mot-clé, et retourne les produits dont le nom contient ce mot (insensible à la casse).
// Exemple d’entrée :
// const produits = [
//   { id: 1, nom: "Casque Bluetooth", prix: 120 },
//   { id: 2, nom: "Clavier Mécanique", prix: 85 },
//   { id: 3, nom: "Souris Gamer", prix: 45 }
// ];
// filtrerProduits(produits, "clavier"); // Doit retourner l’objet Clavier Mécanique

const produits = [
  { id: 1, nom: "Casque Bluetooth", prix: 120 },
  { id: 2, nom: "Clavier Mécanique", prix: 85 },
  { id: 3, nom: "Souris Gamer", prix: 45 },
];

function filtrerProduits(produits, nomchercher) {
  let newarray = [];
  for (let i = 0; i < produits.length; i++) {
    if (
      produits[i].nom
        .toLowerCase()
        .trim()
        .includes(nomchercher.toLowerCase().trim())
    ) {
      newarray.push(produits[i].nom);
    }
  }
  return newarray;
}

console.log(filtrerProduits(produits, "Souris"));

// Challenge 2 — Statistiques Étudiants--------------------------------------------------------------------------------------------
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

function statistiquesEtudiants(etudiants) {
  let count = 0;
  let sum = 0;
  let countplus10 = 0;
  for (let i = 0; i < etudiants.length; i++) {
    if (etudiants[i].moyenne > 10) {
      countplus10++;
    }
    console.log(etudiants[i]);
    sum += etudiants[i].moyenne;
    count++;

    var avg = sum / etudiants.length;
  }

  return [count, avg, countplus10];
}

console.log(statistiquesEtudiants(etudiants));

// Challenge 3 — Système de TODO List-----------------------------------------------
// Objectif :
//  Créer un tableau global todos et les fonctions suivantes :
// ajouterTache(titre)

// marquerCommeFaite(index)

// afficherTaches()
//  (→ affiche les tâches avec ✅ ou ❌)

// Exemple attendu :
// 1. ✅ Apprendre JS
// 2. ❌ Faire les courses

let tab = [];

let count = 0;
function ajouterTache(titre) {
  tab.push({
    id: count++,
    titre: titre,
    status: "pending",
  });
  return tab;
}

console.log(ajouterTache("amine"));
console.log(ajouterTache("aalla"));
console.log(ajouterTache("bro"));

function marquerCommeFaite(index) {
  for (let i = 0; i < tab.length; i++) {
    if (tab[i].id === index) {
      tab[i].status = "fait";
    }
  }
  return tab;
}

console.log(marquerCommeFaite(1));

function afficherTaches() {
  for (let i = 0; i < tab.length; i++) {
    if (tab[i].status === "fait") {
      console.log(`goood and fait ${tab[i].titre}`);
    } else {
      console.log(`pending and bad ${tab[i].titre}`);
    }
  }
}

console.log(afficherTaches());

// Challenge 5 — Gestion Simplifiée de Candidatures
// Objectif :
//  Créer un tableau candidatures et les fonctions suivantes :
// ajouter(nom, projet)

// changerStatut(id, nouveauStatut) (ex: "validée")

// afficherStatistiques() → nombre total + combien validées, rejetées, en attente

let table = [];

let counter = 0;
function ajouter(nom, projet) {
  table.push({
    id: counter++,
    nom: nom,
    projet: projet,
    status: "pending",
  });

  return table
}



console.log(ajouter("said","laravel"))
console.log(ajouter("aziz","math"))
console.log(ajouter("aziz","akak"))
console.log(ajouter("aziz","kzkkz"))

function changerStatut(id, nouveauStatut){
    table.forEach(element => {
    if (element.id===id) {
        element.status=nouveauStatut
    }
});
return table
}


console.log(changerStatut(0,"valide"))
console.log(changerStatut(1,"rejetées"))
console.log(changerStatut(2,"attente"))



function  afficherStatistiques() {
    let countTotal=0
    let countvalide=0
    let countrejetées=0
    for (let i = 0; i < table.length; i++) {
        countTotal++

        if (table[i].status==="valide") {
            countvalide++
        }else if (table[i].status==="rejetées") {
            countrejetées++
        }
    }
    return [countTotal,countvalide,countrejetées]
}

console.log(afficherStatistiques())