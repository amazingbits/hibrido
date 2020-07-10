<?php

$autoload = function($class){
    include($class.'.php');
};
spl_autoload_register($autoload);

$core = new Core();
$core->init();