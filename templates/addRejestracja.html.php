<?php include 'header.html.php'; ?>
<div id="lewa_strona">
	<h1>Rejestracja</h1>
	<form action="?task=rejestracja&amp;action=insert" method="post">
		Login: <input type="text" name="login" autocomplete="off" required/><br />
		Haslo: <input type="password" name="password" required/><br />
		Powtorz haslo: <input type="password" name="password2" required/><br />
		Imie: <input type="text" name="name" required/><br />
		Email:<input type="text" name="email" required/><br />
	   
		<input type="submit" value="Dodaj" name="rejestruj"/>
	</form>
</div>
<?php include 'footer.html.php'; ?>