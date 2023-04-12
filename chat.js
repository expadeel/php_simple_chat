$(document).ready(function() {
	// Set username
	var username = prompt("Please enter your username:");
	sessionStorage.setItem("username", username);

	// Refresh chat log every second
	setInterval(function() {
		$.get("chat-log.txt", function(data) {
			$("#chat-log").html(data);
		});
	}, 1000);

	// Submit form using Ajax
	$("form").submit(function(event) {
		event.preventDefault();
		var message = $("input").val();

		if(message != "") {
			$.post("send.php", {message: message}, function() {
				$("input").val("");
			});
		}
	});
});
