<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="st.css">
    <title>Uczniowie</title>
</head>
<body>
<a href="wstaw.php" >Wstaw</a>
<a href="pobierz.php" >Pobierz</a>

<?php
$pol = mysqli_connect('localhost','root','','uczniowie1');

$zaptanie = "SELECT * FROM dane";

$wynik = mysqli_query($pol,$zaptanie);
echo "<table>";
echo "<tr><th>imie</th><th>nazwisko</th><th>wiek</th></tr>";
while($tablica = mysqli_fetch_row($wynik)){
    $im = $tablica['1'];
    $na = $tablica['2'];
    $w = $tablica['3'];
    $id = $tablica['0'];
    echo "<tr><td>" .  $tablica['1'] . "</td>";
    echo "<td>" .  $tablica['2'] . "</td>";
    echo "<td>" .  $tablica['3'] . "</td>";            
    echo "<td>" ."<a href='edycja.php?imie=$im&nazwisko=$na&wiek=$w&id=$id'>Edytuj </a>" . "</td></tr>";                
}
echo "</table>";


?>

</body>
</html>