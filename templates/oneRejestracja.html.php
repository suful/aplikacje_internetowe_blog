<?php include 'header.html.php'; ?>

    <?php foreach($this->get('rejestracja') as $rejestracja) { ?>
<div id="lewa_strona">
	<h1><?= $rejestracja['login']; ?></h1>
	imie: <?= $rejestracja['name']; ?><br /> status: <?= $rejestracja['status']; ?><br />
	email: <?= $rejestracja['email']; } ?>
</div>
<? include 'footer.html.php'; ?>