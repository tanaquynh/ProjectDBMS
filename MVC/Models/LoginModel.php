<?php 
	class LoginModel extends Database {
		public function checkUser($username, $password) {
		 	$query = "SELECT username, pass FROM accounts WHERE username = \"$username\" AND pass = \"$password\"";
		 	$data = json_decode($this->getData($query));
			$result = false;
			if (sizeof($data) !== 0) {
				$result = true;
			}
			return json_encode($result);
        }
	}
?>