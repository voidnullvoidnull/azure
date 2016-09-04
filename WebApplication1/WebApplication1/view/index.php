<html>
	<head>
		<link rel="stylesheet" href = "http://www.voidnull.ga/css/style.css" >
	</head>

	
	<body align="center">
		<div class="header"></div>

		<?php 
		error_reporting(-1);
		header('Content-Type: text/html; charset=utf-8');
		$images = "http://".$_SERVER['HTTP_HOST']."/post/images/";
		$mysqli = new mysqli("localhost", "u702221482_void", "23kjs518iqt7", "u702221482_post");
		if ($mysqli->connect_errno) {
			echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}

			$post = $mysqli->query("SELECT * FROM `posts` WHERE `date` = STR_TO_DATE('".$_GET["date"]."', '%Y-%m-%d %H:%i:%s')");

			foreach($post as $value)
			{
				echo '<preview>';
				echo '<div class="info">'. $value["date"] .'</div>';
				echo '<text> <p>'. $value["text"] .'</p> </text>';
				echo '<img src='.$images.$value["image"] .'>';
				echo '</preview>';
			}

		?>
	</body>

</html>