# HTML
Règles d'imbrications

Les balises doivent être imperativement fermées pour que le code soit valide.

```html
<!-- exemple valide -->
<div>
  <article>
    <h3>Titre #1</h3>
    <p>Super text qui veut dire quelque chose</p>
  </article>
  ....
</div>
```

```html
<!-- exemple invalide -->
<p>Super text qui <strong>veut dire quelque chose</p></strong>
```

Élément sans contenu 
```html
<img src="https://source.unsplash.com/collection/94734566/1920x1080" />
```