let names=document.getElementById('names');
let btn=document.getElementById('btn');

btn.addEventListener('click',() => {

    if (names.value.length<5) {
        alert('bad');
    } else {
        alert("good")
    }

})


let newclass=document.getElementById('newclass')
let clickhere=document.getElementById('clickhere')

clickhere.addEventListener('click',() => {
    newclass.classList.add('highlight')
})


