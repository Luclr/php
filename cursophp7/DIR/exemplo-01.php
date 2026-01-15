<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

echo "DIR: " . __DIR__ . "<br>";
echo "Usuário PHP: " . get_current_user() . "<br>";

$dir = __DIR__ . "/images";

if (!is_dir($dir)) {
    if (mkdir($dir, 0755)) {
        echo "mkdir retornou TRUE";
    } else {
        echo "mkdir retornou FALSE<br>";
        var_dump(error_get_last());
    }
} else {
    echo "Diretório já existe";
}
