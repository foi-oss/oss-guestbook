<!DOCTYPE html>
<html>
	<head>
		<title>FOI OSS Guest Book</title>
		
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,900' rel='stylesheet' type='text/css'>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
		
		<link rel="stylesheet" type="text/css" href="animate.css">
	</head>
	
	<body>
		<div class="full">
			<div class="text">
				<a href="javascrip:void(0);" class="clickMeButton" onClick="imClicked()">
					CLICK ME! <b class="smy">:)</b>
				</a>
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
		.full {
			background: #141414;
			width:100%;
			height:100vh;
			margin:0;
			padding:0;
			overflow:hidden;
		}
		.logo {
			position:relative;
			padding-top:25vh; 
			left:50%;
			margin-left: -100px;
			box-sizing: border-box;
		}
		.text {
			position:relative;
			padding-top: 30vh;
			width:100%;
			text-align:center;
			
			font-size:45px;
			color:#FFF;
			font-weight: bold;
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
		
		<script>
			var i = document.getElementById("myimage");
 
			// go full-screen
			if (i.requestFullscreen) {
				i.requestFullscreen();
			} 
			
			function imClicked()
			{
				$(".clickMeButton").fadeOut("slow");
				$(".text").html('<div class="helloText" style="">Welcome to FOI OSS lab, <br> do you want to leave us a message?<p><a href="javascrip:void(0);" class="openGuest" onClick="openGuest()">OPEN GUESTBOOK</a></div>');
				$(".logo").animate({ top: "-110" }, 5);
				$(".text").animate({ top: "+80", opacity: "0"}, 5);
				$(".text").animate({ top: "-40",  opacity: "1"}, 1000);
				$(".text").animate({ color: "#bc0a29" }, 300);
				$(".text").animate({ color: "#FFF"}, 300);
				$(".text").animate({ color: "#bc0a29" }, 300);
				$(".text").animate({ color: "#FFF"}, 300);
			}
			
			function openGuest()
			{
				$(".logo").animate({ top: "-500", left: "300", opacity: "0" }, 1000);
				$(".text").animate({ top: "500", right: "300", opacity: "0" }, 1000, function(){
					
					$(".text").html('<form method="POST" action="upload.php"><input type="text" name="name" class="name" placeholder="IME"><br><input type="text" name="email" class="email" placeholder="E-MAIL"><br><textarea style="margin-top:15px;" name="message" class="message" placeholder="MESSAGE"></textarea><br><button class="submit" type="submit">SUBMIT YOUR MESSAGE</button></form>');
					$(".logo").animate({ top: "250", left: "-150", opacity: "0"}, 5);
					$(".text").animate({ top: "-115", left: "0", opacity: "1"}, 5);	
					$(".name").animate({ opacity: "0", left: "-400" }, 5, function(){
						$(".name").animate({ opacity: "1"}, 300);
						$(".name").animate({ left: "0"}, 600);
					});
					$(".email").animate({ opacity: "0" }, 5, function(){
						$(".email").animate({ opacity: "1"}, 300);
						$(".email").animate({ left: "0"}, 600);
					});
					$(".message").animate({ opacity: "0" }, 5, function(){
						$(".message").animate({ opacity: "1"}, 300);
						$(".message").animate({ left: "0"}, 600);
					});
					$(".submit").animate({ opacity: "0" }, 5, function(){
						$(".submit").animate({ opacity: "1"}, 300);
						$(".submit").animate({ left: "0"}, 600);
						
						$(".logo").remove();
					});
				});
				
			}
		</script>
	</body>
</html>