<?php
session_start();

if(isset($_POST['message'])) {
	$message = htmlspecialchars($_POST['message']);

	// Append message to chat log file
	$fp = fopen("chat-log.txt", "a");
	fwrite($fp, "<div class='message'><span class='user'>" . $_SESSION['username'] . "</span>: " . $message . "</div>");
	fclose($fp);
}
