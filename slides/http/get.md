# Requête HTTP : GET

<mdi-desktop-tower-monitor class="text-4xl text-black-100"/>
<arrow x1="160" y1="120" x2="800" y2="120" class="text-black-100" width="3"/>
<mdi-server style="position: absolute; top: 90px; right: 70px;" class="text-4xl text-black-100"/>

```http
GET /page.html HTTP/1.0
Host: example.com
User-Agent: Mozilla/5.0 (X11; U; Linux i686; fr; rv:1.8.1.1) Gecko/20060601 Firefox/2.0.0.1 (Ubuntu-edgy)
```

<div style="height: 20px"></div>


<mdi-desktop-tower-monitor class="text-4xl text-black-100"/>
<arrow x1="800" y1="235" x2="160" y2="235"  class="text-black-100"  width="3"/>
<mdi-server style="position: absolute; top: 210px; right: 70px;" class="text-4xl text-black-100"/>

```http {0|all}
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