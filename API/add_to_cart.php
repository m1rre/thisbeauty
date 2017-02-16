<?php 
session_start();

if (isset ($_GET['id'])) {
  require 'db.php';

    $stm_select = $pdo->prepare('SELECT * FROM products WHERE id='.$_GET['id']);
    $stm_select->execute();
    
    foreach($stm_select as $row) {
       
        if(!empty($_SESSION['cart']))
            if(is_array($_SESSION['cart']))
            {
                array_push($_SESSION['cart'], [ "item"=>$row, "quantity"=>1] ); //Om det redan finns varor i varukorgen så lägger man till den nya produkten i arrayen
            }
            else
            {
                $_SESSION['cart'] = array( [ "item"=>$row, "quantity"=>1] ); //Om varukorgen är tom så skapas en array
            }
        else
            $_SESSION['cart'] = array( [ "item"=>$row, "quantity"=>1] );

        echo json_encode($_SESSION['cart']);

        
    }
}   


?>


