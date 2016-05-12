<?php include 'header.html.php'; ?>

<h1>Galeria</h1>
<table border=1>
    <tr>
        <td>Tytuł</td>
        <td>Zdjecie</td>
        <td>Opis</td>
        <td>Kategoria</td>
    </tr>
    <?php if ($this->get('galeria') > 0 ) { foreach($this->get('galeria') as $galeria) { ?>
    <tr>
        <td><?= $galeria['name_gal']; ?></a></td>
        <td><img style="width: 500px;" src="data:image/jpeg;base64,<?= base64_encode($galeria['image_gal']); ?>" /></td>
        <td style="width: 200px;"><?= $galeria['description_gal']; ?></td>
        <td><?= $galeria['category']; ?></td>
		<?php if (($_SESSION['id']) == 1) {
		?>
        <td><a href="?task=galeria&amp;action=delete&amp;id=<?= $galeria['id']; ?>">usuń</a></td>
    </tr>
    <?php } } } ?>
</table>

<?php include 'footer.html.php'; ?>