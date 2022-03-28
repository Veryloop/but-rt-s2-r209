# Échanges client-serveur au chargement d'un site web

<mdi-desktop-tower-monitor class="text-7xl text-gray" style="position: absolute; top: 90px;"/>
<p style="position: absolute; top: 170px; left: 35px;">Navigateur web

  <div v-click="2">
    Cache:
    <li>index.html</li>
    <li v-click="4">styles.css</li>
    <li v-click="6">app.js</li>
  </div>
</p>

<arrow x1="180" y1="120" x2="800" y2="120" class="text-gray" width="2"/>
<arrow x1="800" y1="140" x2="180" y2="140" class="text-gray" width="2"/>

<mdi-server class="text-7xl text-gray" style="position: absolute; top: 90px; right: 60px;" />
<p style="position: absolute; top: 170px; right: 55px;">Serveur web</p>
<div style="position: absolute; top: 220px; right: 40px;">

```shellsession
├╴public
│ ├╴index.html
│ ├╴style.css
│ └╴app.js
```

</div>

<div v-if="$slidev.nav.clicks==1" class="flux">

```http
GET /index.html HTTP/1.0
Host: example.com
```

</div>

<div v-if="$slidev.nav.clicks==2" class="flux">

```http
HTTP/1.0 200 OK
Server: nginx
```

</div>

<div v-if="$slidev.nav.clicks >= 2" class="flux html">

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
    <h1>Titre</h1>
  </body>
</html>
```

</div>

<div v-if="$slidev.nav.clicks==3" class="flux">

```http
GET /style.css HTTP/1.0
Host: example.com
```

</div>

<div v-if="$slidev.nav.clicks==4" class="flux">

```http
HTTP/1.0 200 OK
Server: nginx

..<contenu du fichier css>..
```

</div>

<div v-if="$slidev.nav.clicks==5" class="flux">

```http
GET /app.js HTTP/1.0
Host: example.com
```

</div>

<div v-if="$slidev.nav.clicks==6" class="flux">

```http
HTTP/1.0 200 OK
Server: nginx

..<contenu du fichier JavaScript>..
```

</div>

<style>
  .flux{
    position: absolute;
    top: 100px; 
    right: 50%; 
    transform: translatex(50%);
  }
  .html{
    top: 200px; 
  }
</style>