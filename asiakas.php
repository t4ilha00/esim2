<?php include "menu.php"; ?>
<h1>Asiakkaat</h1>
<?php
include "yhteys.php";
$sql="SELECT etunimi, sukunimi FROM asiakkaat";
$asiakkaat=$db->query($sql);

if(isset($asiakkaat)) {

	foreach ($asiakkaat as $rivi) {
	echo $rivi['etunimi'].' '.$rivi['sukunimi']. '<br>';
	}
}
else {
	echo "Tietokantaan ei saatu yhteyttä, ota yhteys ylläpitoon";
}
?>

<?php include "footer.php"; ?>