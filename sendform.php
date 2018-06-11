<?php
$conn=mysql_connect('localhost', 'ofergra', 'haslo!');
if (!$conn)
 {
     print "Błąd: nie udało się połączyć z bazą<br>" ;
     exit;
 }
 $db = @mysql_select_db('ofergra', $conn);
$companyName = $_POST["companyName"];
$street = $_POST["street"];
$address1 = $_POST["address1"];
$address2 = $_POST["address2"];
$city = $_POST["city"];
$country = $_POST["country"];
$companyType = $_POST["companyType"];
$nip = $_POST["nip"];
$regon = $_POST["regon"];
$logo = $_POST["logo"];
$name = $_POST["name"];
$surename = $_POST["surename"];
$email = $_POST["email"];
$phoneNumber = $_POST["phoneNumber"];
$shopName = $_POST["shopName"];
$shopDesc = $_POST["shopDesc"];
$shopURL = $_POST["shopURL"];
$termsURL = $_POST["termsURL"];
$notificationEmail = $_POST["notificationEmail"];
$faqEmail = $_POST["faqEmail"];
$processingAgree = $_POST["proccessingAgree"];
$marketingAgree = $_POST["marketingAgree"];

$insert = "INSERT INTO seller (companyName, street, address1, address2, city, country, companyType, nip, regon, logo, name, surename, e-mail, phoneNumber, shopName, shopDesc, shopURL, termsURL, notificationEmail, faqEmail, proccessingAgree, marketingAgree) VALUES ('$companyName', '$street', '$address1', '$address2', '$city', '$country', '$companyType', '$nip', '$regon', '$logo', '$name', '$surename', '$email', '$phoneNumber', '$shopName', '$shopDesc', '$shopURL', '$termsURL', '$notificationEmail', '$faqEmail', '$processingAgree', '$marketingAgree') ";
$query = mysql_query($insert);

echo "Pomyślnie dodano";


 ?>
