
# Introduction au web dynamique
Comprendre où est exécuté PHP

<mdi-desktop-tower-monitor class="text-7xl text-gray" style="position: absolute; top: 140px;"/>
<p style="position: absolute; top: 220px; left: 35px;">Navigateur web</p>

<arrow x1="180" y1="170" x2="530" y2="170" class="text-gray" width="2"/>
<arrow x1="530" y1="200" x2="180" y2="200" class="text-gray" width="2"/>

<mdi-server class="text-7xl text-gray" style="position: absolute; top: 140px; right: 310px;" />
<p style="position: absolute; top: 220px; right: 300px;">Serveur web</p>

<arrow x1="700" y1="170" x2="790" y2="170" class="text-gray" width="2"/>
<arrow x1="790" y1="200" x2="700" y2="200" class="text-gray" width="2"/>

<mdi-language-php class="text-7xl text-gray" style="position: absolute; top: 140px; right: 70px;" />
<p style="position: absolute; top: 220px; right: 60px;">Serveur PHP</p>

<div style="position: absolute; margin-top: 140px; margin-left:530px;">

```php
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8"/>
    <title>Ma page de test</title>
    <link href="style.css" rel="stylesheet"/>
    <script src="app.js"></script>
  </head>
  <body>
    <h1>Titre <?php echo("hello"); ?></h1>
  </body>
</html>
```
  
</div>
<div style="position: absolute; margin-top: 140px;">
  
```html
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8"/>
    <title>Ma page de test</title>
    <link href="style.css" rel="stylesheet"/>
    <script src="app.js"></script>
  </head>
  <body>
    <h1>Titre hello</h1>
  </body>
</html>
```

</div>

