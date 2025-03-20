// facile
function bonjour() {
  console.log("bonjourzzkzkz");
}

bonjour();

function addition(a, b) {
  return a + b;
}

console.log(addition(2, 4));

// moyen

function estPair(nbr) {
  if (nbr % 2 === 0) {
    console.log("pair");
  } else {
    console.log("impair");
  }
}

estPair(3);

function factorielle(n) {
  let f = 1;
    for (let i = n; i > 1; i--) {
      f *= i;
    }
    return f
}

console.log(factorielle(4));


function maximum(a,b){
 
    let max=a;

    if (max>b) {
        console.log(a)
    }else{
        console.log(b)

    }
}

console.log(maximum(9,10))


function bienvenue(name){
return  name
}

console.log(bienvenue("aminnenenen"))



//difficiles


function sommeTble(table){
    let somme=0;  

    for (let i = 0; i < table.length; i++) {
    somme+=table[i];
        
    }
    return somme
}

tb=[5,2,3]

console.log(sommeTble(tb));


function inversechaine(chaine){

    let motinverse=""
    let lengthdemot=chaine.length

    for (let i =lengthdemot-1 ; i >= 0; i--) {

        motinverse+=chaine[i];
        
    }
    return motinverse
}

console.log(inversechaine("bro"))



function estpalindrome(chaines){

    let motIInverse=""
    let lengthdemottt=chaines.length

    for (let i = lengthdemottt-1; i >= 0; i-- ){

        motIInverse+=chaines[i]
    }
    return (motIInverse===chaines) 
    ;


}

console.log(estpalindrome("radar"))