<?php namespace controller;

include_once('../common/view.php');
include_once('../entity/article.php');
include_once('../dao/factory.php');

use common\View;
use entity\Article;
use dao\Factory;


if(isset($_GET['action']))
{
	$action = $_GET['action'];
	ArticleController::$action($_GET);
}


if(isset($_POST['action']))
{
	$action = $_POST['action'];
	ArticleController::$action($_POST);
}

class ArticleController
{
	public static function search($req)
	{
		$boul = new Article();
		$facto = new Factory();
		$list = serialize($facto->search($boul, ""));
		View::show('article_search', array('data' => urlencode($list)));
	}

	public static function create($req)
	{
	
		$title = $req['title'];
		$text = $req['text'];
		$date = $req['date'];

		$boul = new Article();
		$facto = new Factory();

		$boul->set_title($title);
		$boul->set_text($text);
		$boul->set_date($date);

		$facto->create($boul);

		header('Location:/blog/controller/article.php?action=search');
	}

	public static function read($req)
	{

		$boul = new Article();

		$boul->set_id($req['id']);

		$facto = new Factory();
		$found = $facto->read($boul);

		View::show('article_read', array('id' => $found->get_id(), 'title' => $found->get_title(), 'text' => $found->get_text(),'date' => $found->get_date() ));
	}

	public static function update($req)
	{
		$title = $req['title'];
		$text = $req['text'];
		$date = $req['date'];

		$boul = new Article();

		$boul->set_id($req['id']);
		$facto = new Factory();

		$boul->set_title($title);
		$boul->set_text($text);
		$boul->set_date($date);

		$facto->update($boul);

		header('Location:/blog/controller/article.php?action=search');
	}

	public static function delete($req)
	{

	}
}

 ?>