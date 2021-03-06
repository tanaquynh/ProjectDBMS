<?php	
	class App
	{
		protected $controller = "Login";
		protected $action = "default";
		protected $params = [];

	    function __construct() {

	    	//Lay cac gia tri user nhap vao thanh dia chi
		    $arr = $this->getUrl();
		    // print_r($arr);

	    	//Xu ly Controller
	    	if (isset($arr)) {
	    		if (file_exists("./MVC/Controllers/" . $arr[0] . ".php")) {
		    		$this->controller = $arr[0];
		    		unset($arr[0]);
		    	}
	    	}
	    	require_once("./MVC/Controllers/" . $this->controller . ".php");
	    	$this->controller = new $this->controller;

	    	//Xac dinh Action
	    	if(isset($arr[1])) {
	    		if (method_exists($this->controller, $arr[1])) {
	    			$this->action = $arr[1];
	    		}
	    		unset($arr[1]);
   			}

   			//Xu ly Params
   			$this->params = $arr ? array_values($arr) : [];	
			
			
   			call_user_func_array([$this->controller, $this->action], $this->params);
	    }

	    function getUrl() {
	    	if (isset($_GET["url"])) {
	    		return explode("/", filter_var(trim($_GET["url"], "/")));
	    	}
	    }
	}

?> 

