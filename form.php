<!doctype html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
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
<table>
<tr><td><p style="text-align:center;">Formularz zgłoszeniowy</p></td></tr>
<form action="sendform.php" method="post">
<tr><td><p>Nazwa firmy:</td><td> <input type="text" size="30" tabindex="0" name="companyName"></p></td></tr>
<tr><td><p>Ulica:</td><td> <input type="text" size="30" tabindex="0" name="street"></p></td></tr>
<tr><td><p>Nr budynku:</td><td> <input type="text" size="15" tabindex="0" name="address1"></td><td> Nr lokalu: <input type="text" size="15" tabindex="0" name="address2"></p></td></tr>
<tr><td><p>Miasto:</td><td> <input type="text" size="30" tabindex="0" name="city"></p></td></tr>
<tr><td><p>Kraj:</td><td> <input type="text" size="30" tabindex="0" name="country"></p></td></tr>
<tr><td><p>Rodzaj działalności:</td><td> <input type="text" size="30" tabindex="0" name="companyType"></p></td></tr>
<tr><td><p>NIP:</td><td> <input type="text" size="30" tabindex="0" name="nip"></p></td></tr>
<tr><td><p>Regon:</td><td> <input type="text" size="30" tabindex="0" name="regon"></p></td></tr>
<tr><td><p>Logo:</td><td> <input type="file" value="wybierz logo" tabindex="0" name="logo"></p></td></tr>
<tr><td><p style="text-align:center;">Osoba kontaktowa:</td><td></p></td></tr>
<tr><td><p>Imię:</td><td> <input type="text" size="30" tabindex="0" name="name"></p></td></tr>
<tr><td><p>Nazwisko:</td><td> <input type="text" size="30" tabindex="0" name="surename"></p></td></tr>
<tr><td><p>Adres e-mail:</td><td> <input type="text" size="30" tabindex="0" name="email"></p></td></tr>
<tr><td><p>Adres e-mail (proszę powtórzyć):</td><td> <input type="text" size="30" tabindex="0"></p></td></tr>
<tr><td><p>Numer telefonu:</td><td> +48<input type="text" size="30" tabindex="0" maxlength="9" name="phoneNumber"></p></td></tr>
<tr><td><p style="text-align:center;">Dane sklepu</p></td></tr>
<tr><td><p>Nazwa sklepu:</td><td> <input type="text" size="30" tabindex="0" name="shopName"></p></td></tr>
<tr><td><p>Opis sklepu (wyświetlany przy ofercie):</td><td> <input type="text" size="30" tabindex="0" name="shopDesc"></p></td></tr>
<tr><td><p>Adres URL sklepu:</td><td> <input type="text" size="30" tabindex="0" name="shopURL"></p></td></tr>
<tr><td><p>Regulamin sklepu (URL):</td><td> <input type="text" size="30" tabindex="0" name="termsURL"></p></td></tr>
<tr><td><p>E-mail do powiadomień:</td><td> <input type="text" size="30" tabindex="0" name="notificationEmail"></p></td></tr>
<tr><td><p>E-mail do obsługi pytań użytkowników:</td><td> <input type="text" size="30" tabindex="0" name="faqEmail"></p></td></tr>
<tr><td><p>Zgody</p></td></tr>
<tr><td><p>Wyrażam zgodę na przetwarzanie danych osobowych <input type="checkbox" required name="proccessingAgree"></p></td></tr>
<tr><td><p>Wyrażam zgodę na mailing <input type="checkbox" name="marketingAgree"></p></td></tr>
<tr><td><p><input type="submit" value="Zarejestruj"></p></td></tr>
</form>
