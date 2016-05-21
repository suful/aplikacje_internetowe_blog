<?php include 'header.html.php';

if(($_SESSION['logged'])==true) { ?>
	<div id="lewa_strona">
		<br>Zalogowałeś się! <a href='index.php'>Strona główna</a> 
	</div>
	<?php
	}
	else { ?>
	<div id="lewa_strona">
		<br><div style='color:red'>Login i/lub hasło nieprawidłowe</div> </br> <a href='index.php'>Strona główna</a> </br> <a href='index.php?task=logowanie&action=add'>Zaloguj się ponownie</a> 
	</div>
	<?php
	}


include 'footer.html.php'; ?>