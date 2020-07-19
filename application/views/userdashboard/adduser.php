<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->helper('url');

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title> Sign up form </title>
	<script type="text/javascript">
		function validateForm() {
			if (document.forms['adduser']['username'].value == "") {
				alert("enter a username");
				return false;
			}
			if (document.forms['adduser']['email'].value == "") {
				alert("enter a password");
				return false;
			}
			if (document.forms['adduser']['password'].value == "") {
				alert("enter a password");
				return false;
			}
			if (document.forms['adduser']['repeatpassword'].value == "") {
				alert("enter a password");
				return false;
			}
			if (document.forms['adduser']['password'].value != document.forms['adduser']['repeatpassword'].value) {
				alert("password and repeat password don't match");
				return false;
			}

		}
	</script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>style.css">
</head>

<body>
	<div class="loginbox">
		<h1>Sign up form </h1>
		<form id="adduserform" name="adduser" action="<?php echo base_url(); ?>index.php/welcome/doadduser" method="post" onsubmit="return validateForm()">
			<label for="uname">Username</label><br>
			<input type="text" id="usernameid" name="username" value=""><br>
			<label for="uname">Email</label><br>
			<input type="text" id="emailid" name="email" value=""><br>
			<label for="uname">occupation</label><br>
			<input type="text" id="occupationid" name="occupation" value=""><br>
			<label for="uname">date</label><br>
			<input type="date" id="birthid" name="birth" value=""><br>
			<label for="lname">Password</label><br>
			<input type="password" id="passwordid" name="password" value=""><br>
			<label for="lname">Repeat Password</label><br>
			<input type="password" id="repeatpasswordid" name="repeatpassword" value=""><br>
			<input type="submit" value="Submit">
		<form action="http://localhost/mydatabaseapp/index.php/welcome/">
			<input type="submit" value="Back">
		</form>
	</div>
</body>

</html>