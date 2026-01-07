<?php

session_id('l00ghai7idn9u5agulma047l66');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);






?>