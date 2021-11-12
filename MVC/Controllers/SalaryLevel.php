<?php
	class SalaryLevel extends Controller {
		public function default () {
			// $user = $this->model("HomeModel");
			//echo "Hello " . $user->GetStudent() . "!";
			// $content = $user->GetAccount("1");
			$this->view("master", 
				["Page"=>"SalaryLevelView",
				"title"=>"Mức lương"]);
		}
	}
?>