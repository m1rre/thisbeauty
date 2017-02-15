<?php

require 'db.php';

//VISAR ALLA PRODUKTER SOM FINNS

$stm_select = $pdo->prepare('SELECT `name`, `price`, `description`, `pic` FROM `products`');
$stm_select->execute([]);
$resultat = array();

foreach($stm_select as $row) {
    $resultat[] = $row;

}

//JSON_UNESCAPED_UNICODE anvÃ¤nds fÃ¶r att kunna skriva ut Ã¥Ã¤Ã¶.
echo json_encode($resultat, JSON_UNESCAPED_UNICODE);

?>
