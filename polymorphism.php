<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Laet Static Binding</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<!--
	According to the Polymorphism principle, methods in different classes that do similar things should have the same name.
-->
<body>
<div class="container">
	<h1>Polymorphism</h1>
	<div class="col-md-12">
		<?php
		interface Employee {
			public function monthlySalary();
			public function getEmployeeDetails($name);
		}
		class fullTimeEmployee implements Employee {
			private $name;
			private $salary;
			private $extraPayment;


			public function __construct($salary,$extraPayment){
				$this->salary = $salary;
				$this->extraPayment = $extraPayment;
			} 
			public function getEmployeeDetails($name){
				return $this->name = $name;
			}

			public function monthlySalary(){
				$salary = ($this->salary)+($this->extraPayment);
				return $salary;
			}	
		}	
		class hourBasedEmployee implements Employee {
			private $name;
			private $hours;
			private $hourRate;
			private $extraPayment;

			public function __construct($hours,$hourRate,$extraPayment){
				$this->hours = $hours;
				$this->hourRate = $hourRate;
				$this->extraPayment = $extraPayment;
			}
			public function getEmployeeDetails($name){
				return $this->name = $name;
			}
			public function monthlySalary(){
				$salary = ($this->hours)*($this->hourRate)+($this->extraPayment);
				return $salary;
			}	
		}
$objFullTimeEmployee = new fullTimeEmployee(50000,5000);
$objhourBasedEmployee = new hourBasedEmployee(90,1000,10000);
?>
<h4>Full Time Employee</h4><hr />
<label>Name: </label><?= $objFullTimeEmployee->getEmployeeDetails("John Doe"); ?><br />
<label>Salary: </label><?= $objFullTimeEmployee->monthlySalary(); ?>
<h4>Hours Based Employee</h4><hr />
<label>Name: </label><?= $objhourBasedEmployee->getEmployeeDetails("Tony Stark"); ?><br />
<label>Salary: </label><?= $objhourBasedEmployee->monthlySalary(); ?>
	</div>
</div>
</body>
</html>