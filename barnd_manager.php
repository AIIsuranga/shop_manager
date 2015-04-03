<?php
require 'db_config.php';
class brand_manager{
	private $db_obj
	function __construct(){
		$db_obj = new db_class();
	}

	public function insert_brand($brand_name,$contact_no,$email,$reseller_id){
			$table = 'brand';
			$data_array = array($brand_name,$contact_no,$email,$reseller_id);
			$col_array  = array('brand-name','contact-no','email','reseller-id');
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