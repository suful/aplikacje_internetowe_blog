<?php include 'header.html.php'; ?>

<?php if (($_SESSION['id']) == 1) {
	?>

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
<?php } } }
	else {
		header('Location: index.php');
	} ?>

</table>

<?php include 'footer.html.php'; ?>