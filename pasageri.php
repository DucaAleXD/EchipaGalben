<?php
    require_once "vendor/autoload.php";
    use app\DataBase;
    
    $config = require_once "./config.php";
    $db = new DataBase($config);

    $query = $db->query('Select * from pasageri', [], PDO::FETCH_OBJ);
    if(isset($_POST['nume']) && isset($_POST['prenume']) && isset($_POST['loc']) && isset($_POST['zbor'])){
        $insert = $db->query("Insert into pasageri(nume, prenume, loc, zbor) values(:nume, :prenume, :loc, :zbor )", [//error adaugarea parametrilor neajunse
            'nume'      => $_POST['nume'],
            'prenume'   => $_POST['prenume'],
            'loc'   => $_POST['loc'],//error adaugarea parametrilor neajunse
            'zbor'   => $_POST['zbor'],//error adaugarea parametrilor neajunse
        ]);
        unset($_POST['nume']);
        unset($_POST['prenume']);
        unset($_POST['loc']);//error adaugarea parametrilor neajunse
        unset($_POST['zbor']);//error adaugarea parametrilor neajunse
        header('location:pasageri.php');
    }

    require 'views/pasageri.view.php';

    $db = null;