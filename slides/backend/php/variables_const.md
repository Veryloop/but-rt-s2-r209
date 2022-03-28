# PHP
Variables constantes

### Constante

- Une constante est un identifiant (un nom) qui représente une valeur simple
- Cette valeur ne peut être ni modifiée, ni détruite durant l'exécution du script
- Le nom d'une constante est sensible à la casse, par défaut
- Ne peut contenir que des données scalaires
- Accès directement par le nom (pas $nom) ou par la fonction constant()

```php
<?php
define("CONSTANTE", "test");

#Variables définies automatiquement par PHP
__LINE__ # La ligne courante dans le fichier
__FILE__ # Le chemin complet et le nom du fichier courant
__FUNCTION__ # Le nom de la fonction
__CLASS__ # Le nom de la classe courante
__METHOD__ # Le nom de la méthode courante
```