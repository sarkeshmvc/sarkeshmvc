<?php
 class card extends card_module{
  public function insertcard(){

  return $this->module_card();

}
/*
	INPUT: ELEMENTS
	THIS FUNCTION INSERT CARD IN DATABASE
	OUTPUT: ELEMENTS
*/
public function insert($e){
	return $this->module_insert($e);
}
//توابع برای نمایش کارت
// نمایش صفحه کارت ها
	public function showcard(){

  return $this->module_showcard();
}

}   
?>

