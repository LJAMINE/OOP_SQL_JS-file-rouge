let submit = document.getElementById("submit");
let name = document.getElementById("name");
let email = document.getElementById("email");
let password = document.getElementById("password");
let tbody = document.getElementById("tbody");

isupdatemode = false;
rowToUpdate = null;
submit.addEventListener("click", (event) => {
  event.preventDefault();
  if (name.value === "" || email.value === "" || password.value === "") {
    alert("empty fields");
    return;
  }

  if (isupdatemode && rowToUpdate) {
    rowToUpdate.cells[0].innerText = name.value;
    rowToUpdate.cells[1].innerText = email.value;
    rowToUpdate.cells[2].innerText = password.value;
  } else {
    let row = document.createElement("tr");

    let ceil0 = row.insertCell(0);
    ceil0.innerText = name.value;

    let ceil1 = row.insertCell(1);
    ceil1.innerText = email.value;

    let ceil2 = row.insertCell(2);
    ceil2.innerText = password.value;

    let btndelete = document.createElement("button");
    btndelete.innerText = "delete";
    let ceil3 = row.insertCell(3);
    ceil3.appendChild(btndelete);

    let btnupdate = document.createElement("button");
    btnupdate.innerText = "update";
    let ceil4 = row.insertCell(4);
    ceil4.appendChild(btnupdate);

    tbody.appendChild(row);

    btndelete.addEventListener("click", () => {
      tbody.removeChild(row);
    });

    btnupdate.addEventListener("click", () => {
      isupdatemode = true;
      rowToUpdate = row;

      name.value = ceil0.innerText;
      email.value = ceil1.innerText;
      password.value = ceil2.innerText;
      console.log(ceil0);
    });

    if (!rowToUpdate) {
      name.value = "";
      email.value = "";
      password.value = "";
    }
  }
});
