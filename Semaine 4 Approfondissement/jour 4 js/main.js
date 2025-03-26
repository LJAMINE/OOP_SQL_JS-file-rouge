let texte=document.getElementById('texte')

texte.innerText="sossoososo";
// texte.add.classList="akaakka"
texte.classList.add("akaakka");


let div=document.createElement('div')


document.body.appendChild(div)

div.remove();

let btn= document.getElementById('btn')
btn.style.backgroundColor="green"


let array=["amone","said","bro"]

let newu=document.createElement("ul")

array.forEach(element => {
    let li=document.createElement("li")
    li.innerText=element

    newu.appendChild(li)
});

document.body.appendChild(newu)



let moins=document.getElementById('moins')
let plus=document.getElementById('plus')
let countss=document.getElementById('countss')

let i=0
plus.addEventListener("click",() => {
    countss.innerText=i
    i++
})
moins.addEventListener("click",() => {
    countss.innerText=i
    i--
})



let email=document.getElementById('email')
let name=document.getElementById('name')
let btnsubmit=document.getElementById('btnsubmit')

btnsubmit.addEventListener("click",(event) => {
    event.preventDefault();

    if (email.value===""||name.value==="") {
        alert("empty")
    } else {
        console.log("good")
    }
})
