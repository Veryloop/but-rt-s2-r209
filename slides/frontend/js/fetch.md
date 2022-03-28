# JavaScript
Intérroger un Web Service

JavaScript nous propose un client HTTP unifié pour appéler des Web Service depuis une page web.

<kbd>fetch</kbd>

```js
const reponse = await fetch("https://www.prevision-meteo.ch/services/json/lat=46.8354269lng=0.5354658")
const body = await reponse.json()
let couche_de_soleil = body.city_info.sunset
console.log(couche_de_soleil)
//20:22
```