# PHP
Utiliser le shell PHP

```ts
max@rick~> php -a
Interactive shell

php >
```

```php
php > var_dump(scandir('.'));
array(5) {
  [0]=>
  string(1) "."
  [1]=>
  string(2) ".."
  [2]=>
  string(3) "dir"
  [3]=>
  string(4) "dir1"
  [4]=>
  string(4) "dir2"
}
php >
```