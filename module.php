//تغیرات توسط حسین منتصری داده شده است

<?php
class card_module extends card_view{
	
	 public function module_card(){
		return $this->view_card();
	}
	public function module_insert($e){
	//create a table
	$cr=cls_orm::dispense('insert');
	$cr->cardname=$e['usercard']['VALUE'];
	$cr->price=$e['numbercard']['VALUE'];
   
	// شمارش تعداد سطر تکراری
		$db=cls_orm::count('insert',"cardname=?",array($e['usercard']['VALUE'])); 
		if($db->count!=0)
		{
		// اگه همچنین نام کارتی وجود نداشت ذخیرش کن در جدول اینسرت
	    cls_orm::store($cr); 
		//نمایش پیغام ثبت
			$e['RV']['MODAL'] = cls_page::SHOW_BLOCK('ثبت','عملیات درج کارت با موفقیت انجام شد','MODAL','type_succes');
			//clear textboxes
			$e['usercard']['VALUE']="";
			$e['numbercard']['VALUE']="";   
			return $e;
		}
		else{
			//card is exist before
			//show message in modal 
			$e['RV']['MODAL'] = cls_page::SHOW_BLOCK('خطا','نام کارت قبلا ثبت شده است','MODAL','type_danger');
			return $e;
		}
	
	}
	//عملیات مربوط به نمایش کارت
	// تابع واکشی اطلاعات از جدول اینسرت
	public function  module_showcard(){
    $f=cls_orm::find("insert");
    return $this->view_showcard($f);

}
}
?>
//تغیرات توسط حسین منتصری داده شده است

