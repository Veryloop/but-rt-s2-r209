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

#### 2 cours (2h)
#### 4 travaux dirigés (6h)
#### 3 travaux pratiques (9h)
#### Évaluation : présentation de votre projet

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

<div class="flex" style="padding-top: 30px">
  <ul>
    <li>Application</li>
    <li>Présentation</li>
    <li>Session</li>
    <li>Transport</li>
    <li>Réseau</li>
    <li>Liaison de données</li>
    <li>Pysique</li>
  </ul>
  <ul style="width: 190px;">
    <li style="height: 133px;">
      <div>HTTP</div>
      <div style="transform: translateY(-10px);">----------------------</div>
      <div style="transform: translateY(5px);">----------------------</div>
      <div>TLS (si HTTPS)</div>
    </li>
  </ul>
  <ul>
    <li style="height: 133px; padding-top: 50px;">Application</li>
    <li>Transport</li>
    <li>Réseau</li>
    <li>Liaison de données</li>
    <li>Pysique</li>
  </ul> 
</div>

<style>
  .flex{
    margin: auto;
    padding: 0;
    width: 700px;
    justify-content: space-between;
  }
  li{
    border: solid 1px;
    border-radius: 5px;
    margin: 0 0 10px 0;
    margin-left: 0 !important;
    text-align: center;
    padding: 0 0 4px 0;
    padding-left: 10px  !important;
    padding-right: 10px  !important;
    list-style: none;
  }
  ul{
    padding: 0;
    margin: 0;
  }
</style>
---

# Le protocole HTTP

HyperText Transfer Protocol

- Protocole Client-Serveur consue pour le format HTML afin de créer le World Wide Web
- Créer pour ameliorer FTP
- Version HTTP/0.9 : 1990, pas d'entête et une seule methode, GET
- Version HTTP/1 en 1996, introduit la notion d'entête et ajoute 2 méthodes, HEAD, POST
- TCP/80 et TCP/443

<div style="height: 30px"></div>

___Entête d'une requète HTTP/1___
```ts {0|1|2-4|all}
GET /page.html HTTP/1.0
Host: example.com
Referer: http://example.com/
User-Agent: Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.8.1.1) Gecko/20060601 Firefox/2.0.0.1 (Ubuntu-edgy)
```

<img src="images/www.png" width="100" style="position: absolute; top: 110px; right: 80px;"/>

---

# Format d'une requète HTTP
Différents formats d'Uniform Resource Locator

**URL** : *"Chaîne de caractères uniforme qui permet d'identifier une ressource du World Wide Web"*

URL classique
```bash
#Pour la plus par des serveurs Web, par defaut, un "/" est équivalent à "index.html". Cette options est configurable.
http://example.com/
http://example.com/index.html
```

URL avec paramètre
```bash
#On demande au serveur de nous retourner le résultat du script nommé "index.php".
http://example.com/index.php?action=testvariable
```

---

# Requète HTTP GET

<mdi-desktop-tower-monitor class="text-4xl text-black-100"/>
<arrow x1="160" y1="120" x2="800" y2="120" class="text-black-100" width="3"/>
<mdi-server style="position: absolute; top: 90px; right: 70px;" class="text-4xl text-black-100"/>

```ts
GET /page.html HTTP/1.0
Host: example.com
User-Agent: Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.8.1.1) Gecko/20060601 Firefox/2.0.0.1 (Ubuntu-edgy)
```

<div style="height: 20px"></div>


<mdi-desktop-tower-monitor class="text-4xl text-black-100"/>
<arrow x1="800" y1="235" x2="160" y2="235"  class="text-black-100"  width="3"/>
<mdi-server style="position: absolute; top: 210px; right: 70px;" class="text-4xl text-black-100"/>

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

```sh
bob@laptop>curl https://www.perdu.com
```
```html
<html>
  <head>
    <title>Vous Etes Perdu ?</title>
  </head>
  <body>
    <h1>Perdu sur l'Internet ?</h1>
    <h2>Pas de panique, on va vous aider</h2>
    <strong>
      <pre>    * <----- vous &ecirc;tes ici</pre>
    </strong>
  </body>
</html>
```

---

# Clients HTTP : Navigateurs

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

# Langages Web backend


---
layout: center
class: text-center
---

# Initiation au développement Web

[GitHub](https://github.com/Veryloop/but-rt-s2-r209)
