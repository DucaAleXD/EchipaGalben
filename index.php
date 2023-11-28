<?php
//descarcarea vendor 
require "./vendor/autoload.php";// corectarea conexiunii corecta cu autoload
use app\DataBase;//adaugarea DataBase

    $config = require_once "../galben/config.php";//eror ../../
    $query = new DataBase($config);

    require 'views/index.view.php';

    $query = null;