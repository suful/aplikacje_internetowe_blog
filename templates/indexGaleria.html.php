<?php include 'header.html.php'; ?>
	<div id="lewa_strona">
		<h1>STRONA GŁÓWNA</h1>
		<table style="text-align: center; display: inline;">
			<?php if ($this->get('galeria') > 0 ) { foreach($this->get('galeria') as $galeria) { ?>
			<tr>
				<td style="font-size: 30px;"><?= $galeria['name_gal']; ?></a></td>
			</tr>
			<tr>
				<td><img style="width: 500px; border: 1px solid gold;" src="data:image/jpeg;base64,<?= base64_encode($galeria['image_gal']); ?>" /></td>
			</tr>
			<tr>
				<td style="width: 200px;"><?= $galeria['description_gal']; ?></td>
			</tr>
			
				<!-- <td><?= $galeria['category']; ?></td> -->
			
				<?php if (($_SESSION['id']) == 1) {
				?>
			<tr>
				<td><a href="?task=galeria&amp;action=delete&amp;id=<?= $galeria['id']; ?>">usuń</a></td>
			</tr>
			<?php } } } ?>
		</table>
	</div>
<?php include 'footer.html.php'; ?>