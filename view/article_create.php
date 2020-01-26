<h2>Ecrire un article</h2>
<a href="/blog/">Blog</a><br><hr>
<form id='form_create_article' onsubmit="return form_action('form_create_article')" action="article.create" method="POST">
	<label>Nom</label><br>
	<input placeholder="Titre" type="text" name='title'><br>
	<label>Text</label><br>
	<textarea placeholder="Texte" name="text" rows="" cols="50"> </textarea><br>
	<label>Date</label><br>
	<input type="date" name="date"><br>
	<input type="submit">
</form>
<script src="/blog/common/js/main.js"></script>