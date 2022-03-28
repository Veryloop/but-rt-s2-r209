# Web Service
Définition

Moyen d'échanger des informations brutes entre deux machines d'un réseau.

"Tous les services web sont des API mais toutes les API ne sont pas des services web."

Un Web Service communique en géneral avec des standards : 
- XML sur SOAP - HTTP - RPC
- JSON sur RPC - HTTP (REST / RESTfull)

Ex: https://www.prevision-meteo.ch/services/json/lat=46.8354269lng=0.5354658

```json
{
    "city_info": {
        "longitude":"0.5354658",
        "sunrise":"07:43",
        "sunset":"20:22"
...
```