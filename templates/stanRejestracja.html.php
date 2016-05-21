<?php include 'header.html.php'; ?>

<?php if((($_SESSION['rejestracja']) == true)) { ?>
<div id="lewa_strona">
	Zarejestrowałeś się! <br><a href='index.php'>Strona główna</a> </br> <a href='index.php?task=logowanie&action=add'>Zaloguj się</a>
	<?php } else { ?> 
	<div style="color:red">Błędna rejestracja, spróbuj jeszcze raz. </div> </br> <a href='index.php'>Strona główna</a> </br> <a href='index.php?task=logowanie&action=add'>Zaloguj się ponownie</a>
</div>
	<?php } ?>

<?php include 'footer.html.php'; ?>