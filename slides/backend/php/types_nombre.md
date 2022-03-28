# PHP
Types de variables : Entier, Flottant

<div grid="~ cols-2 gap-2" m="-t-2">
    <div>
        <h3>Entier</h3>
        <p> Définissable en base 8 (octal), 10 (décimal) ou 16 (hexadécimal), négatif ou positif</p>
        <p>Définition octale : précéder le nombre de 0
        <br/>Ex : 0123 équivalent à 83 en décimal</p>
        <p>Définition hexadécimale : précéder le nombre de 0x
        <br/>Ex : 0x1A équivalent à 26 en décimal</p>
        <p>Capacité : entier signé de 32 ou 64 bits (selon l'OS)</p>
        <p>Pas de division entière  : 1/2 renvoie 0.5 et pas 0</p>
    </div>
    <div>
        <h3>Nombre à virgule flottante</h3>
        <ul>
            <li>Exemple : 1.23</li>
            <li>Précision : <code class="language-php">floor((0.1+0.7)*10)</code>retourne 7</li>
            <li>Faire attention aux comparaisons de flottants</li>
        </ul> 
    </div>
</div>


<div style="position: absolute; top: 300px; right: 80px; width: 400px;">

```php
php > echo floor((0.1+0.7)*10);
7
php > echo 5/2;
2.5
php > print intval(0.4);
0
php >
```

</div>