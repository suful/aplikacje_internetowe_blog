<?php include 'header.html.php'; 

	if((($_SESSION['logged']) == true) && ((($_SESSION['id']) == 1))) { ?>

		<h1>Dodaj Zdjecie</h1>
		<form action="?task=galeria&amp;action=insert" method="post">
			Tytuł: <input type="text" name="name_gal" /><br />
			Zdjęcie: <input type="file" name="image" /><br />
			Opis: <input type="text" name="description_gal" /><br />
			Kategoria: <input type="text" name="category" /><br />
			<input type="submit" value="Dodaj" name="dodaj_zdjecie"/>
		</form>

<?php } 
	else { 
		header('Location:index.php');
	}
	
	include 'footer.html.php'; ?>