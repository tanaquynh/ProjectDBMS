<?php 
	class HomeModel extends Database {
		public function getAccount($username) {
		 	$query = "SELECT * FROM useraccounts";
		 	$data = $this->getData($query);
		 	;
		}
	}
?>