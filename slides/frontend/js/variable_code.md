# JavaScript
Les variables

<div grid="~ cols-2 gap-2" m="-t-2">
  <div>

```js
//Non typé
let a = 30
let une_variable = "hello"

//Réassignation
a = 2
a = "Je suis une chaine maintenant !"

//Constante
const demo = [true, 10, 'Marc']
const API = 'https://api.rt.fr/'

//Objet
let eleve = {
   clef: 'valeur',
   nom: 'Foo',
   age: 27,
   notes: [10, 4, 18] 
}
```

</div>
<div>

```js
undefined // variable ou valeur inexistante
null // absence intentionnelle de valeur
NaN // 'not a number'






console.log(demo[0]) // true
console.log(API) // https://api.rt.fr/




console.log(eleve.nom) // Foo
console.log(eleve.notes) // [10, 4, 18]
console.log(eleve.notes[1]) // 4
console.log(eleve.age + 10) // 37
```

</div>

</div>