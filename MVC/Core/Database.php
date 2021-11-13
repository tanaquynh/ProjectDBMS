<?php 
	class Database {
		public $con;
		protected $server = "localhost";
		protected $root = "root";
		protected $password = "";
		protected $dbname = "payroll";

		public function __construct() {
			$this->con = mysqli_connect($this->server, $this->root, $this->password, $this->dbname) or die("Error connecting to MySQL server.");
		}

		public function getData($query) {
			$result = mysqli_query($this->con, $query) or die("Error querying database.");
		 	$data = [];
			$i = 0;
		 	while ($obj = $result->fetch_array()) {
		 		$data[$i] = $obj;
				++$i;
		 	} 	
		 	return json_encode($data);
		}

		public function updateData($query) {
			mysqli_query($this->con, $query) or die("Error querying database.");
		}
	}
?>