# Le protocole HTTP
Différents formats d'Uniform Resource Locator

**URL** : *"Chaîne de caractères uniforme qui permet d'identifier une ressource du World Wide Web"*

URL Générique
```bash
<protocol>://<fqdn/ip>:<port>/<path>
```

URL classique
```bash
#Pour la plupart des serveurs Web, par défaut, un "/" est équivalent à "index.html". Cette option est configurable.
http://example.com/
https://example.com/index.html
https://192.168.1.254:8080/admin.html
http://sw.lan.local/
```

URL avec paramètre
```bash
#On demande au serveur de nous retourner le résultat du script nommé "index.php".
http://example.com/index.php?action=testvariable
```