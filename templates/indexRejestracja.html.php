<?php include 'header.html.php'; ?>

<?php if((($_SESSION['rejestracja']) == true) and (($_SESSION['id']) == false)) { ?>
<div id="lewa_strona">
	<br>Zarejestrowałeś się! <br><a href='index.php'>Strona główna</a></br> <a href='index.php?task=logowanie&action=add'>Zaloguj się</a>
</div>
<?php } if((($_SESSION['rejestracja']) == false) and (($_SESSION['id']) == false)){ ?> 
<div id="lewa_strona">
	<br><div style="color:red">Błędna rejestracja, spróbuj jeszcze raz. </div> </br> <a href='index.php'>Strona główna</a> </br> <a href='index.php?task=rejestracja&action=add'>Zarejestruj się ponownie</a>
</div>
	<?php } ?>
	
<?php if (($_SESSION['id']) == 1) { ?>
<div id="lewa_strona">
	<h1>Lista uzytkownikow</h1>
	<table>
		<tr>
			<td>Login</td>
			<td>imie</td>
			<td>email</td>
			<td>status</td>
			<td>&nbsp;</td>
		</tr>
		<?php if ($this->get('rejestracja') > 0 ) { foreach($this->get('rejestracja') as $rejestracja) { ?>
		<tr>
			<td><a href="?task=rejestracja&amp;action=one&amp;id=<?= $rejestracja['id']; ?>"><?= $rejestracja['login']; ?></a></td>
			<td><?= $rejestracja['name']; ?></td>
			<td><?= $rejestracja['email']; ?></td>
			<td><?= $rejestracja['status']; ?></td>
			<td><a href="?task=rejestracja&amp;action=delete&amp;id=<?= $rejestracja['id']; ?>">usuń</a></td>
		</tr>
	<?php } } ?>
	</table>
</div>
	<?php } ?>

<?php include 'footer.html.php'; ?>