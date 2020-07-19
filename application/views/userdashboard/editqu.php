<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->helper('url');

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title> Dashboard</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>style.css">
</head>

<body>
	<div class="loginbox">
		<h1>Question </h1>

		<form id="addquform" name="editqu" action="<?php echo base_url(); ?>index.php/welcome/doeditqu" method="post">
		<input type="hidden" name="qid" value="<?php echo $quinfo->qid ?>">
			<label for="question">Question</label><br>
			<input type="text" id="qid" name="question" value="<?php echo $quinfo->question ?>"><br>
			<h2>Anwers </h2>
			<ul class="userlist">
				<?php foreach ($answers as $answer) {
					
					echo "<a ><li>$answer->Username: , $answer->answer</li></a>";
				}
				?>
			<h2>Add answer </h2>
			</ul> <input type="text" id="answerid" name="answer" value=""required><br>

			<input type="submit" value="Submit Answer">
		</form>
		<form action="http://localhost/mydatabaseapp/index.php/welcome/dashboardq">
			<input type="submit" value="Back to Questions">
		</form>
	</div>
</body>

</html>


