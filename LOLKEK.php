<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'daiaana_pn_09');
	$lol = mysqli_query($connect, "INSERT INTO tweet (logo_lol, title_lol, text_lol, img_lol) VALUES ('images/kags.jpeg', 'vita', '" . $_POST['text_lol'] . "', 'images/post5.png')");
	header('Location: http://moyapapkanetrogai/');
?>

