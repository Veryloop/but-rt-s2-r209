# PHP
Exposer un Web Service

PHP peut être utilisé pour créer des web services et renvoyer des informations au format JSON.

<kbd>time.php</kbd>
```php
<?php
$data = [
    "timestamp" => time(), 
    "name" => "serveur de prod"
];
header("Content-Type: application/json");
echo json_encode($data);
exit();
?>
```
<kbd>http://prod.server.local/time.php</kbd>
```json
{
    "timestamp": 1649095132,
    "name":"serveur de prod"
}
```