<form method="get">
<input type="text" name="jour" placeholder="Saisir un numéro de jour">
<input type="submit" name="valider" value="VALIDER">
</form>
<?php
if (isset($_GET['valider'])) {
$jour = $_GET['jour'];
if ($jour <= 5) {
echo"C'est un jour de travail";
}else{
echo"C'est un jour de repos";
}
}
?>