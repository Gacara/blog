<?php namespace entity;

class Article
{

	private $id;
	private $title;
	private $text;
	private $date;

	public function get_id(){ return $this->id; }
	public function get_title(){ return $this->title; }
	public function get_text(){ return $this->text; }
	public function get_date(){ return $this->date; }

	public function set_id($value){ $this->id = $value; }
	public function set_title($value){ $this->title = $value; }
	public function set_text($value){ $this->text = $value; }
	public function set_date($value){ $this->date = $value; }

	public function properties(){ return get_object_vars($this); }
	public function properties_names(){ return array_keys(get_object_vars($this)); }
	public function to_string() { return "title : $this->title, text : $this->text, category_id : $this->category_id,  date : $this->date"; }
}

?>