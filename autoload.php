<?php

/*
    This php is for autoloading all classes at once.
    In this way '__DIR__', it can avoid the pathway error (no matter the using page is in any folder,
    it's relative pathway).
*/


function my_autoload ($pClassName) {
    include(__DIR__ . "/" ."classes/".$pClassName . ".php");
}
spl_autoload_register("my_autoload");


?>
