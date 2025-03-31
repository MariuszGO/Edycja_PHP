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

?>

<form action="wstaw_do.php" method="GET">
    <input type="hidden" value="<?php echo $id ?>" name="id">
Imię:      <input type="text" name="imie" value="<?php echo $imie ?>">
Nazwisko:  <input type="text" name="nazwisko" value="<?php echo $nazwisko ?>">
Wiek       <input type="number" name="wiek" value="<?php echo $wiek ?>">
<button>Zmień</button>
</form>

<?php



?>

</body>
</html>