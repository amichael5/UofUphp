<?php
    require_once  '../model/db_connect.php';

	$conn = new mysqli($hn, $un, $pw, $db);
	if($conn->connect_error) die($conn->connect_error);

	if(isset($_POST['cardid'])) {
		$cardId = $_POST['cardid'];

		$query = "DELETE FROM giftcard WHERE cardId = $cardId";
		
		$result = $conn->query($query); 
		if(!$result){ 
			die($conn->error);
		 }else{
			echo 'success';
		}
		
		header("Location: ./card-list.php");
	}

	$conn->close();
?>