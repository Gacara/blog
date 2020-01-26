<h2>Liste des articles</h2>
<a href="/blog/view/article_create.php">Ajouter</a><br><hr>
<?php 
include_once('../entity/article.php');

if(isset($_GET['data']))
{

	$data = urldecode(($_GET['data']));
	$data = unserialize($data);

	foreach ($data as $key => $value) 
	{
		?>
			<a href="/blog/controller/article.php?action=read&id=<?=$value->get_id()?>"><?=$value->get_title()?></a><br>
		<?php
	}
}

?>