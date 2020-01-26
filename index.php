<?php 
$start_view = 'article_search';
$view = (isset($_GET['view'])) ? $_GET['view'] : "";
if(!empty($view)){
	$controller = explode("_", $view)[0];
	$action = explode("_", $view)[1];
    header('Location:/blog/controller/'.$controller.'.php?action='.$action);
} else {
	$controller = explode("_", $start_view)[0];
	$action = explode("_", $start_view)[1];
    header('Location:/blog/controller/'.$controller.'.php?action='.$action);
}

?>