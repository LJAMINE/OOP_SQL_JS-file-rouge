let name = document.getElementById("name");
let btn = document.getElementById("btn");
let stock = document.getElementById("stock");

btn.addEventListener("click", () => {
  if (name.value == "") {
    alert();
  } else {
    let li = document.createElement("li");
    li.innerText = name.value;
    let deletebtn = document.createElement("button");
    deletebtn.innerText = "delete";

    deletebtn.addEventListener("click", () => {
      li.remove();
    });

    li.appendChild(deletebtn);

    stock.appendChild(li);
  }
});
