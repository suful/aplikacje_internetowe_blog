<?php include 'header.html.php'; 

	if((($_SESSION['logged']) == true) && ((($_SESSION['id']) == 1))) { ?>
<div id="lewa_strona">
		<h1>Dodaj artykuł</h1>
		<form style="text-align: center; display: inline;" action="?task=articles&amp;action=insert" method="post">
			Tytuł: <input type="text" name="title" /><br />
			Autor: <input type="text" name="author" /><br />
			Data dodania: <input type="text" name="date_add" value="<?= date("Y:m:d"); ?>" /><br />
			Treść:<br />
			<textarea name="content"></textarea><br />
			Kategoria: <select name="cat" size="0">
				<?php foreach($this->get('catsData') as $cats) { ?>
					<option value="<?= $cats['id'] ;?>"><?= $cats['name']; ?></option>
				<?php } ?>
			</select><br />
			<input type="submit" value="Dodaj" />
		</form>
</div>
<?php } 
	else { 
		header('Location:index.php');
	}
	
	include 'footer.html.php'; ?>