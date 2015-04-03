<?php
require 'db_config.php';
class product_manager{
	private $db_obj
	function __construct(){
		$db_obj = new db_class();
	}

	public function insert_product($brand_id,$product_desc,$unitprice,$sellprice){
		$table = 'product';
		$data_array = array($brand_id,$product_desc,$unitprice,$sellprice);
		$col_array  = array('brand-id','product-desc','unit-price','sell-price');
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