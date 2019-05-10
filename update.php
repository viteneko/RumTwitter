<?php
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'daiaana_pn_09');
	
	$query = mysqli_query($connect, "UPDATE tweet SET text_lol='" . $_POST['text_lol'] . "' WHERE id ='" . $_POST['id'] . "'");
	header('Location: http://moyapapkanetrogai/');
?>