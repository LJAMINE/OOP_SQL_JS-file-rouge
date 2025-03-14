let num=[1,2,3]




let arr=num.map(multu)

console.log(arr)


function multu(a){
return a*2
}



let arr1=[1,2,4]

let ar=arr1.filter(Pair);

console.log(ar)

function Pair(a){
    return a%2===0
}


let arr3=[1,2,3]

let val=arr3.reduce(somme);

console.log(val)

function somme(a,b) {
    return a+b
}