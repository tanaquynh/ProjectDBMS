<?php 
	class LoginModel extends Database {
		public function checkUser($username, $password) {
		 	$query = "SELECT username, pass FROM useraccounts WHERE username = $username AND pass = $password";
		 	$data = $this->getData($query);
			$result = false;
		 	if($data.$username !== "Error querying database.") {
				$result = true;
			};
			return json_encode($result);
        }
	}
?>