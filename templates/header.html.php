<!DOCTYPE html>
<html lang="pl">
<head>
        <title>BLOG</title>
        <meta charset="utf-8" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
	
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.6";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>


		<div id="pasek_gorny">
			<div id="menu_przyciski">
			<table align="center" style="border-spacing: 25px 5px">
			<?php if(($_SESSION['logged']) == false) { ?>
				<td><a href="index.php">Strona Główna</a></td>
				<td><a href="?task=categories&amp;action=index">Lista kategorii</a></td>
				<td><a href="?task=articles&amp;action=index">Lista artykułów</a></td>
				<td><a href="?task=galeria&amp;action=all">Galeria</a></td>
				<td><a href="?task=rejestracja&amp;action=add">Rejestracja</a></td>
				<td><a href="?task=logowanie&amp;action=add">Logowanie</a></td>
			<?php } else if((($_SESSION['logged']) == true) && ((($_SESSION['id']) == 1))) { ?>
				<td><a href="index.php">Strona Główna</a></td>
				<td><a href="?task=categories&amp;action=add">Dodaj kategorię</a></td>
				<td><a href="?task=categories&amp;action=index">Lista kategorii</a></td>
				<td><a href="?task=articles&amp;action=add">Dodaj artykuł</a></td>
				<td><a href="?task=articles&amp;action=index">Lista artykułów</a></td>
				<td><a href="?task=galeria&amp;action=add">Dodaj zdjecie</a></td>
				<td><a href="?task=galeria&amp;action=all">Galeria</a></td>
				<td><a href="?task=rejestracja&amp;action=index">Wyswietl uzytkownikow</a></td>
				<td><a href="?task=wyloguj">Wyloguj</a></td>		
			<?php } else if((($_SESSION['logged']) == true)) { ?>
				<td><a href="index.php">Strona Główna</a></td>
				<td><a href="?task=categories&amp;action=index">Lista kategorii</a></td>
				<td><a href="?task=articles&amp;action=index">Lista artykułów</a></td>
				<td><a href="?task=galeria&amp;action=all">Galeria</a></td>
				<?php if (($_SESSION['id']) == 1) { ?>
				<td><a href="?task=rejestracja&amp;action=index">Wyswietl uzytkownikow</a></td>
				<?php } ?>
				<td><a href="?task=wyloguj">Wyloguj</a></td>
			<?php } ?>
			</table>
			</div>
		</div>
		
		<div id="top_pannel_pasek">
		</div>
		
		<div id="reklama">
		</div>
		
        </ul>