<?php

function register($class) {

    $diretorio = array('../../../../controller', '../../../../model', '../../../../Util');

    foreach ($diretorio as $pasta) {
        if (file_exists("{$pasta}/{$class}.php")) {
            require_once ("{$pasta}/{$class}.php");
        }
    }
}

spl_autoload_register('register');
