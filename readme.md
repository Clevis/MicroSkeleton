# Micro Skeleton

- `index.php` je v rootu (jednodušší deploy).
- Obsahuje jeden presenter (většinou stačí). Ten dědí od `UI\Presenteru`, takže umí všechny ty věci jako snippety, signály apod.
- Pokud web má jenom jeden presenter, pak doporučuju upravit metodu `formatTemplateFiles()`, aby šablony nemusely obsahovat název presenteru.

## Instalace Nette

Buďto přes composer `composer update` nebo do `vendors` nakopírovat `nette.min.php` a upravit require v `index.php`.
