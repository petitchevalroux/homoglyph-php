# PHP \Pcr\Homoglyph
[![Build Status](https://travis-ci.org/petitchevalroux/homoglyph-php.svg?branch=master)](https://travis-ci.org/petitchevalroux/homoglyph-php)

Replace all homoglyphs with latin characters equivalent, latin homoglyphs are not replaced.

## Install
```
composer require petitchevalroux/homoglyph
```

## Usage
### Replace homoglyphs
```php
<?php
echo (new \Pcr\Homoglyph())->replace('аЬсԁеһіјорѕѵѡху'));
```
Display :
```
abcdehijopsvwxy
```

## Inspiration and documentation

Datasource : http://www.unicode.org/Public/security/latest/confusables.txt

Import script and idea from  : https://github.com/nodeca/unhomoglyph

## Supported homoglyphs

 * Cyrillic letter (upper and lower case)
 * Fullwidth latin (upper and lower case)
 * More but not tested yet (feel free to contribute)

## Non replaced latin homoglyphs
Following characters are considered as confusing by unicode standard but are not replaced in replace function as they are latin valid characters.
```
0 => O
I => l
m => rn
1 => l
```

## Fullwidth latin
Fullwidth latin letters (upper and lower case) are replace by the corresponding characters.
```
ａｂｃｄｅｆｇｈｉｊｋｌｍｎｏｐｑｒｓｔｕｖｗｘｙｚＡＢＣＤＥＦＧＨＩＪＫＬＭＮＯＰＱＲＳＴＵＶＷＸＹＺ
```
replacements :
```
abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ
```

## Update
The following script allow to update characters-map.php (node is required)
```
tools/update.php
```
