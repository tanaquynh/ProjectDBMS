<?php 
	class APIStudent extends Controller{
		public function getApi() {
			$model = $this->model("StudentModel");
			$data = $model->GetAccount("1");

			echo json_encode($data);
		}
	}
?>