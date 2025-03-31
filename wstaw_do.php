<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uczniowie</title>
</head>
<body>
<a href="wstaw.php" >Wstaw</a>
<a href="pobierz.php" >Pobierz</a>

<?php 
@$imie = $_GET['imie'];
@$nazwisko = $_GET['nazwisko'];
@$wiek = $_GET['wiek'];
@$id = $_GET['id'];
echo $id;

$pol = mysqli_connect('localhost','root','','uczniowie1');

//UPDATE `dane` SET `id`='[value-1]',`imie`='[value-2]',`nazwisko`='[value-3]',`wiek`='[value-4]' WHERE 1

$zaptanie = "UPDATE dane SET imie='$imie',nazwisko='$nazwisko',wiek=$wiek WHERE id = $id";
echo $zaptanie;

mysqli_query($pol,$zaptanie);

?>

</body>
</html>