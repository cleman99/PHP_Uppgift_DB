<?php
include ("huvud.php");
include_once("connector.php");
?>

<form method=post action="addsektion.php">
	Sektionskod:
	<input type="text" id="sKod"name="sKod"><br><br>
	Namn:
	<input type ="text" id="sNamn" name="sNamn"><br><br>
	Ledare:
	<input type="text" id="sLedare" name="sLedare"><br><br>
	<input type="submit" >
</form>

<br><p> <a href='medlemmar.php'> Tillbaka </a></p>
<?php
include ("footer.php");
?>