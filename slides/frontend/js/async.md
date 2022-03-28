# JavaScript
L'asynchronisme

Le JavaScript est, par défaut, mono-thread mais asynchrone. Cela signifie que les instructions ne sont PAS exécutées les unes à la suite des autres.

<div grid="~ cols-2 gap-2" m="-t-2"><div>


```js
setTimeout(function() {
    console.log("Je suis là")
}, 5000);
console.log("Où es-tu ?");
//Où es-tu ?
//Je suis là
```

</div><div>

```js
fetch('https://api.github.com/users/MaximeChartier/orgs')
//Promise { <state>: "pending" }
```

</div></div>


Pour attendre une fonction <kbd>async</kbd> nous devons utiliser le mot réservé <kbd>await</kbd>

```js
await fetch('https://api.github.com/users/MaximeChartier/orgs')
//Response { type: "cors", url: "https://api.github.com/users/MaximeChartier/orgs", redirected: false, status: 200,...
```