<?php 
	class AccountModel extends Database {
		public function checkPassword($username, $password) {
		 	$query = "SELECT pass FROM useraccounts WHERE username = \"$username\" AND pass = \"$password\"";
		 	$data = json_decode($this->getData($query));
			$result = false;
			if ($data[0]["pass"] === $password) {
				$result = true;
			}
		 	return json_encode($result);
		}

		public function changePass($newpass) {
			$query = "";
			$data = json_decode($this->getData($query));
			return json_encode(true);
		}
	}
?>