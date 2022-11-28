<?php
define('base_url', 'http://127.0.0.1/proyecto/prime-saber/');
function url_base() {
    return $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["SERVER_NAME"]."/proyecto/Prime-Saber/";
}

?>