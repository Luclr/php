<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

spl_autoload_register(function ($class_name) {
    $filename = __DIR__ . DIRECTORY_SEPARATOR . "class" . DIRECTORY_SEPARATOR . $class_name . ".php";

    if (file_exists($filename)) {
        require_once $filename;
    }
});

?>
