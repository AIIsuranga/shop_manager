<?php
	class db_class{
		private $con;
		function __construct(){
			$host = 'localhost';
			$database = 'shop-order';
			$username = '';
			$password = '';

			$this->con = new mysqli_connect($host,$database,$username,$password);
			if($this->con->connect_error){
				die("Connection Faild ; ".$this->con->connect_error);
			}
		}

		public function insert($columns,$data,$table){
			//Check Number Of Columns And Number Of Data
			if(count($columns)!=count($data)){
				return -1;
			}
			//Making the column query
			$col_qry = '(';
			foreach ($columns as $col) {
				$col_qry .= $col.','; 
			}
			$col_qry = rtrim($col_qry,',');
			$col_qry .= ')';
			//Creating Data Query
			$data_qry = '(';
			foreach ($data as $dat) {
				$data_qry .= $dat.','; 
			}
			$data_qry = rtrim($data_qry,',');
			$data_qry .= ')';
			//Making Data Inserting Query
			$query = 'INSERT INTO'.$table;
			$query .= $col_qry;
			$query .= 'VALUES'.$data_qry.';';
			//Inserting Data
			$result = $this->con->query($query);
			if($result==TRUE){
				return 1;
			} 
			else{
				return 0;
			} 
		}
	}
?>