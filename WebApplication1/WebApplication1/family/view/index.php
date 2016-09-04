<html>
	<head>
		<link rel="stylesheet" href = "http://www.voidnull.ga/css/style.css" >
	</head>

	<body align="center">

		<div class="header"></div>
		
		<div 
		style="padding-left:10%;
		padding-right:10%;
		">
		
		<?php header('Content-Type: text/html; charset=utf-8');
		error_reporting(-1);
		$images = "http://".$_SERVER['HTTP_HOST']."/post/images/";
		$mysqli = new mysqli("localhost", "u702221482_void", "23kjs518iqt7", "u702221482_post");
		if ($mysqli->connect_errno) {
			echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}

		 $postlist = $mysqli->query("SELECT * FROM `family`");
			foreach($postlist as $value)
			{
				echo '<post>';
				echo '<div class="info">'.$value["date"].'   ::   '.$value["author"].'</div>';
				echo '<text> <p>'. $value["text"] .'</p> </text>';
				echo '</post>';
			}
		?>
		
		</div>
		
	</body>

</html>