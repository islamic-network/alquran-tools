# Quran Tools for Parsing Tajweed and Buck
These tools are to be used with the AlQuran.cloud and GlobalQuran.com APIs. They are made available so you may get the most out of the APIs.

# What do they contain
For now, a <a href="docs/tajweed.md">Tajweed</a> and <a href="docs/buck.md">Buck</a> helper. Each section is detailed below.

# Install and Get Started
* Add composer file and instructions.
* Add Tajweed example
* Add Buck example


## Tajweed Documentation

See <a href="docs/tajweed.md">Tajweed Documentation</a>.

## Buck (Buckwalter Transliteration) Documentation

See <a href="docs/buck.md">Buck Documentation</a>.

## Are there any known Issues
Yes, with the Tajweed parser. Webkit has a known bug that breaks Arabic with inline tags. There is an experimental fix in the Tajweed Parse class for this using the Zero Width Joiner (&zwj;), but it still needs some work. I've manually tried this on some Ayahs and ZWJ is not smart enough to parse all the characters and join them properly, so this is not ideal. See See https://stackoverflow.com/questions/11155849/partially-colored-arabic-word-in-html
and https://bugs.webkit.org/show_bug.cgi?id=6148.

## Credits
Most of this code is created using logic from the Global Quran website and codebase.
