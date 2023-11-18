"use strict";
// const testArr = ["good",5,true,"great"];
const scoreArr = [70, 89, 77];
for (const [i, el] of scoreArr.entries()) {
  console.log(`${i + 1} : ${el}`);
}

console.log([...scoreArr.entries()]);

scoreArr.forEach(function (el, i, arr) {
  console.log(`${i + 1} : ${el}`);
});
