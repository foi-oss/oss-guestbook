<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$file = file_get_contents("guestbook.json");
$file = json_decode($file, true);

$save = array(
	'name' => utf8_encode($name),
	'email' => utf8_encode($email),
	'message' => utf8_encode($message)
);

$messages = $file['messages'];
array_push($messages, $save);
$file['messages'] = $messages;

$save = json_encode($file);
file_put_contents("guestbook.json", $save);



header("location: index.php");
