<!doctype html>
<head>
</head>

<body>
<?php
$conn=mysql_connect('localhost', 'ofergra', 'Bartekd1!');
if (!$conn)
 {
     print "Błąd: nie udało się połączyć z bazą<br>" ;
     exit;
 }
 $db = @mysql_select_db('ofergra', $conn);
$query = "SELECT title, cover, description, type FROM games WHERE id='".(int)$_GET['id']."'";
$wynik = mysql_query($query); // 1

while ($row = mysql_fetch_row($wynik)) {
  echo "<br />";
echo "<center><h3>Tytuł ".$row[0]."</h3></center><br />";
echo "<center><img src='img/".$row[1].".jpg' alt='cover' /></center>";
echo "<center>Opis: ".$row[2]."</center>";
echo "<center>Typ: ".$row[3]."</center>";
}

echo "<p>OFERTY:</p>";

$zmienna = "SELECT title FROM games WHERE id='".(int)$_GET['id']."'";
$zmienna2 = mysql_query($zmienna);
$wynik = mysql_fetch_array($zmienna2);


$query2 = "SELECT d.sellerName, d.title, d.price, s.logo FROM deals d INNER JOIN sellers s ON d.sellerName = s.sellerName WHERE title like '$wynik[0]' ORDER BY d.price ASC ";
$wynik2 = mysql_query($query2); // 1

echo "<table>";
while ($row = mysql_fetch_row($wynik2)) {
  echo "<tr><td>".$row[3]."</td><td>Sprzedawca: ".$row[0]."</td><td> Tytuł: ".$row[1]." </td><td>Cena: ".$row[2]." zł</td></tr>";
}
echo "</table>";
?>
</body>
