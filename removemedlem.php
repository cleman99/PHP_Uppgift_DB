<?php
include ("huvud.php");
include_once ("connector.php");

if(isset($_GET['id'])){
	$id = htmlentities($_GET['id']);

	if($conn = db_connect()){
		$question = "delete from medlem where medlemsnummer = $id";
		$res = $conn->query($question);
		if($res)
			echo "<p>Person borttagen <a href='medlemmar.php'>tillbaka</a></p>";
	}
	else
		echo "<p>Saknar anslutning till DB</p>";
}
else {
	header("location:medlemmar.php");
}