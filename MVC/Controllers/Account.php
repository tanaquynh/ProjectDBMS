<?php
	class Account extends Controller {
		public function default () {
			// $user = $this->model("HomeModel");
			//echo "Hello " . $user->GetStudent() . "!";
			// $content = $user->GetAccount("1");
			$this->view("master", 
				["Page"=>"AccountView",
				"title"=>"Thay đổi mật khẩu"]);
		}
	}
?>