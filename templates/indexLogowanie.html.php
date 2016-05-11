<?php include 'header.html.php';

if(($_SESSION['logged'])==true) {
		echo "Zalogowałeś się! twoje id to : ".$_SESSION['id']." </br> <a href='index.php'>Strona główna</a> ";
	}
	else {
		echo "<div style='color:red'>Login i/lub hasło nieprawidłowe</div> </br> <a href='index.php'>Strona główna</a> </br> <a href='index.php?task=logowanie&action=add'>Zaloguj się ponownie</a>";
	}


include 'footer.html.php'; ?>