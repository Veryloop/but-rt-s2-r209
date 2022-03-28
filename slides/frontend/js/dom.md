# JavaScript
Le Document Object Model / DOM d'une page Web

L'objet <kbd>document</kbd> nous permet de récupérer, supprimer ou ajouter des éléments HTML et de les manipuler.

```js
window.document === document //true
```

Éléments
```js
let cont = document.getElementById('container') // Sélectionne l'élément avec l'id container
let liste1 = document.querySelector('.liste') // Sélectionne le premier élément correspondant au sélecteur CSS

cont.getAttribute('attribut') // Permet de récupérer la valeur d'un attribut
liste1.style // Permet de récupérer les styles associés à l'élément
liste1.style.fontSize = '24px' // Changer la taille de la police

let d = document.createElement('div') // Créer une div
document.body.appendChild(d) // Ajouter un élément à un autre
document.body.removeChild(d) // Supprimer un enfant 
```
