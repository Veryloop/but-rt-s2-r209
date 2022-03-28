# JavaScript
L'objet Window

Le navigateur donne accès à de nouveaux objets qui permettent d'intéragir avec lui même ou avec l'utilisateur.
L'objet window permet de récupérer des informations utiles comme la taille de la fenêtre du navigateur.

```js
window.innerWidth // largeur de la fenêtre
window.innerHeight // hauteur de la fenêtre
```

Gérer le temps
```js
const t = window.setInterval(function () {
     // Ce code sera appelé toutes les secondes (1000ms)
}, 1000)
window.clearInterval(t) //penser à nettoyer les timers que vous n'utilisez plus

window.setTimeout(function () {
     // Ce code sera exécuté une fois au bout de 3 secondes (3000ms)
}, 3000)
```