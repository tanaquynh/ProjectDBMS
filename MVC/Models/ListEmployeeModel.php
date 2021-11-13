<?php 
	class ListEmployeeModel extends Database {
		public function getListEmployee() {
            $query = "SELECT employeeID, name, gioitinh, ngaysinh, positionName, departmentName, email  
            FROM payroll.employees e JOIN positions p ON e.positionID = p.positionID 
            JOIN departments d ON e.departmentID = d.departmentID;";
            $result = $this->getData($query);
            return $result;
        }

        public function changeProfile($employeeID) {
            $name = $_POST["nameEdit"];
            $sex = $_POST["sexEdit"];
            $dob = $_POST["dateofbirthEdit"];
            $pn = $_POST["positionEdit"];
            $address = $_POST["quequanEdit"];

            $query = "SELECT positionID FROM positions WHERE positionName = \"$pn\"";
            $posID = json_decode($this->getData($query))[0];   
            $posID = $posID->positionID;
            echo $pn;
            echo "H";
              
            $dn = $_POST["officeEdit"];
            echo $dn;
            $query = "SELECT departmentID FROM departments WHERE departmentName = \"$dn\"";       
            $dpID = json_decode($this->getData($query))[0];
            $dpID = $dpID->departmentID;
        
    
            $query = "UPDATE `payroll`.`employees` SET `name` = '$name', `gioitinh` = '$sex', `ngaysinh` = '$dob', `positionID` = '$posID', `departmentID` = '$dpID', `address` = '$address', `email` = 'abc@hsagd' WHERE (`employeeID` = '$employeeID')";
            $this->updateData($query);
        }

        public function addEmployee($data = [])
        {
            $query = "SELECT positionID FROM positions WHERE positionName = \"$data[3]\"";
            $pos = json_decode($this->getData($query))[0];
            $pos = $pos->positionID;  

            $query = "SELECT departmentID FROM departments WHERE departmentName = \"$data[4]\"";       
            $dp = json_decode($this->getData($query))[0];
            $dp = $dp->departmentID;
            
            $query = "INSERT INTO `payroll`.`employees` (`employeeID`, `name`, `gioitinh`, `ngaysinh`, `positionID`, `departmentID`, `address`, `email`) VALUES ('E00003', '$data[0]', '$data[1]', '$data[2]', '$pos', '$dp', '$data[5]', 'jsdg@shgd.vn')";
            $this->updateData($query);
        }
	}
?>