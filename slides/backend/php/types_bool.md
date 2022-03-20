# PHP
Type de variable : Booléen

Un booléen est insensible à la casse : true, TRUE, false, FALSE

<div grid="~ cols-2 gap-2" m="-t-2">
    <div>
        <p>Liste exhaustive des valeurs de FALSE :</p>
        <ul> 
            <li>FALSE</li>
            <li>Entier 0</li>
            <li>Flottant 0.0</li>
            <li>Chaîne vide "" et chaîne "0"</li>
            <li>Tableau vide</li>
            <li>Objet vide</li>
            <li>Null</li>
        </ul>
    </div>
    <div>
        <p>Liste des valeurs de TRUE</p>
         <ul> 
            <li>Tout le reste</li>
        </ul>
    </div>
</div>


<div style="position: absolute; top: 300px; right: 80px; width: 400px;">

```php
php > print [] == false;
1
php > print '0' == false;
1
```

</div>