<?php
	$data = json_decode(file_get_contents("guestbook.json"), true);
	$data['messages'] = array_reverse($data['messages']);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>FOI OSS Guest Book</title>
		
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,900' rel='stylesheet' type='text/css'>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script> 
		
		<link rel="stylesheet" type="text/css" href="animate.css">

		<meta http-equiv="refresh" content="15" >
	</head>
	
	<body>
		<div class="full">
			<div class="text">
				<?php foreach($data['messages'] as $m): ?>
				<div class="entry">
					<div class="message"><?php echo utf8_decode(htmlspecialchars_decode($m['message'])); ?></div>
					<div class="name">- <?php echo utf8_decode(htmlspecialchars_decode($m['name'])); ?></div>
				</div>
				<?php endforeach; ?>
			</div>
			
			<div class="logo">
				<img src="img/oss.png">
			</div>
		</div>
		
		<style>
		body {
			margin:0;
			padding:0;
			font-family: 'Roboto', sans-serif;
		}

		.entry {
			width: 80%;
			-webkit-border-radius: 10px;
			-moz-border-radius: 10px;
			border-radius: 10px;
			border: 2px solid #bc0a29;
			margin-left: auto;
			margin-right: auto;
			font-size: 35px;
			padding: 15px 15px;
			margin-top: 30px;
		}

		.entry > .name {
			text-align: right;
			color: #bc0a29;
		}
		.full {
			background: #141414;
			width:100%;
			height:100vh;
			margin:0;
			padding:0;
			overflow:hidden;
		}
		.logo {
			position:absolute;
			bottom: 5%;
			left: 5%;
			box-sizing: border-box;
		}
		.text {
			position:relative;
			width:100%;
			text-align:center;
			
			font-size:45px;
			color:#FFF;
			font-weight: bold;
			height: 75%;
			overflow: scroll;
		}
		.text a.clickMeButton {
			font-size:45px;
			color:#FFF;
			font-weight: bold;
			text-decoration:none;
			padding:25px;
			background: #bc0a29;
			-webkit-border-radius: 20px;
			border-radius: 20px;
		}
		.text a.openGuest {
			position:relative;
			font-size:30px;
			color:#FFF;
			font-weight: bold;
			text-decoration:none;
			padding:25px;
			background: #bc0a29;
			-webkit-border-radius: 20px;
			border-radius: 20px;
			padding-top:25px;
		}
		.helloText {
			margin-top:-15vh;
			
		}
		
		input {
			width: 400px;
			height: 50px;
			padding: 5px;
			padding-left: 15px;
			box-sizing: border-box;
			background: #141414;
			border: 3px solid #bc0a29;
			-webkit-border-radius: 20px;
			border-radius: 20px;
			color:#FFF;
			z-index: 1000;
		}
		
		textarea {
			width: 400px;
			height: 200px;
			padding: 5px;
			padding-left: 15px;
			box-sizing: border-box;
			background: #141414;
			border: 3px solid #bc0a29;
			-webkit-border-radius: 20px;
			border-radius: 20px;
			color: #FFF;
		}
		
		button {
			width: 400px;
			height: 50px;
			padding: 5px;
			padding-left: 15px;
			box-sizing: border-box;
			background: #bc0a29;
			-webkit-border-radius: 20px;
			border-radius: 10px;
			border:0;
			color:#FFF;
			font-weight:bold;
		}
	
		
		</style>
	</body>
</html>