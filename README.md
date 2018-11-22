#Emoji
将emoji表情转换为自定义标签形式，如[emoji]U+xxxxx[/emoji]

##Basic Usage

```php
<?php

use rjwu123\emoji\Emoji;
use Emoji\Lib\UnicodeConvert;

$testStr = "my heart is broken 💔" ;

$emoji = new Emoji(new UnicodeConvert()) ;

$ecodeStr = $emoji->encode($testStr) ;

$decodeStr =  $emoji->decode($ecodeStr) ;

echo $ecodeStr."\n\n" ;
echo $decodeStr."\n\n" ;

```



