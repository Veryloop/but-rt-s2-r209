# PHP
Programmation orientée objet

Une <kbd>class</kbd> définit un <kbd>objet</kbd>, elle possède un/des attribut(s) et une/des méthode(s).

Lorsqu'un objet est créé en utilisant <kbd>new</kbd> on peut le manipuler comme n'importe quel type PHP.

Utiliser une classe :
```php
//Création d'une instance de la classe PDO. La classe nous est fournie par PHP
$pdo = new PDO('mysql:host=127.0.0.1;dbname=td', 'root', 'root');

//Appel de la méthode "query" sur l'objet précédemment instancié.
$reponse = $pdo->query('SELECT * FROM users");
```