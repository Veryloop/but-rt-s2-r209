# JavaScript
L'objet Window

Persister des informations sur le navigateur du client. Ex: le theme choisi

```js
localStorage.setItem('theme', 'dark');
let theme = localStorage.getItem('theme');
// Effacer tous les éléments
localStorage.clear()
```

Communiquer avec l'utilisateur 
```js
window.alert("Une erreur c'est produite") // Affiche une alerte 
let reponse = window.confirm('Sûr de sûr ?') // Affiche une fenêtre de confirmation et renvoie un booleen
var nom = window.prompt('Entrez votre nom') // Affiche un champs qui permet de rentrer une valeur
```