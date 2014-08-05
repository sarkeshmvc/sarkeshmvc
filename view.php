<?php
class card_view{
	protected function view_insertcard(){
		$form=new ctr_form('ثبت کارت');
		
		$user=new ctr_textbox;
		$user->configure('NAME','usercard');
		$user->configure('SIZE',6);
		$user->configure('LABLE',_('نام کارت'));
		$user->configure('PLACE_HOLDER',_(' نام کارت را وارد کنید'));
		
		$price=new ctr_textbox;
		$price->configure('NAME','numbercard');
		$price->configure('SIZE',6);
		$price->configure('LABLE',_('قیمت'));
		$price->configure('PLACE_HOLDER',_(' قیمت را به عدد وارد کنید'));
		$price->configure('HELP','مثال:2300000');
		$price->configure('ADDON','ریال');
		
		$bottun=new ctr_button;
		$bottun->configure('SIZE',6);
		$bottun->configure('LABEL',_('ثبت'));
		$bottun->configure('TYPE','primary');//?????????????
		$bottun->configure('P_ONCLICK_PLUGIN','insert-card');
		$bottun->configure('P_ONCLICK_FUNCTION','insert');

		$form->add_array(array($user,$price,$bottun));

		return array(_('ثبت کارت'),$form->draw());
	}
}		
?>	 
