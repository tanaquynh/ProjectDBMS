<?php
	class Home extends Controller {
		// public function __constructor($username, $psw) {
		// 	$this->view("master", 
		// 	["Page"=>"HomeView",
		// 	"title"=>"Trang chủ",
		// 	"user"=>[$username,$psw]]);
		// }
		public function home ($username, $psw) {
			$this->view("master", 
			["Page"=>"HomeView",
			"title"=>"Trang chủ",
			"user"=>[$username,$psw]]);
		}

		public function default () {
			$this->view("master", 
			["Page"=>"HomeView",
			"title"=>"Trang chủ"]);
		}
	}
?>