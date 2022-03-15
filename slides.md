---
theme: seriph
background: https://source.unsplash.com/collection/94734566/1920x1080
class: text-center
highlighter: shiki
lineNumbers: false
drawings:
  persist: false
title: BUT R&T R209
fonts:
  sans: 'Helvetica Neue,Robot'
  local: 'Helvetica Neue'
---

# Développement Web

Initiation au développement Web

<div class="abs-br m-6 flex gap-2">
  <a href="https://github.com/Veryloop/but-rt-s2-r209" target="_blank" alt="GitHub"
    class="text-xl icon-btn opacity-50 !border-none !hover:text-white">
    <carbon-logo-github />
  </a>
</div>
---

# Sommaire
Déroulement du module

- 2 cours (2h)
- 4 travaux dirigés (6h)
- 3 travaux pratiques (9h)
- Évaluation : présentation de votre projet


---

# Sommaire : Cours
Introduction au protocole HTTP et génératrion de page Web.

- Protocol HTTP
- Requète HTTP
- Clients et Serveur Web
- Service Web : API HTTP, REST, GraphQL
- Langage Frontend : HTML, CSS, JavaScript
- Utilisation d'un framework CSS
- Langage Backend : PHP
- Persistance des données : MariaDB
- Outil de versionning de code

---

# Sommaire : TD
Construction d'un outil web dédié aux métiers réseaux

Déroulement des séances :
- Mise en place de l'environnement et développement de l'interface Web
- Génération des pages en PHP et contrôle d'accès
- Sauvegarde des configurations et interrogation d'une API HTTP externe
- Sécurisation de l'outil et log pour la supervision

---

# Sommaire : TP
Sujet libre

Consignes :
- Langages : PHP 8.1 / JS (ES2020+) / HTML5 / CSS3
- CSS libre (possibilité d'utiliser un framework)
- Possibilité d'utiliser un framework PHP (Slim Framework / Symfony / Laravel)
- Interroger une API externe (Nominatim / ...)
- Fournir au moins 1 endpoint d'API HTTP
- Authentifier les utilisateurs "admin" de votre site web

---
layout: center
---
# HTTP

---

# Le protocole HTTP

HyperText Transfer Protocol

- Protocole Client-Serveur consue pour le format HTML afin de créer le World Wide Web
- Créer pour ameliorer FTP
- Version HTTP/0.9 : 1990, pas d'entête et une seule methode, GET
- Version HTTP/1 en 1996, introduit la notion d'entête et ajoute 2 méthodes, HEAD, POST

Requète HTTP/1
```ts {0|1|all}
GET /page.html HTTP/1.0
Host: example.com
Referer: http://example.com/
User-Agent: Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.8.1.1) Gecko/20060601 Firefox/2.0.0.1 (Ubuntu-edgy)
```
Réponse HTTP/1
```ts {0|1|all}
HTTP/1.0 200 OK
Server: nginx
```

<img src="images/www.png" width="100" style="position: absolute; top: 110px; right: 80px;"/>


---

# Le protocole HTTP
Codes de retour

Les codes retour sont envoyé par le seveur en reponse a un client HTTP.<br/>
Ils donnent des indications sur l'etat de le réponse.
|||
|-|-|
|1xx|Information|
|2xx|Succès|
|3xx|Redirection|
|4xx|Erreur du client HTTP|
|5xx|Erreur du serveur / du serveur d'application|

[Liste de tout les codes retour](https://fr.wikipedia.org/wiki/Liste_des_codes_HTTP)

---

# Le protocole HTTP
Codes de retour

|||
|-|-|
|200|Ok|
|302||
|401||
|403||
|404||
|418||
|500||
|503||

---

# Le protocole HTTP
Methodes

|||
|-|-|
|GET|Demander une ressource|
|POST|Envoyer une ressource|
|PUT|Modifier une ressource|
|DELETE|Supprimer une ressource|
|PATCH|Modifier partielement une ressource|
|HEAD|Obtenir simplement les headers realtif a une ressource|

---

# Le protocole HTTP
Les Headers courrant

- Content-Encoding : The type of encoding used on the data. See HTTP compression.	Content-Encoding: gzip	Permanent	
- Content-Length : The length of the request body in octets (8-bit bytes).	Content-Length: 348
- Accept : Media type(s) that is/are acceptable for the response. See Content negotiation.	Accept: text/html
- Cookie : An HTTP cookie previously sent by the server with Set-Cookie (below).	Cookie: $Version=1; Skin=new;
- Set-Cookie : Contient des cookies envoyé par le serveur qui doivent etre sauvegarder par le client
- Origin : 
- Host : Host: en.wikipedia.org:8080
---

# Le protocole HTTP
Les Headers : Cookies

- Cookies technique (ex: session PHP)
- Cookies utilisés pour le tracage

---

# Requète HTTP : GET

<mdi-desktop-tower-monitor class="text-4xl text-green-100"/>
<arrow x1="160" y1="120" x2="800" y2="120" color="#564" width="3"/>
<mdi-server style="position: absolute; top: 90px; right: 70px;" class="text-4xl text-green-100"/>

```ts
GET /page.html HTTP/1.0
Host: example.com
User-Agent: Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.8.1.1) Gecko/20060601 Firefox/2.0.0.1 (Ubuntu-edgy)
```

<div style="height: 20px"></div>


<mdi-desktop-tower-monitor class="text-4xl text-green-100"/>
<arrow x1="800" y1="235" x2="160" y2="235" color="#564" width="3"/>
<mdi-server style="position: absolute; top: 210px; right: 70px;" class="text-4xl text-green-100"/>

```ts {0|all}
HTTP/1.0 200 OK
Server: nginx
```

```html {0|all}

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ma page de test</title>
  </head>
  <body>
    <img src="images/firefox-icon.png" alt="Mon image de test">
  </body>
</html>
```

<style>
  .slidev-code{
    margin: 0 !important;
    padding: 0!important;
  }
</style>

---

# Requète HTTP : POST

---

# Clients et serveurs Web

<div grid="~ cols-2 gap-2" m="-t-2">
  <div>
    <h3>Clients</h3>
    <p>On peux distinguer deux types de client Web :<br/>CLI, Graphique</p>
    <p style="text-align: justify;">Un client Web doit etre capable de contacter un serveur en utilisant 
    le proctole HTTP, si c'est un client graphique il doit etre en mesure
    d'ineterpreter les langagues frontend</p>
  </div>
  <div>
    <h3>Serveurs</h3>  
    <p style="text-align: justify;">Un serveur Web doit etre capable de repondre a des requetes HTTP</p>
  </div>
</div>


<div grid="~ cols-2 gap-2" m="-t-2">
  <div>

    Quelques clients connus :
      - wget
      - cURL
      - lynx
      - Firefox
      - Google Chrome
      - Microsoft Edge
      - Safary
  </div>
  <div>

    Quelques serveurs connus :
      - httpd
      - nginx
      - apache2
  </div>
</div>

---

# Clients HTTP : cURL

---

# Clients HTTP : Navigateurs

---
layout: center
---
# Frontend

---

# Langages Web frontend

-  __HTML__ : HyperText Markup Language.`Représenter le contenu d'une page web et sa structure`
- __CSS__ : Cascading Style Sheets. `Décrire l'apparence du contenu web`
- __JavaScript__ : Langage de programmation `Ajouter de l'interactivité à un site web`

<div class="space"></div>

___

1\. [Apprendre l'HTML - Grafikart](https://www.youtube.com/playlist?list=PLjwdMgw5TTLUeixVGPNl1uZNeJy4UY6qX)<br>
2\. [Découverte du CSS - Grafikart](https://www.youtube.com/playlist?list=PLjwdMgw5TTLVjTZQocrMwKicV5wsZlRpj)<br>
3\. [Histoire de JavaScript - cocadmin](https://www.youtube.com/watch?v=cdDPQkF7hRA)

<style>
.space{
  height: 240px;
  #background-color: #000;
}
</style>

---

# HTML
Représente le contenu de la page et sa structure

Liste non exhaustive des balises HTML natives
```html 
<head>, <h1>, <h2>, <title>, <body>, <header>, <footer>, <article>, <section>, <p>, <div>, <span>, <img>
```

Mettre des commentaires dans le code
```html
<!-- commentaires -->
```

---

# HTML
Règles d'imbrications

Les balises doivent être imperativement fermées pour que le code soit valide.

```html
<!-- exemple valide -->
<div>
  <article>
    <h3>Titre #1</h3>
    <p>Super text qui veux dire quelque chose</p>
  </article>
  ....
</div>
```

```html
<!-- exemple invalide -->
<p>Super text qui <strong>veux dire quelque chose</p></strong>
```

Élément sans contenu 
```html
<img src="https://source.unsplash.com/collection/94734566/1920x1080" />
```

---

# HTML

---

# CSS

---

# JS


---
layout: center
---
# Backend

---
clicks: 7
---

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

```sh
├╴public
│ ├╴index.html
│ ├╴style.css
│ └╴app.js
```

</div>

<div v-if="$slidev.nav.clicks==1" class="flux">

```ts
GET /index.html HTTP/1.0
Host: example.com
```

</div>

<div v-if="$slidev.nav.clicks==2" class="flux html">

```ts
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

```ts
GET /style.css HTTP/1.0
Host: example.com
```

</div>

<div v-if="$slidev.nav.clicks==4" class="flux">

```ts
HTTP/1.0 200 OK
Server: nginx

..<contenu du fichier css>..
```

</div>

<div v-if="$slidev.nav.clicks==5" class="flux">

```ts
GET /app.js HTTP/1.0
Host: example.com
```

</div>

<div v-if="$slidev.nav.clicks==6" class="flux">

```ts
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
---

# Introduction au web dynamique
Génération de code HTML par script serveur 

Lors d'un appel HTTP le serveur Web ne vas pas seulement se contenter de renvoyer un fichier statique.

Suivant la configuration du serveur web, les requètes HTTP vons declancher l'éxécution de scripts qui généreront du HTML à destination du client Web.

Liste non exhaustive des languages / frameworks utilisés pour créer des sites webs dynamiques.
- CGI
- Java / Spring
- PHP / Symfony
- Go / Gin
- C# / ASP.NET
- JS / NodeJS + Express

---

# Introduction au web dynamique
Configuration du serveur nginx pour executer des scripts PHP

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

<div style="margin-top: 170px;">

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

---

# Introduction au web dynamique
Communiquer avec une base de données

---

# PHP
Présentation

PHP : acronyme récursif pour PHP Hypertext Preprocessor
- Langage de scripts généraliste
- Open Source
- Spécialement conçu pour le développement d'applications web


---

# PHP
Fonctionnalités

<div class="space"></div>

___

1\. [Listes des fonctionnalitées de PHP](https://www.php.net/manual/fr/funcref.php)

<style>
.space{
  height: 240px;
  #background-color: #000;
}
</style>

---

# PHP
Ecrire un script 

---

# PHP
Utiliser une base de données SQL

---

# PHP
Gérer une session utilisateur

---

# PHP
Traiter une requete Web

---

# Introduction aux Web Service
Définition

---

# Introduction aux Web Service
Mise en place

---


# PHP
Créer un Web Service

---

# PHP
Programmation Orienté Objet (POO)

---

# PHP
Le moteur de templates Twig

---

# PHP
Générer un PDF

---
layout: center
---
# Sécurité

---

# Sensibilisation a la sécurité du Web : XSS

---

# Sensibilisation a la sécurité du Web : SQLi

---
layout: center
---
# TD

---

# TD1 : Mise en place de l'environnement

---

# TD1 : Développement de l'interface Web

---

# TD2 : 

---

# TD3 : 

---

# TD4 : 

---
layout: center
class: text-center
---

# Initiation au développement Web

[GitHub](https://github.com/Veryloop/but-rt-s2-r209)

Sources: 
https://www.php.net
