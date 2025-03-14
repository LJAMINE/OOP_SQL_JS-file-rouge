let btn = document.getElementById("btn");
let name = document.getElementById("name");
let email = document.getElementById("email");
let password = document.getElementById("password");
var stock = document.getElementById("stock");

btn.addEventListener("click", (event) => {
  if (name.value === "" || email === "" || password === "") {
    alert("empty fields");
  } else {
    event.preventDefault();

    let row = stock.insertRow(0);

    var ceil1 = row.insertCell(0);
    ceil1.innerText = name.value;
    row.appendChild(ceil1);

    var ceil2 = row.insertCell(1);
    ceil2.innerText = email.value;
    row.appendChild(ceil2);

    var ceil3 = row.insertCell(2);
    ceil3.innerText = password.value;
    row.appendChild(ceil3);

    var ceil4 = row.insertCell(3);
    let btndelete = document.createElement("button");
    btndelete.innerText = "delete";

    btndelete.addEventListener("click", () => {
      stock.removeChild(row);
    });

    ceil4.appendChild(btndelete);
    row.appendChild(ceil4);

    var ceil5 = row.insertCell(4);
    let btnupdate = document.createElement("button");
    btnupdate.innerText = "update";

    btnupdate.addEventListener("click", () => {
      console.log("good");

      name.value = ceil1.innerText;
      console.log(ceil1);

      email.value = ceil2.innerText;
      password.value = ceil3.innerText;


      btn.addEventListener("click",() => {
        ceil1.innerText=name.value
        ceil2.innerText=email.value
        ceil3.innerText=password.value
      })
    });
    ceil5.appendChild(btnupdate);
    row.appendChild(ceil5);

    stock.appendChild(row);

    name.value = "";
    email.value = "";
    password.value = "";
  }
});
