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

<div style="height: 50px"></div>

___Entête d'une requète HTTP/1___
```ts {0|1|2-4|all}
GET /page.html HTTP/1.0
Host: example.com
Referer: http://example.com/
User-Agent: Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.8.1.1) Gecko/20060601 Firefox/2.0.0.1 (Ubuntu-edgy)
```

<img src="images/www.png" width="100" style="position: absolute; top: 110px; right: 80px;"/>

---

# Requète HTTP GET

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

# Clients et serveurs Web

<div grid="~ cols-2 gap-2" m="-t-2">

  <div>
    <h4>Clients</h4>

      - cURL
      - Firefox
      - Chrome    
  </div>

  <div>
    <h4>Serveurs</h4>  
  
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

Mettre des commentaires de le code
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

# Échanges client-serveur au chargement d'un site web


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

<mdi-desktop-tower-monitor class="text-7xl text-gray-200" style="position: absolute; top: 140px;"/>

<arrow x1="180" y1="170" x2="530" y2="170" class="text-gray-200" width="2"/>
<arrow x1="530" y1="200" x2="180" y2="200" class="text-gray-200" width="2"/>

<mdi-server class="text-7xl text-gray-200" style="position: absolute; top: 140px; right: 300px;" />

<arrow x1="700" y1="170" x2="790" y2="170" class="text-gray-200" width="2"/>
<arrow x1="790" y1="200" x2="700" y2="200" class="text-gray-200" width="2"/>

<mdi-language-php class="text-7xl text-gray-200" style="position: absolute; top: 140px; right: 70px;" />


---

# PHP

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
