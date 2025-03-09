let btn =document.getElementById('btn')
let closeme =document.getElementById('closeme')
let modals =document.querySelector('.modals')

btn.addEventListener('click',() => {
  modals.style.display="block";
})

closeme.addEventListener('click',() => {
    modals.style.display="none";
  })


  let textt=document.getElementById('textt')

  textt.addEventListener("mouseover",() => {
    textt.textContent="bro";
  })