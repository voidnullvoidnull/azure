<?php 
		
		error_reporting(-1);
		header('Content-Type: text/html; charset=utf-8');
		
		$mysqli = new mysqli("localhost", "u702221482_void", "23kjs518iqt7", "u702221482_post");
		$mysqli->set_charset("utf8");

		$text = $_POST["text"];
		$author = $_POST["author"];
		echo $text;
		$mysqli->query("INSERT INTO `u702221482_post`.`family` (`date`, `text`, `author`) VALUES (CURRENT_TIMESTAMP, '".$text."', '".$author."');");
		header('Location: http://'.$_SERVER['HTTP_HOST'].'/family/');


?>