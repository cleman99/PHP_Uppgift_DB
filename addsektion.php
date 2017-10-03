<?php
include ("huvud.php");
include_once("connector.php");

if(isset($_POST['sKod']) && isset($_POST['sNamn']) && isset($_POST['sLedare'])){
	$sKod = htmlentities($_POST['sKod']);
	$sNamn = htmlentities($_POST['sNamn']);
	$sLedare = htmlentities($_POST['sLedare']);

		if($conn = db_connect()){
			$question = "insert into sektion values('$sKod', '$sNamn', '$sLedare')";

			$conn->query($question);
			
			echo "Sektion $sNamn är insatt";
		}
		else{
			echo "<p> Gick ej att ansluta till databasen</p>";
		}
}
echo "<a href='medlemmar.php'>Tillbaka</p></a>";


include ("footer.php")
?>