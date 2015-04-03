<?php
	require 'db_config.php';
	class Manage_PO{
		private $db_obj
		function __construct(){
			$db_obj = new db_class();
		}

		public function insert_po($product_id,$quantity,$batch_no,$expiaration){
			$table = 'product-order';
			$data_array = array($product_id,$quantity,$batch_no,$expiaration);
			$col_array  = array('product_id','quantity','batch_no','expiaration');
			$result = $this->$db_obj->insert($col_array,$data_array,$table);
			if($result==1){
				return 1;
			}
			else{
				return 0;
			}
		}
		
		public function get_po(){
			
		}


	}	
?>
