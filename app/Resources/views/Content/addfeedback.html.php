<?php
/**
 * @var \Pimcore\Templating\PhpEngine $this
 * @var \Pimcore\Templating\PhpEngine $view
 * @var \Pimcore\Templating\GlobalVariables $app
 */

	$this->extend('layout.html.php');

?>

<h3><?= $this->input("headline", ["width" => 540]); ?></h3>


<a href="http://exam.local/ShowFeedback"><input type="button" name="show" value="Back to List" title="View" id="show"></a>

<br/><br/>


<?php

	$name = $_POST['owner'];
	if($_POST['uname']){
	
	//echo $this->feedback;
	
		$fb = new \Pimcore\Model\DataObject\Feedback();
                	echo($fb);
                	$fb->setKey(ucfirst($_POST['pname']));
                	$fb->setPublished(true);
                	$fb->setParentId(110);
                	$fb->setUsermail($_POST['email']);
                	$fb->setUsername($_POST['uname']);
                	$fb->setProduct($_POST['pname']);
                	$fb->setFeedback($_POST['feedback']);
                	$fb->save();
                	
                	$mail = new \Pimcore\Mail();
			$mail->addTo('tamojit.saha30@gmail.com');
			$mail->setSubject('Products Feedback');
			$mail->setBodyText("New Product feedback for ".$_POST['pname']." has been added");
			$mail->send();

            	
            	
	} else {
		echo "Please write some feedback";
	}
//create nice message for user
	if($_POST['feedback']){
	$display_block = "<p>The Feedback on <strong>".$_POST['pname']."</strong> has been added.</p>";
	echo $display_block;
	}
?>


<html>
<head>
<title>Add a Topic</title>
</head>

<body bgcolor="#87CEFA">
	<center>
	
	<h1>Add a Feedback</h1>
	<form method="post" action= "" >

	<p><label for=”topic_title”>Your Name:</label><br/>
	<input type=”text” id="topic_title" name="uname" size=”40”
	maxlength=”150” required=”required” /></p>
	
	<p><label for=”topic_owner”>Your Email Address:</label><br/>
	<input type="email" id="topic_owner" name="email" size=”40”
	maxlength="150" required="required" /></p>
	
	<p><label for=”topic_title”>Product Name:</label><br/>
	<input type=”text” id="topic_title" name="pname" size=”40”
	maxlength=”150” required=”required” /></p>
	<p><label for="post_text">Write A Feedback:</label><br/>
	<textarea id="post_text" name="feedback" rows=”8”
	cols=”40” ></textarea></p>
	
	<button type=”submit” name="submit" value="submit">Submit</button>
	
	</form>
	<center>
</body>
</html>
