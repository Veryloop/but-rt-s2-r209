# PHP
Connexion à une de base donnée SQL: PDO

PHP Document Object (PDO) est une classe fournie par le langage qui nous permet de communiquer avec des bases de données.

Il fournit une interface de programmation (API) simple orientée objet. Cette interface permet aux développeurs de ne pas se soucier du type de SGBD utilisé : MariaDB, MySQL, PostgreSQL, SQlite, Oracle...

```php
//URI générique
'<type_de_base>:host=<ip_du_sgbd>;dbname=<nom_de_la_base>'

//Pour MariaDB et MySQL
'mysql:host=127.0.0.1;dbname=td'

//Pour PostgreSQL
'pgsql:host=hostname;port=5432;dbname=db'

//Pour Sqlite
'sqlite:../database.sqlite'

$pdo = new PDO('mysql:host=127.0.0.1;dbname=td', 'root', 'root');
```