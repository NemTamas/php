<?php

$content = file_get_contents('https://vatera.hu');
/*file beolvasása mérettől függetlenül
a kezdő honlapot átrakja a localhostra*/
print($content);
file_put_contents('vatera_tartalma.html', $content);