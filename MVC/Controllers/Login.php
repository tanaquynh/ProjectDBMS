<?php
	class Login extends Controller {
		public function default () {
			$this->view("LoginView", 
				[]);
		}

		public function checkUser() {
			// $model = $this->model("LoginModel");
			// $result = $model->checkUser($_POST["username"], $_POST["password"]);
			// return $result;
		}
	}
?>