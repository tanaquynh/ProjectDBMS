<?php
	class Account extends Controller {
		public function default () {
			$model = $this->model("AccountModel");
			$this->view("master", 
				["Page"=>"AccountView",
				"title"=>"Thay đổi mật khẩu"]);
		}

		public function checkPass() {
			$result = json_decode($this->model->checkPassword($_POST["username"], $_POST["pass"]));
			return $result;
		}

		public function saveNewPass() {
			$result = json_decode($this->model->changePass($_POST["newpassword"]));
			return $result;
		}
	}
?>