//تغیرات توسط حسین منتصری داده شده است

<?php
class card_view{
// نمایش  اطلاعات درج کارت
	public function view_card(){
		$form=new ctr_form();
		
		$user=new ctr_textbox;
		$user->configure('NAME','usercard');
		$user->configure('SIZE',6);
		$user->configure('LABEL',_('نام کارت'));
		$user->configure('PLACE_HOLDER',_(' نام کارت را وارد کنید'));
		
		$price=new ctr_textbox;
		$price->configure('NAME','numbercard');
		$price->configure('SIZE',6);
		$price->configure('LABEL',_('قیمت'));
		$price->configure('PLACE_HOLDER',_(' قیمت را به عدد وارد کنید'));
		$price->configure('HELP','مثال:2300000');
		$price->configure('ADDON','ریال');
		
		$button=new ctr_button;
		$button->configure('SIZE',9);
		$button->configure('LABEL',_('ثبت'));
		$button->configure('TYPE','primary');
		$button->configure('P_ONCLICK_PLUGIN','card');
		$button->configure('P_ONCLICK_FUNCTION','insert');

		$form->add_array(array($user,$price,$button));

		return array(_('ثبت کارت'),$form->draw());
	}
	//توابع مربوط به نمایش کارت
	public function view_showcard($f){
//$f=متغیر واکشی اطلاعات جدول اینسرت
//ساخت جدول
$l3=new ctr_LABEL;
$l4=new ctr_LABEL;
$l3->configure('LABEL',_('نام کارت'));
$l4->configure('LABEL',_('قیمت کارت'));

$row2=new ctr_row;
$row2->add($l3,2);
$row2->add($l4,3);
$tb = new ctr_table;
//حلقه برای کالکشن اف دیتا بیسو حرکت عنصر جی در کالشکن
foreach($f as $g)
{
$row=new ctr_row;
$l=new ctr_LABEL;	
$l2=new ctr_LABEL;	
//چسباندن لیبل برای هر سطر
$l->configure('LABEL',$g['cardname']);
$l2->configure('LABEL',$g['price']);
$b=new ctr_button;
$b->configure('LABEL','خرید');
//لینک آدرس دهی برای هر دکمه هنوز تابع بوی تعریف نشده است
$b->configure('HREF','http://localhost/sarkesh/?plugin=card&action=buy&id='.$g['id']);
$row->add($l,2);
$row->add($l2,2);
$row->add($b,2);
$tb->add_row($row);
}
 $form=new ctr_form('فرم نمایش کارت');
 $form->add_array(array($row2,$tb)); 
 return array(_('انتخاب کارت'),$form->draw());
		
}
}		
?>	 
//تغیرات توسط حسین منتصری داده شده است
