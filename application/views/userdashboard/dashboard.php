<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->helper('url');

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>style.css">

</head>

<body>
	<h1>Welcome to your Q&A website </h1>

	<div id="userlistbox">
		<h2>All Users</h2>
		<ul class="userlist">
			<?php foreach ($users as $user) {
				echo "<a href=" . base_url() . "index.php/welcome/edituser?id=$user->uid><li>$user->Username</li></a>";
			}
			?>
		</ul>
		<form action="http://localhost/mydatabaseapp/index.php/welcome/">
			<input type="submit" value="Sign out" >
			</form>
		<form action="http://localhost/mydatabaseapp/index.php/welcome/dashboardq">
			<input type="submit" value="View Questions and Answers" >
			</form>
	</div>
</body>

</html>