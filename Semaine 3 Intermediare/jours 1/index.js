

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


console.log('qgqqggqgqggq')



// -----Filtrer les nombres pairs avec filter().

let arrayPair=[1,2,3,4]

let newwVar=arrayPair.filter((n)=>{
    return n%2===0
}
)

console.log(newwVar)

