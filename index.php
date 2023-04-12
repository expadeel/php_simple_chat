<!DOCTYPE html>
<html>
<head>
	<title>PHP Chat</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<div class="chat-box">
			<div class="chat-log" id="chat-log">
				<!-- Chat log will appear here -->
			</div>
			<div class="chat-input">
				<form method="post" action="send.php">
					<input type="text" name="message" placeholder="Type your message here...">
					<button type="submit">Send</button>
				</form>
			</div>
		</div>
	</div>

	<!-- Load jQuery library -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	<!-- Load chat script -->
	<script src="chat.js"></script>
</body>
</html>
