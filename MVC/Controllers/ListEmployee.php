<?php
    class ListEmployee extends Controller {
		public function default () {
			$model = $this->model("ListEmployeeModel");
			$data = json_decode($model->getListEmployee());
			$this->view("master", 
				["Page"=>"ListEmployeeView",
				"title"=>"Danh sách nhân viên",
				"data"=>$data]);
			
			if (isset($_POST["name"])) {
				$model->addEmployee([
					$_POST["name"], $_POST["sex"], $_POST["dateofbirth"], $_POST["position"],
					$_POST["office"], $_POST["quequan"]
				]);
			}

			if (isset($_POST["nameEdit"])) {
				$model->changeProfile($_POST["emIDEdit"]);
			}
		}


	}
?>