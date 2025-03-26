

// facile

// function double(n) {
//     return n*2;
// }

//------

let arrayMap=[1,2,3]

let newArray=arrayMap.map((item)=>{
    return item*2
})

console.log(newArray)

let bonjour=()=>console.log("bonjour")
bonjour()


//moyens

// Créer appliquer(f, tableau) appliquant f à chaque élément.

function appliquer(f, tableau){
   let neeew= tableau.map((item)=>{
        return item*f
    })
    console.log(neeew)
}

let arr=[1,2,3]

console.log(appliquer(3,arr))





// -----Filtrer les nombres pairs avec filter().

let arrayPair=[1,2,3,4]

let newwVar=arrayPair.filter((n)=>{
    return n%2===0
}
)

console.log(newwVar)


// Écrire reduire(tableau, f, initial) pour une réduction.


reduireArray=[1,2,3]

let arro=reduireArray.reduce(function reduirre(a,b) {
    return a+b;
})

console.log(arro)

// Créer estPositif(n) fléchée retournant true si n > 0.


let estPositiv=n=>n>0

console.log(estPositiv(1))

// Difficiles


// reduce somme


let newasrr=[1,2,4]

let sommes=newasrr.reduce((a,c) => {
  return a+c
},0)

console.log(sommes)


// Créer trierPar(f, tableau) triant selon f.

 
