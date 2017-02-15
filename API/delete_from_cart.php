<?php
session_start();
require 'db.php';

if (isset ($_GET['id'])) {


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
