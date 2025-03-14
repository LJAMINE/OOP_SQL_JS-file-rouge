let arrayvalue = [];

async function fetchData() {
  try {
    let response = await fetch("https://jsonplaceholder.typicode.com/posts/");

    let data = await response.json();

    arrayvalue = data;

    // console.log(arrayvalue);

    let tbody = document.querySelector("tbody");

    data.forEach((element) => {
      let row = document.createElement("tr");
      row.innerHTML = `
            <td>${element.id}</td>
            <td>${element.title}</td>
            `;
      tbody.appendChild(row);
    });

    let search = document.querySelector("#search");

    search.addEventListener("input", () => {
      let val = search.value;

      let searchedmot = arrayvalue.filter((element) =>
        element.title.includes(val)
      );

      tbody.innerHTML = '';
      searchedmot.forEach((element) => {
        // console.log(element);

        let row = document.createElement("tr");
        row.innerHTML = `
                <td>${element.title}</td>
                `;
        tbody.appendChild(row);
      });
    });
    // console.log(data);
  } catch (error) {
    console.error(error);
  }
}

fetchData();
