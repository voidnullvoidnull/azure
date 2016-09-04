<?php 
		
		error_reporting(-1);
		header('Content-Type: text/html; charset=utf-8');
		
		$mysqli = new mysqli("localhost", "u702221482_void", "23kjs518iqt7", "u702221482_post");
		$mysqli->set_charset("utf8");
		
		if($_POST["password"] != "dimaek"){
				echo "Гонишь";
		}
		else{
		
		$tmp_name = $_FILES["image"]["tmp_name"];
		$name = $_FILES["image"]["name"];
		move_uploaded_file($tmp_name, "images/$name");
		echo $name;
		$text = $_POST["text"];
		echo $text;
		$mysqli->query("INSERT INTO `u702221482_post`.`posts` (`date`, `image`, `text`, `url`) VALUES (CURRENT_TIMESTAMP, '".$name."', '".$text."', 'none');");
		header('Location: http://'.$_SERVER['HTTP_HOST'].'/post/');
		}

?>