let name = document.getElementById('name');
let stock = document.querySelectorAll('.stock');  // Utiliser une classe pour les éléments de la liste


name.addEventListener('input',() => {
    
    let val=name.value.toLowerCase();

    stock.forEach(element => {
        let item=element.textContent.toLowerCase();

        if (item.includes(val)) {
            element.classList.remove('hidden')
        } else {
            element.classList.add('hidden')
            
        }
    });
})






// name.addEventListener('input', () => {
//     let searchTerm = name.value.toLowerCase();  

//     stock.forEach(element => {
//         let item = element.textContent.toLowerCase(); 

//         if (item.includes(searchTerm)) {
//             element.classList.remove('hidden'); 
//         } else {
//             element.classList.add('hidden'); 
//         }
//     });
// });
