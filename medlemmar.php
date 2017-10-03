<?php
$title = "Alla medlemmar";
include("huvud.php");
include_once("connector.php");

if($connect = db_connect()){
	$sql = "select namn, telefon from medlem";
	$result = $connect->query($sql);
	if($result->num_rows > 0){
		echo "<ul>";
		while($row = $result->fetch_assoc()){
			echo "<li> Namn: <b>" . $row['namn'] . "</b> Telefon: <b>" . $row['telefon']. "</b></li>";
		}
		echo "</ul>";

	}
}
?>
		 <br><br><ol>
		 	  <li><a href="laggtill.php">Lägg till medlemmar</a></li><br>
			  <li><a href="tabort.php">Ta bort medlemmar</a></li><br>
			  <li><a href="formaddsektion.php">Lägg till sektioner</a></li><br>
			  <li><a href="">Lägg till medlemmar i sektioner</a></li><br>
			  <li><a href="">Ta bort sektioner</a></li><br>
		 </ol>
<?php

include("footer.php");
?>