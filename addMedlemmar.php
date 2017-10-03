<?php
$title ="Alla medlemmar";
include("header.php");
include("dbcon.php");

if(!(isset($_POST['namn']) && isset($_POST['tel']))) {
	include("addForm.php");
}
else {
	if(!(empty($_POST['namn']) || empty($_POST['tel']))) {
		$namn = $_POST['namn'];
		$tel = $_POST['tel'];
		if($con = connect_db()) { 
			$sql ="insert into medlem values (0,'$namn','$tel')";
			$result = $con->query($sql);
			if($result) {
				
				echo "<p>Medlem <b>$namn</b> instatt</p><p><a href='medlemmar.php'>tillbaka</a></p>";
			}
			else {
				echo "<p>Medlem $namn gick inte att lägga till</p>";
			}
		}
		else {
			echo "<p>Gick ej att ansluta till databasen</p>";
		}

	}

}

include("footer.php");
?>