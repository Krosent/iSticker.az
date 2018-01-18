<?php
if(basename($_SERVER['PHP_SELF']) == 'index.php') { // If we are now on the general page(called index.php)
    echo '<title>iSticker.az - заклеим весь мир!</title>';
} elseif(basename($_SERVER['PHP_SELF']) == 'read_more.php') { // If we are in categories
    echo '<title>iSticker.az - КАТАЛОГ</title>';
} elseif(basename($_SERVER['PHP_SELF']) == 'smartphone.php') {
    echo '<title>iSticker.az - на смартфон</title>';
}