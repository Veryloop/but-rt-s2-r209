# JavaScript
L'asynchronisme

Le JavaScript est, par default, mono-thread mais asynchrone. Cela signie que les instructions ne sont PAS éxécuter les une a la suite des autres.

<div grid="~ cols-2 gap-2" m="-t-2"><div>


```js
setTimeout(function() {
    console.log("I'm here!")
}, 5000);
console.log("Where are you?");
//Where are you?
//I'm here!
```

</div><div>

```js
fetch('https://api.github.com/users/MaximeChartier/orgs')
//Promise { <state>: "pending" }
```

</div></div>


Pour attendre un fonction <kbd>async</kbd> nous devont utiliser le mot réservé <kbd>await</kbd>

```js
await fetch('https://api.github.com/users/MaximeChartier/orgs')
//Response { type: "cors", url: "https://api.github.com/users/MaximeChartier/orgs", redirected: false, status: 200,...
```