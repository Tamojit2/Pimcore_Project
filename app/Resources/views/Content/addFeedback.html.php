<?php
/**
 * @var \Pimcore\Templating\PhpEngine $this
 * @var \Pimcore\Templating\PhpEngine $view
 * @var \Pimcore\Templating\GlobalVariables $app
 */

	$this->extend('layout.html.php');

?>

<h3><?= $this->input("headline", ["width" => 540]); ?></h3>

<html>
<head>
<title>Add a Topic</title>
</head>

<body>
	<h1>Add a Feedback</h1>
	<form method="post" action= "addfeedback.html.php" >

	<p><label for=”topic_owner”>Your Email Address:</label><br/>
	<input type="email" id="topic_owner" name="owner" size=”40”
	maxlength="150" required="required" /></p>
	
	<p><label for=”topic_title”>Product Name:</label><br/>
	<input type=”text” id="topic_title" name="name" size=”40”
	maxlength=”150” required=”required” /></p>
	<p><label for="post_text">Post A Feedback:</label><br/>
	<textarea id="post_text" name="feedback" rows=”8”
	cols=”40” ></textarea></p>
	
	<button type=”submit” name="submit" value="submit">Submit</button>
	
	</form>
</body>
</html>

