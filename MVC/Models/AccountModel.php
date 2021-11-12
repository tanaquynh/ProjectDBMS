<?php 
	class AccountModel extends Database {
		public function checkPassword($password) {
		 	$query = "SELECT * FROM useraccounts";
		 	$data = $this->getData($query);
		 	
		}
	}
?>