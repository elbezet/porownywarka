<?php
$conn=mysql_connect('localhost', 'ofergra', 'haslo!');
if (!$conn)
 {
     print "Błąd: nie udało się połączyć z bazą<br>" ;
     exit;
 }
 $db = @mysql_select_db('ofergra', $conn);

 $title = $_POST["title"];
 $price = $_POST["price"];
 $seller = $_POST["seller"];

   $sql = "INSERT INTO deals (title, price, sellerName) VALUES ('$title', '$price', '$seller')";
   $query = mysql_query($sql);

   echo "Pomyślnie dodano";
?>
