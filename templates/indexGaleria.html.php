<?php include 'header.html.php'; ?>

<h1>Galeria</h1>
<table>
    <tr>
        <td>Tytuł</td>
        <td>Zdjecie</td>
        <td>Opis</td>
        <td>Kategoria</td>
        <td>&nbsp;</td>
    </tr>
    <?php if ($this->get('galeria') > 0 ) { foreach($this->get('galeria') as $galeria) { ?>
    <tr>
        <td><?= $galeria['name_gal']; ?></a></td>
        <td><?= $galeria['image_gal']; ?></td>
        <td><?= $galeria['description_gal']; ?></td>
        <td><?= $galeria['category']; ?></td>
		<?php if (($_SESSION['id']) == 1) {
		?>
        <td><a href="?task=galeria&amp;action=delete&amp;id=<?= $galeria['id']; ?>">usuń</a></td>
    </tr>
    <?php } } } ?>
</table>

<?php include 'footer.html.php'; ?>