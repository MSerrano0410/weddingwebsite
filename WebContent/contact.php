<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Contact Us!</title>
		<link href='http://fonts.googleapis.com/css?family=Lobster' rel="stylesheet" type="text/css">
		<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
		<link href = "css/main.css" rel = "stylesheet" type = "text/css">
		<link href = "js/jquery-ui-1.9.2/css/dot-luv/jquery-ui-1.9.2.custom.css" rel = "stylesheet" type = "text/css">
		<link href = "js/jquery-ui-1.9.2/development-bundle/themes/dot-luv/jquery.ui.all.css" rel = "stylesheet" type = "text/css">	
		<link href = "js/jquery-ui-1.9.2/development-bundle/themes/dot-luv/jquery.ui.theme.css" rel = "stylesheet" type = "text/css">	
		<link href = "js/jquery-ui-1.9.2/development-bundle/themes/dot-luv/jquery.ui.menu.css" rel = "stylesheet" type = "text/css">
		<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type = "text/Javascript" src = "js/jquery-ui-1.9.2/js/jquery-ui-1.9.2.custom.min.js"></script>
		<script type = "text/Javascript" src = "js/jquery-ui-1.9.2/development-bundle/ui/jquery.ui.menu.js"></script>
		<script type = "text/Javascript" src  ="js/jquery.cycle.all.js"></script>
		<script type = "text/Javascript" src = "js/jquery-validation-1.13.1/dist/jquery.validate.min.js"></script>
		<script type = "text/Javascript" src = "js/main.js"></script>
	</head>
	<body>
		<div id = "wrapper">
			<a href = "index.html" title = "Back to homepage.">
				<div id = "title_container">
					<div id = "title">
						<div id = "title_text" class = "cursive">Corser-Serrano Wedding</div>
						<div id = "title_subhead" class = "cursive">Once upon a time a boy and a girl met and they fell in love.<br />This is their story.</div>
					</div>
				</div>
			</a>
			<ul id = "main_menu">
				<li>
					<a href = "index.html">Home</a>
				</li>
				<li>
					<a href = "#">About</a>
					<ul>
						<li><a href = "venue.html">The Venue</a></li>
						<li><a href = "https://www.youtube.com/watch?v=Luj1W7QoRRQ" target = "_blank" title = "Youtube video of our wedding song.">Our Song</a></li>
						<li><a href = "lodging.html">Lodging</a></li>
						<li><a href = "https://groups.google.com/d/forum/lauraandmarvinswedding" target = "_blank" title = "Our Google group.">Blog</a></li>
					</ul>
				</li>
				<li>
					<a href = "directions.html">Directions</a>
				</li>
				<li>
					<a href = "contact.php">Contact Us</a>
				</li>
			</ul>
			<div id = "main_content">
				<div id = "content_no_img">
					<form name = "email_form" id = "email_form" method = "POST" action = "php/email.php">
						<fieldset>
							<legend>Please send us an email, and we'll get back to you as soon as possible!</legend>
							<p>
								<label class = "email_label" for = "name">Name: </label>
								<input type = "text" name = "name" id = "name" class = "email_field" value = "" required/>
							</p>
							<p>
								<label class = "email_label" for = "email_address">Email: </label>
								<input type = "email" name = "email_address" id = "email_address" value = "" class = "email_field" required/>
							</p>
							<p>
								<label class = "email_label" for = "subject">Subject: </label>
								<input type = "text" name = "subject" id = "subject" class = "email_field" value = "" />
							</p>
							<p>
								<label class = "email_label" for = "message">Message: </label>
								<textarea name = "message" id = "message" rows = "4" cols = "23" required></textarea>
							</p>
							<br /><br /><br />
							<p>
								<input class="submit" type="submit" value="Submit">
							</p>
						</fieldset>
					</form>
					<script type = "text/Javascript">
					$("#email_form").validate({
						rules: {
							name: "required",										
							email: {
								required: true,
								email: true
							},
							subject: "required",
							message: "required"
						},

						messages: {
							name: "Please specify your name.",
							email: "Your email address must be in the format of name@domain.com.",
							subject: "Please specify a subject.",
							message: "An email message is required."
						},

						errorPlacement: function(error, element) {
							error.addClass("errormsg");
							error.insertAfter(element.parent("p"));
						},

					    onfocusout: function(e) {
						    this.element(e);
						},

						submitHandler: function(form, event) {
							alert("Thank you for your email!");
							$(form).ajaxSubmit();
						}
					});
					</script>
				</div>
			</div>
		</div>
	</body>
</html>