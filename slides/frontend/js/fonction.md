# JavaScript
Les fonctions

Fonction nommé
```js
function carre(nombre) {
  return nombre * nombre;
}
carre(3) // 9
```

Fonction anonyme dans un variable
```js
let saluer = function (nom) {
    return "Salut " + nom
}
saluer("bob") // Salut bob
let voiture = {
    couleur: 'bleu',
    bruit: function(){
        return "VROOOOM!"
    }
}
voiture.bruit() //  VROOOOM!
```
