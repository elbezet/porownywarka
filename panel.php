<!doctype html>
<head>

</head>

<body>
<?php
$conn=mysql_connect('localhost', 'ofergra', 'haslo!');
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

<div id="shopper">
<p>Witaj w panelu sprzedawcy</p>

<p>Wyeksportuj plik CSV z tytułami i cenami:</p>
<input type="file"><input type="submit">

<p>Przed załadowaniem pliku, sprawdź jak wygląda poprawny format <a href="#">tutaj</a></p>


<p>Jeżeli nie masz pliku CSV możesz dodać swoje gry ręcznie przez poniższy formularz:</p>
<form action="odbior.php" method="post">
<p>Tytuł (pełna nazwa jak na okładce): <input type="text" placeholder="Call of Duty: Black Ops 3" size="30" tabindex="0" name="title"></p>
<p>Cena: <input type="text" placeholder="199" size="3" tabindex="1" name="price"></p>
<p><input type="submit" value="Wyślij">
</form>

<h2>Przedmioty, wystawione przez Twój sklep:</h2>
<table border="1px solid">
<?php
$items = "SELECT gry FROM tabele WHERE sprzedawca = sprzedawca"
?>

<h2>Saldo Twojego konta:</h2>
<p> pobieranie kwoty za dane kliknięcie z bazy</p>

<h2>Całkowita liczba przejść do Twojego sklepu</h2>
<p>pobieranie całkowitej liczby kliknięć z bazy</p>
<a href="#">Wyświetl kliknięcia dla poszczególnych aukcji</a>

</table>
</div>

</body>
