<?php
class card_module extends card_view{
	
	 protected function module_insertcard(){
		return $this->view_insertcard();
	}
	protected function module_insert($f){
	
	if($f['user card']['value']=="" or $f['number card']['value']==""){
	$f ['RV']['MODAL']=cls_page::SHOW_BLOCK ('هشدار','لطفا اطلاعات را وارد کنید ','MODAL','type_caution');
	 return $f;
	}
	 else{
	     $db=new cls_database;
		//check for that card is exist or not
		$db->do_query("select card name from insert where card name=?" ,array($user));
		}
		
		if($db->row_count()==0) {
			//card isn't exists, going to save card.
			$db->do_query("INSERT INTO insert (cardname,price) VALUES (?,?)",array($f['user card']['VALUE'],$f['number card']['VALUE']));
			$f['RV']['MODAL'] = cls_page::SHOW_BLOCK('ثبت','عملیات درج کارت با موفقیت انجام شد','MODAL','type-success');
			//clear text boxes
			$f['user card']['VALUE']="";
			$f['number card']['VALUE']="";   
			return $f;
		}
		
		else{
			//card is exist before
			//show message in modal 
			$f['RV']['MODAL'] = cls_page::SHOW_BLOCK('خطا','نام کارت قبلا ثبت شده است','MODAL','type-danger');
			return $f;
		}
	
	}
	
}
?>
