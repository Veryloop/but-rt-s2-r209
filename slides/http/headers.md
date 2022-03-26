# Le protocole HTTP
Les Headers courants

Requête HTTP
```http
GET /page.html HTTP/1.0
Host: example.com
Referer: http://example.com/login.html
```

- Content-Encoding : Type d'encodage utilisé pour compresser le corp de la réponse. Ex: gzip
- Content-Length : Indique la taille en octets (base10) du corps de la réponse.
- Accept : Contient les MIME types que le client sera capable d'interpréter. Ex: text/html
- Cookie : Clés et valeurs des cookies envoyé par le client au serveur. Ex: PHPSID=dmlksdmlk;
- Set-Cookie : Contient des cookies envoyés par le serveur qui doivent être sauvegardés par le client.
- Origin : Indique la provenance de la requête. Ex: https://www.google.fr/
- Host : Contient le FQDN du serveur qu'on veux intérroger. Ex: www.google.fr