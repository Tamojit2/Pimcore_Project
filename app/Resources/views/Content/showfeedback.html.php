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
	
	<style>
	table{
	max-width: 100%;
	}
	tr:nth-child(odd) {
  	background-color: #eee;
	}

	th {
	  background-color: #555;
	  color: #fff;
	}

	th,
	td {
	  text-align: left;
	  padding: 0.5em 1em;
	}
	
	</style>
</head>
<body bgcolor="#FFEBCD">

	<a href="http://exam.local/AddFeedback"><input type="button" name="feedback" value="Add a Feedback" title="View" id="feedback"></a>

	<center>
<?php

	echo "<table border-collapse: collapse;
	 padding: 2px>

	<tr>
	<th>User Name</th>
	<th>Product Name</th>
	<th>Feedback</th>
	</tr>";

	$feedbacks = new \Pimcore\Model\DataObject\Feedback\Listing();
    		foreach($feedbacks as $feedback)
    	{
	  echo "<tr>";
	  echo "<td>" . $feedback->getUsername() . "</td>";
	  echo "<td>" . $feedback->getProduct() . "</td>";
	  echo "<td>" . $feedback->getFeedback() . "</td>";
	  echo "</tr>";
	  }

	echo "</table>";


?>
	<center>
</body>

</html>

<br/><br/>

<a href="http://exam.local/Productspage"><input type="button" name="products" value="Back to Products" title="View" id="products"></a>


