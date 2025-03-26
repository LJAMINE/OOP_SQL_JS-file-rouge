function call() {
return new Promise((resolve,reject)=>{
    setTimeout(() => {
        console.log("good ");
      }, 500);

})
}

// call();

call().then((result)=>{
  console.log(result)
})


// moyenne



