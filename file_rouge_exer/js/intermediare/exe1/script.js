let name = document.getElementById("name");
let click = document.getElementById("click");
let stock = document.querySelector(".stock");

click.addEventListener("click", () => {
  if (name.value === "") {
    alert("empty");
  } else {
    let li = document.createElement("li");
    li.innerText = name.value;

    let deletebtn = document.createElement("button");
    deletebtn.innerText="delete"

    deletebtn.addEventListener('click',() => {
        stock.removeChild(li);
    })

    li.appendChild(deletebtn);



    stock.appendChild(li);

    name.value = "";
  }
});
