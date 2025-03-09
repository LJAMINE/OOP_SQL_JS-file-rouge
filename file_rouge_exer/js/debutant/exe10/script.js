let plus=document.getElementById("plus")
let moins=document.getElementById("moins")
let val=document.getElementById("val")

count=0;
plus.addEventListener("click",() => {
    val.textContent=count++
})

moins.addEventListener("click",() => {

    if (val.textContent>0) {
    val.textContent=count--
        
    } else {
return    }
})