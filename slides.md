---
theme: seriph
background: https://source.unsplash.com/collection/94734566/1920x1080
class: text-center
highlighter: prism
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
src: slides/summary/sommaire.md
---

---
src: slides/summary/cours.md
---

---
src: slides/summary/td.md
---

---
src: slides/summary/tp.md
---


---
layout: center
---
# HTTP

---
src: slides/http/osi.md
---

---
src: slides/http/http.md
---

---
src: slides/http/url.md
---

---
src: slides/http/get.md
---

---
src: slides/http/methodes.md
---

---
src: slides/http/codes_retours.md
---

---
src: slides/http/codes_retours_zoom.md
---

---
src: slides/http/headers.md
---

---
src: slides/http/cookies.md
---

---
src: slides/http/clients_serveurs.md
---

---
src: slides/http/curl.md
---

---
src: slides/http/browser.md
---

---
clicks: 7
src: slides/http/flux_requete.md
---

---
src: slides/backend/ws/intro.md
---

---
layout: center
class: text-center
---
# Frontend
Interface utilisateur
---
src: slides/frontend/intro.md
---

---
src: slides/frontend/html/balises.md
---

---
src: slides/frontend/html/imbrications.md
---

---
src: slides/frontend/css/intro.md
---

---
src: slides/frontend/css/pure.md
---

---
src: slides/frontend/js/intro.md
---

---
src: slides/frontend/js/link.md
---

---
src: slides/frontend/js/variable.md
---

---
src: slides/frontend/js/variable_code.md
---

---
src: slides/frontend/js/condition.md
---

---
src: slides/frontend/js/condition_swc.md
---

---
src: slides/frontend/js/boucle.md
---

---
src: slides/frontend/js/fonction.md
---

---
src: slides/frontend/js/window.md
---

---
src: slides/frontend/js/window_2.md
---

---
src: slides/frontend/js/dom_def.md
---

---
src: slides/frontend/js/dom.md
---

---
src: slides/frontend/js/async.md
---

---
src: slides/frontend/js/fetch.md
---

---
layout: center
class: text-center
---
# Backend
La partie que l’utilisateur ne voit pas
---
src: slides/backend/intro.md
---

---
src: slides/backend/php_runtime.md
---

---
src: slides/backend/php_bdd.md
---

---
src: slides/backend/php/intro.md
---

---
src: slides/backend/php/communaute.md
---

---
src: slides/backend/php/fonctionnalites.md
---

---
src: slides/backend/php/variables.md
---

---
src: slides/backend/php/variables_const.md
---

---
src: slides/backend/php/types_liste.md
---

---
src: slides/backend/php/types_bool.md
---

---
src: slides/backend/php/types_nombre.md
---

---
src: slides/backend/php/types_string.md
---

---
src: slides/backend/php/types_array.md
---

---
src: slides/backend/php/types_other.md
---

---
src: slides/backend/php/operateur.md
---

---
src: slides/backend/php/operateur_comp.md
---

---
src: slides/backend/php/fonctions.md
---

---
src: slides/backend/php/if.md
---

---
src: slides/backend/php/switch.md
---

---
src: slides/backend/php/for.md
---

---
src: slides/backend/php/shell.md
---

---
src: slides/backend/php/script.md
---

---
src: slides/backend/php/php_in_html.md
---

---
src: slides/backend/php/require.md
---

---
src: slides/backend/php/session.md
---

---
src: slides/backend/php/ws.md
---

---
src: slides/backend/php/form_1.md
---

---
src: slides/backend/php/form_2.md
---

---
src: slides/backend/php/form_3.md
---

---
src: slides/backend/php/poo.md
---

---
src: slides/backend/php/poo_2.md
---

---
src: slides/backend/php/pdo_conn.md
---

---
src: slides/backend/php/pdo_select.md
---

---
src: slides/backend/php/pdo_insert.md
---

---
src: slides/backend/php/pdo_update.md
---

---
src: slides/backend/php/pdo_delete.md
---

---
layout: center
---
# Sécurité

---

# Sensibilisation à la sécurité du Web : XSS

---

# Sensibilisation à la sécurité du Web : SQLi

---
layout: center
---
# TD

---

# TD1 : Mise en place de l'environnement
VM / VSCode / Firefox

- Accès VM : https://195.220.217.51:8006/
- Documentation PureCSS : https://purecss.io/

Changer le propriétaire du répertoire <kbd>/var/www/html</kbd>
```sh
sudo chown -R etudiant:etudiant /var/www/html
```

---

# TD1 : Développement de l'interface Web
<img class="mx-auto" src="/td/td1/screen/users.png" width="770"/>

---

# TD1 : Développement de l'interface Web
<img class="mx-auto" src="/td/td1/screen/equip.png" width="770"/>

---

# TD1 : Développement de l'interface Web
<img class="mx-auto" src="/td/td1/screen/add.png" width="770"/>

---

# TD1 : Développement de l'interface Web
<img class="mx-auto" src="/td/td1/screen/conf.png" width="770"/>

---

# TD1 : Développement de l'interface Web
<img class="mx-auto" src="/td/td1/screen/login.png" width="770"/>

---

# TD2 : 

- Charger automatiquement l'ip d'un switch depuis le JavaScript (/add_equipment.html)
  (Slide 38/39/40)

- Utiliser PHP pour éviter les répétitions de code HTML
  (Slide 65)

- Faire fonctionner le formulaire de login avec login/mdp "en dure" et utiliser la session
  (Slide 64)

---

# TD3 : 
Utiliser une base de données

- Configurer la base de données MySQL
  - Création de la 'database'
  - Création des deux tables : users / switchs
- Créer deux scripts PHP pour ajouter et supprimer un utilisateur
  - Le nom de l'utilisateur est passé en arguments du script
  - Le script d'ajout doit demander le mot de passe grâce à une question en ligne de commande
- Utiliser les informations de la base de donnée dans les pages web
  - Vérification du login/password provenant du formulaire de login
  - Lister les utilisateurs dans le tableau HTML

---

# TD3 : 
Utiliser une base de données

Sur le shell Linux de la VM

```shell
#Se connecter à la base de données de votre VM
mysql -u root -p #password -> mysqlrt
```

Dans la console SQL

```sql
-- Lister les bases de données existantes
show databases;
-- Créer une nouvelle base pour notre site Web
create database tdweb;
-- Créer l'utilisateur utilisé pour PHP
create user 'php'@'localhost' identified by 'web';
grant all privileges on tdweb.* to 'php'@'localhost';
-- Sélectionner notre base pour la configurer
use tdweb;
```

---

# TD3 : 
Utiliser une base de données

Schéma de la base
```sql
CREATE TABLE `users` (
	`username` VARCHAR(20) NOT NULL,
	`password` VARCHAR(20) NOT NULL,
  `sip` VARCHAR(100) NOT NULL,
	`role` VARCHAR(20) NOT NULL,
	PRIMARY KEY (`username`)
) ENGINE=InnoDB;

CREATE TABLE `switchs` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`ref` VARCHAR(20) NOT NULL,
	`warranty` DATE NOT NULL,
	`ip` VARCHAR(20) NOT NULL,
	`configuration` LONGTEXT NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB;
```

---

# Installer les outils de développement (Debian/Ubuntu)

```shell
sudo apt update
sudo apt -y install apache2
sudo apt -y install mariadb-server
sudo apt -y install php libapache2-mod-php php-mysql
```

---
layout: center
class: text-center
---

# Initiation au développement Web

[GitHub](https://github.com/Veryloop/but-rt-s2-r209)

Sources: 
- https://www.php.net
- https://developer.mozilla.org
- https://grafikart.fr
