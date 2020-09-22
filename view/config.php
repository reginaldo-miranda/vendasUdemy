<?php

$path = $_SERVER['SERVER_NAME'];
if ($path == "localhost") {
    $caminho = "http://" . $path . '/CursoAppVendasSistemaWEB/';
} else {
    $caminho = "http://" . $path . '/';
}


define('BASE_URL', $caminho);
define('FACA_LOGIN', BASE_URL . 'view/faca-login.php');
?>
