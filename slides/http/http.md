# Le protocole HTTP

HyperText Transfer Protocol

- Protocole Client-Serveur conçu pour le format HTML afin de créer le World Wide Web
- Créer pour améliorer FTP
- Version HTTP/0.9 : 1990, pas d'entête et une seule methode, GET
- Version HTTP/1 en 1996, introduit la notion d'entête et ajoute 2 méthodes, HEAD, POST
- TCP/80 et TCP/443

Requête HTTP/1
```http {0|1|all}
GET /page.html HTTP/1.0
Host: example.com
Referer: http://example.com/
User-Agent: Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.8.1.1) Gecko/20060601 Firefox/2.0.0.1 (Ubuntu-edgy)
```
Réponse HTTP/1
```http {0|1|all}
HTTP/1.0 200 OK
Server: nginx
```

<img src="images/www.png" width="100" style="position: absolute; top: 110px; right: 80px;"/>