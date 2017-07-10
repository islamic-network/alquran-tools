# Quran Tools for Parsing Tajweed and Buck
These *PHP* tools are to be used with the <a href="https://alquran.cloud/api">AlQuran.cloud</a> and <a href="http://docs.globalquran.com/API:Data/Quran_List">GlobalQuran.com</a> APIs. They are made available so you may get the most out of the APIs.

# What do they contain
For now, a <a href="docs/tajweed.md">Tajweed</a> and <a href="docs/buck.md">Buck</a> helper. Each section is detailed below. 

# Install and Get Started
The tools add developer libraries you can use in your application. Install using composer:
```
composer require alquran/tools
```

### Tajweed Example
To get tajweed text to become legible, use:
```php
<?php
require_once('vendor/autoload.php');

$parser = new \AlQuranCloud\Tools\Parser\Tajweed();
$html = $parser->parse($text); // $text is the output text of a Verse from quran-tajweed edition. For example: http://api.alquran.cloud/ayah/24:35/quran-tajweed. Also see data/tajweed.json.
```

### Buckwalter Transliteration example
To get tajweed text to become legible, use:
```php
<?php
require_once('vendor/autoload.php');

$parser = new \AlQuranCloud\Tools\Parser\Buck();
$arabic = $parser->toArabic($text); // $text is the output text of a Verse from quran-buck edition. For example: http://api.alquran.cloud/ayah/24:35/quran-buck.
```

## Tajweed Documentation

See <a href="docs/tajweed.md">Tajweed Documentation</a>.

## Buck (Buckwalter Transliteration) Documentation

See <a href="docs/buck.md">Buck Documentation</a>.

## Are there any known Issues
Yes, with the Tajweed parser. Webkit has a known bug that breaks Arabic with inline tags. There is an experimental fix in the Tajweed Parse class for this using the Zero Width Joiner (&zwj;), but it still needs some work. I've manually tried this on some Ayahs and ZWJ is not smart enough to parse all the characters and join them properly, so this is not ideal. See See https://stackoverflow.com/questions/11155849/partially-colored-arabic-word-in-html
and https://bugs.webkit.org/show_bug.cgi?id=6148.

## Credits
Most of this code is created using logic from the Global Quran website and codebase.
