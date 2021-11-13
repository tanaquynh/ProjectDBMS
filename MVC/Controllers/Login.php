<?php
	class Login extends Controller {
		public function default () {
			$this->view("LoginView", 
				[]);
		}

		public function checkUser() {
			$model = $this->model("LoginModel");
			$result = json_decode($model->checkUser($_POST["username"], $_POST["password"]));
			return $result;
		}
	}
?>