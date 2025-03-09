let name=document.getElementById('name')
let email=document.getElementById('email')
let password=document.getElementById('password')
let btn=document.getElementById('btn')

btn.addEventListener('click',(event) => {
    event.preventDefault();
    if (name.value===""|| email.value===""||password==="" ) {
        alert("empty")
    } else {
        alert("good")
        
    }
})