# JavaScript
L'objet Window

Le navigateur donne accès à de nouveaux objets qui permettent d'intéragir avec lui meme ou avec l'utilisateur.
L'objet window permet de récuperer des informations utiles comme la taille de la fenetre du navigateur.

```js
window.innerWidth // largeur de la fenètre
window.innerHeight // hauteur de la fenètre
```

Gérer le temps
```js
const t = window.setInterval(function () {
     // Ce code sera appellé toutes les secondes (1000ms)
}, 1000)
window.clearInterval(t) //penser a netoyer les timers que vous n'utilisé plus

window.setTimeout(function () {
     // Ce code sera éxécuté une fois au bout de 3 secondes (3000ms)
}, 3000)
```