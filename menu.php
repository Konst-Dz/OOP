<?php
require_once "Link.php";

for ($i=1;$i<=5;$i++) {
    echo (new Link())->setAtrr('href', "/$i.php")->setText("$i")->show();
}

