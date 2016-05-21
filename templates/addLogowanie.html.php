<?php include 'header.html.php';

if((($_SESSION['logged']) == true)) { 
	header('Location:index.php'); } ?>

<div id="lewa_strona">
		<h1>Logowanie</h1>
		<form action="?task=logowanie&amp;action=insert" method="post">
			Login: <input type="text" name="login" autocomplete="off" required/><br />
			Haslo: <input type="password" name="password"  required/><br />
		   
			<input type="submit" value="Zaloguj" name="wyslano"/>
		</form>
</div>
<?php include 'footer.html.php'; ?>