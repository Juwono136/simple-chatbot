
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Simple Chatbot</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>

	<div class="wrapper">
		<div class="title">Simple Online Chatbot</div>
		<div class="form">
			<div class="bot-inbox inbox">
				<div class="icon">
					<i class="fas fa-user"></i>
				</div>
				<div class="msg-header">
					<p>Hello there, How can I help you?</p>
				</div>
			</div>
		</div>
		
		<div class="typing-field">
			<div class="input-data">
				<input id="data" type="text" placeholder="Type Something here.." required>
				<button id="send-btn">Send</button>
			</div>
		</div>
	</div>
	
	<script src="script.js"></script>
</body>
</html>