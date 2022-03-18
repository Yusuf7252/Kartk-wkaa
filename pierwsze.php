<form action="" method="POST">
Podaj swoje imie
<input name="imie">
Podaj swoje nazwisko
<input name="nazwisko">
Podaj dowoną liczbe
<input name="liczba">
<input type="submit" name="Submit">
</form>
<?php
$imie= $_POST["imie"];
$nazwisko= $_POST["nazwisko"];
$liczba= $_POST["liczba"];

$kasuj = substr($imie, 0, $liczba-1);
$kasuj2 = substr($imie, $liczba, null);
echo $kasuj.$kasuj2."<br>";
$kasujn = substr($nazwisko, 0, $liczba-1);
$kasujn2 = substr($nazwisko, $liczba, null);
echo $kasujn.$kasujn2;
?>