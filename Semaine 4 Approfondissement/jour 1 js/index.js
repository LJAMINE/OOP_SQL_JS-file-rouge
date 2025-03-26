

// moyen

// Créer diviser(a, b) lançant une erreur si b === 0.
function diviser(a,b) {
 if (b===0) {
    throw new Error("diviser par 0");
    
 }

 return a/b;
}

 try {
    console.log(diviser(1,0))
 } catch (error) {
    console.error(error.message)
 }


 
 function valideemal(email) {
   const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; 

   if (!regex.test(email)) {
      throw new Error("email invalide");
      
   }
   return "email valide"


 }

 try {
   console.log(valideemal("emai@gmail.com"))
 } catch (error) {
   console.error(error)
 }



 async function fetching()  {
  
   try {
      let response = await fetch('');
      let data = await response.json()
      return data
   } catch (error) {
      console.error(error)
   }
   
}