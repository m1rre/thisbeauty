<?php
session_start();
require 'connect.php';

if (isset ($_GET['id'])) {
    $host = 'localhost';
    $db = "thisbeauty";
    $user = 'root';
    $password = 'root';
    $charset = 'utf8';
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $options = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false  ];

    $pdo = new PDO($dsn, $user, $password, $options);


    $stm_select = $pdo->prepare('SELECT * FROM products WHERE id='.$_GET['id']);
    $stm_select->execute();
    foreach($stm_select as $row) {
       
        if(!empty($_SESSION['cart']))
            if(is_array($_SESSION['cart']))
            {
                array_push($_SESSION['cart'], [ "item"=>$row, "quantity"=>1] );
            }
            else
            {
                $_SESSION['cart'] = array( [ "item"=>$row, "quantity"=>1] );
            }
        else
            $_SESSION['cart'] = array( [ "item"=>$row, "quantity"=>1] );

        echo json_encode(array_splice($_SESSION['cart'], 0, 1));
    
    //array_splice($_SESSION['cart'], 0, 1);

    }
}
?>