<?php
require 'db_config.php';
class reseller_manager{
	private $db_obj;
	function __construct(){
		$db_obj = new db_class();
	}

	public function insert_reseller($name,$address,$email,$phone_no){
		$table = 'reseller';
		$data_array = array($name,$address,$email,$phone_no);
		$col_array  = array('name','address','email','phone-no');
		$result = $this->$db_obj->insert($col_array,$data_array,$table);
		if($result==1){
			return 1;
		}
		else{
			return 0;
		}
	}
}
?>