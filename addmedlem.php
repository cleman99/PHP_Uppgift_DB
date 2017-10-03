<?php
include ("huvud.php");
include_once("connector.php");

if(isset($_POST['fnamn']) && isset($_POST['telefon'])){
	$fnamn = htmlentities($_POST['fnamn']);
		$telefon = htmlentities($_POST['telefon']);

		if($conn = db_connect()){
			$question = "insert into medlem values(0, '$fnamn', '$telefon')";
			$conn->query($question);

			echo "$fnamn är insatt";
		}
		else{
			echo "<p> Gick ej att ansluta till databasen</p>";
		}

}
echo "<a href='medlemmar.php'>Tillbaka</p>";

	

?>


<?php
include ("footer.php");
?>