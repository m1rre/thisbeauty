<?php 
require"db.php";


$sql_query = "SELECT * FROM `behandlingar`";


$stm = $pdo->prepare($sql_query);
$stm->execute();

$result = $stm->fetchAll(PDO::FETCH_ASSOC);

$main= array('behandlingar'=>$result);

echo json_encode($main, JSON_UNESCAPED_UNICODE);

?>