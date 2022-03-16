# Introduction au web dynamique
Communiquer avec une base de données en PHP

<mdi-desktop-tower-monitor class="text-7xl text-gray" style="position: absolute; top: 140px;"/>
<p style="position: absolute; top: 220px; left: 35px;">Navigateur web</p>

<arrow x1="180" y1="170" x2="530" y2="170" class="text-gray" width="2"/>
<arrow x1="530" y1="200" x2="180" y2="200" class="text-gray" width="2"/>

<mdi-server class="text-7xl text-gray" style="position: absolute; top: 140px; right: 310px;" />
<p style="position: absolute; top: 220px; right: 300px;">Serveur web</p>

<arrow x1="700" y1="170" x2="790" y2="170" class="text-gray" width="2"/>
<arrow x1="790" y1="200" x2="700" y2="200" class="text-gray" width="2"/>

<mdi-language-php class="text-7xl text-gray" style="position: absolute; top: 140px; right: 70px;" />
<p style="position: absolute; top: 220px; right: 60px;">Serveur PHP</p>

<arrow x1="880" y1="270" x2="880" y2="360" class="text-gray" width="2"/>
<arrow x1="850" y1="360" x2="850" y2="270" class="text-gray" width="2"/>

<mdi-database class="text-7xl text-gray" style="position: absolute; top: 370px; right: 70px;" />
<p style="position: absolute; top: 450px; right: 45px;">Serveur MariaDB</p>

<div style="margin-top: 170px; margin-right:150px;">


```php
<body>
    <h1>Titre <?php echo("hello"); ?></h1>
    <p>Votre prénom est :
    <?php
        $mysqli = mysqli_connect("192.168.1.23", "user", "password", "database");
        $res = mysqli_query($mysqli, "SELECT username AS name FROM users");
        $row = mysqli_fetch_assoc($res);
        echo $row['name'];
    ?>
    </p>
</body>
```

</div>