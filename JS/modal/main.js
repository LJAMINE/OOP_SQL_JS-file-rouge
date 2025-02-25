let showme = document.getElementById("show");
let closeme = document.getElementById("close");
let modal = document.querySelector(".modal");

showme.addEventListener("click", () => {
  modal.style.display = "block";
});
closeme.addEventListener("click", () => {
  modal.style.display = "none";
});

let prix1 = document.getElementById("prix1").innerText;
let btn1 = document.getElementById("btn1");
let stock = document.getElementById("stock");

btn1.addEventListener("click", () => {
  console.log(prix1);
  let li = document.createElement("li");
  li.innerText = prix1;
  stock.appendChild(li);
});

let prix2 = document.getElementById("prix2").innerText;
let btn2 = document.getElementById("btn2");
let stock2 = document.getElementById("stock2");

btn2.addEventListener("click", () => {
  console.log(prix2);
  let li = document.createElement("li");
  li.innerText = prix2;
  stock2.appendChild(li);
});


let total = document.getElementById("total");
let btnTotal = document.getElementById("btnTotal");


btnTotal.addEventListener("click",() => {
let prix1 = parseInt(document.getElementById("prix1").innerText);
let prix2 = parseInt(document.getElementById("prix2").innerText);

let p=document.createElement("p");

p.innerText=(prix1+prix2);

stock2.appendChild(p);
    

})