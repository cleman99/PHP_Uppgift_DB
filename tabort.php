<?php
include ("huvud.php");
include_once("connector.php");
?>

<h1> Skriv in namn på medlemen som ska bort </h1>
<form method=post action="removemedlem.php">
	<?php
		if($connect = db_connect()){
	$sql = "select namn, medlemsnummer from medlem";
	$result = $connect->query($sql);
	if($result->num_rows > 0){
		echo "<ul>";
		while($row = $result->fetch_assoc()){
			$namn = $row['namn'];
			$id = $row['medlemsnummer'];
			echo "<li> Namn: <b><a href='removemedlem.php?id=$id'>$namn</a></b></li>";
		}
		echo "</ul>";

	}
}
	?>
</form>

<br><p> <a href='medlemmar.php'> Tillbaka </a></p>
<?php
include ("footer.php");
?>