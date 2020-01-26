<?php namespace common;

class View
{
	public static function show($view, $data)
	{
		$nb_param = count($data);
		$index = 0;
		$params = "";
		foreach ($data as $key => $value) {
			$index ++;
			$params .= "$key=$value&";
		}
;
		
		$url = "/blog/view/$view.php?$params";
		header('Location:'.$url);
	}
}

?>
