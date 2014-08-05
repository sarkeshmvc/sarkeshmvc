<?php
 class card extends card_module{
 
	public function insertcard(){

		return $this->module_insertcard();

}
/*
	INPUT: ELEMENTS
	THIS FUNCTION INSERT CARD IN DATABASE
	OUTPUT: ELEMENTS
*/
	public function insert($e){
	
		return $this->module_insert($e);
}
	
}   
?>
