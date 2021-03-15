<?php  
class Circle implements Shape{
	private $radius;

	public function _construct($radius)
	{
		$this -> radius = $radius;
	}
	public function calsArea()
	{
		return $this -> radius * $this -> radius *pi();
	}
}
?>