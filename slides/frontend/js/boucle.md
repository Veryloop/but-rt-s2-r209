# JavaScript
Les boucles

<kbd>while</kbd>
```js
let i = 0 
while (i < 3) {
    console.log("Je compte " + i); i++
}
```

<kbd>for</kbd>
```js
for (let i = 0; i < 3; i++) {
    console.log("Je compte " + i)
}
```


<kbd>for...in</kbd>
```js
const object = { a: 1, b: 2, c: 3 };
for (const key in object) {
  console.log(`${key}: ${object[key]}`);
}
```