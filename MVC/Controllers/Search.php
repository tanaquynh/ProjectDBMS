<?php
	class Search extends Controller {
		public function default () {
			// $user = $this->model("HomeModel");
			//echo "Hello " . $user->GetStudent() . "!";
			// $content = $user->GetAccount("1");
			$this->view("master", 
				["Page"=>"SearchView",
				"title"=>"Tìm kiếm"]);
		}
	}
?>