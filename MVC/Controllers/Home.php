<?php
	class Home extends Controller {
		public function default () {
			$this->view("master", 
				["Page"=>"HomeView",
				"title"=>"Trang chủ"]);
		}
	}
?>