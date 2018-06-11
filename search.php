<!doctype html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
</head>
<body>
  <?php
  $conn=mysql_connect('localhost', 'ofergra', 'haslo');
  if (!$conn)
   {
       print "Błąd: nie udało się połączyć z bazą<br>" ;
       exit;
   }
   $db = @mysql_select_db('ofergra', $conn)
  ?>
<div id="logo">
<p>logo</p>
</div>
<div id="menu">
<nav>
<ul>
<li><a href="link">Przycisk 1</a></li>
<li><a href="link">Przycisk 2</a></li>
<li><a href="link">Przycisk 3</a></li>
<li><a href="link">Przycisk 4</a></li>
</nav>
</div>

<div id="searchbar">
  <form action="search.php" method="post">
<input type="text" tabindex="0" size="100" placeholder="Wprowadź tytuł którego szukasz...">
<input type="submit" value="Szukaj">
</form>
</div>
<?php
$searchquery = "SELECT id, cover, title FROM games WHERE title like '%Battlefield%'";
$searchquery2 = mysql_query($searchquery);

echo '<table style="display: inline;"><tr>';
while ($wiersz = mysql_fetch_row($searchquery2))
 {
  echo '<td style="text-align: center; width: 180px;"><a href="game.php?id='.$wiersz[0].'"><img src="img/'.$wiersz[1].'.jpg" alt="cover" width="150px" height="200px" /> <br /><p>'.$wiersz[2].'</a></p> <p>Cena od: '.$wiersz[3].' zł </p></td>';
 }
echo '</tr></table>';
?>
