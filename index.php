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
<input type="text" tabindex="0" size="30" placeholder="Wprowadź tytuł którego szukasz...">
<input type="submit" value="Szukaj">
</div>

<div id="okazje">
<h2>Okazje:</h2>
<?php
$query = "SELECT g.*, d.price FROM `games` g INNER JOIN `deals` d ON g.title = d.title";
$title = mysql_query($query);

echo '<table style="display: inline;"><tr>';
while ($wiersz = mysql_fetch_row($title))
 {
  echo '<td style="text-align: center; width: 180px;"><a href="game.php?id='.$wiersz[0].'"><img src="img/'.$wiersz[2].'.jpg" alt="cover" width="150px" height="200px" /> <br /><p>'.$wiersz[1].'</a></p> <p>Cena od: '.$wiersz[5].' zł </p></td>';
 }
echo '</tr></table>';
?>
</div>

<div id="FPS">
  <h2>FPS:</h2>
<?php
include('fps.php');
?>
</div>

<div id="RPG">
  <h2>RPG:</h2>
<?php
include('rpg.php');
?>
</div>

<div id="deals">
  <h2>Deals:</h2>
<?php
include('deals.php');
?>

<div id="footer">
<p>footer</p>
</div>
</div>
</body>
</html>
