<?php
include ("huvud.php");
include_once("connector.php");
?>

<form method=post action="addmedlem.php">
	Namn:
	<input type="text" id="fnamn"name="fnamn"><br><br>
	Telefon:
	<input type ="text" id="telefon" name="telefon"></br>
	<input type="submit" >
</form>

<br><p> <a href='medlemmar.php'> Tillbaka </a></p>
<?php
include ("footer.php");
?>