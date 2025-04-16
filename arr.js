let arr = [
  { name: "amine", notes: [1, 2, 4, 5] },
  { name: "zair", notes: [14, 5] },
  { name: "said", notes: [1, 2, 4, 4] },
  { name: "bro", notes: [2, 4, 5] },
];

let somme = 0;
let newarray = [];



arr.forEach((element) => {
  for (let i = 0; i < element.notes.length; i++) {
    somme += element.notes[i];
  }

  newarray.push(somme / element.notes.length);
  console.log(somme / element.notes.length);
});

console.log(newarray);

for (let i = 0; i < newarray.length - 1; i++) {
  for (let j = 0; j < newarray.length - i - 1; j++) {
    let swap;
    if (newarray[j] > newarray[j + 1]) {
      swap = newarray[j];
      newarray[j] = newarray[j + 1];
      newarray[j + 1] = swap;
    }
  }
}

console.log(newarray);
