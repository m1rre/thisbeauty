<?php 
require"db.php";

//tar bort bokningen

if( isset($_POST['remove_id']) ) {

			$sql = "DELETE FROM `timebooking` WHERE `id` = :removeid";
			$stm_delete = $pdo->prepare($sql);
			$stm_delete->execute(['removeid' => $_POST['remove_id']]);
			echo json_encode(true);
		} 

?>



