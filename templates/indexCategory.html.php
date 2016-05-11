<?php include 'header.html.php'; ?>

<h1>Lista kategorii</h1>
<table>
    <tr>
        <td>Nazwa</td>
        <td>&nbsp;</td>
    </tr>
    <?php foreach($this->get('catsData') as $cats) { ?>
    <tr>
        <td><?= $cats['name']; ?></td>
	<?php if (($_SESSION['id']) == 1) {
	?>
        <td><a href="?task=categories&amp;action=delete&amp;id=<?= $cats['id']; ?>">usuń</a></td>
    </tr>
    <?php } } ?>
</table>

<?php include 'footer.html.php'; ?>