<?php 
$id = (isset($_GET['id'])) ? $_GET['id'] : 0;
$title = (isset($_GET['title'])) ? $_GET['title'] : "inconnu";
$text = (isset($_GET['text'])) ? $_GET['text'] : 0;
$date = (isset($_GET['date'])) ? $_GET['date'] : 0;
 ?>
<h2>Voir un article</h2>
<a href="/blog/">Liste</a> | <a href="/blog/view/article_create.php">Ajouter</a><br><hr>
<p>L'article numéro  <strong><?= $id ?></strong></br></p>
<p><strong>Titre : </strong><?= $title ?></br></p>
<p><strong>Article : </strong><?= $text ?></br></p>
<p>Ecrit le : <strong></strong><?= $date ?></p>



<form id='form_update_article' onsubmit="return form_action('form_update_article')" action="article.update" method="POST">
	<label>Titre</label><br>
	<input text="<?= $title ?>" type="text" name='title'><br>
	<label>Text</label><br>
	<textarea text="<?= $text ?>" name="text" rows="" cols="50"> </textarea><br>
	<label>Date</label><br>
	<input type="date" value="<?= $date ?>" name="date"><br>
	<input type="submit">
</form>
<script src="/blog/common/js/main.js"></script>