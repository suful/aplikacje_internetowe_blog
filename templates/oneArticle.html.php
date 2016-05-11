<?php include 'header.html.php'; ?>

    <?php foreach($this->get('articles') as $articles) { ?>
<h1><?= $articles['title']; ?></h1>
autor: <?= $articles['autor']; ?>, data dodania: <?= $articles['date_add']; ?><br />
Kategoria: <?= $articles['name']; ?>

<p><?= $articles['content']; ?></p>
    <?php } ?>

<? include 'footer.html.php'; ?>