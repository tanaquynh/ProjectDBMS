<?php
    class ListEmployee extends Controller {
		public function default () {
			// $user = $this->model("ListEmployeeModel");
			//echo "Hello " . $user->GetStudent() . "!";
			// $content = $user->GetAccount("1");
			$this->view("master", 
				["Page"=>"ListEmployeeView",
				"title"=>"Danh sách nhân viên"]);
		}
	}
?>