<?php 
	class Database {
		public $con;
		protected $server = "localhost";
		protected $root = "root";
		protected $password = "";
		protected $dbname = "test";

		public function __construct() {
			$this->con = mysqli_connect($this->server, $this->root, $this->password, $this->dbname) or die("Error connecting to MySQL server.");
		}

		public function getData($query) {
			$result = mysqli_query($this->con, $query) or die("Error querying database.");
		 	$data = [];

		 	while ($obj = $result->fetch_array()) {
		 		$data[$obj["username"]] = $obj["pass"];
		 	}
		 	
		 	return json_encode($data);
		}
	}
?>