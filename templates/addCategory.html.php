<?php include 'header.html.php'; 

	if((($_SESSION['logged']) == true) && ((($_SESSION['id']) == 1))) { ?>
<div id="lewa_strona">
		<h1>Dodaj kategorię</h1>
		<form action="?task=categories&amp;action=insert" method="post">
			Nazwa kategorii: <input type="text" name="name" /><br />
			<input type="submit" value="Dodaj" />
		</form>
</div>
<?php } 
	else { 
		header('Location:index.php');
	}
	
	include 'footer.html.php'; ?>