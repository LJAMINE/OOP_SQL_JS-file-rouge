function walkdog() {
return new Promise((resolve,reject)=>{
    setTimeout(() => {
        resolve("you walk the dog ");
      }, 1500);

})
}

// walkdog();

function cleanKitchen() {
 return new Promise((resolve,reject)=>{
    setTimeout(() => {
        resolve("you clean the kitchen  ");
      }, 2500);
 })
}

// cleanKitchen()
 
function taketrash() {
 return new Promise((resolve,reject)=>{
    setTimeout(() => {
        resolve("you take the trash ");
      }, 500);
 })
}

