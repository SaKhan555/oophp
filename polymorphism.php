<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html>

<head>
	<title>Polymorphism</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<style>
		label {
			margin-top: 5px;
		}
	</style>
</head>
<!--
According to the Polymorphism principle, methods in different classes that do similar things should have the same name.
-->
<body>
	<div class="container">
		<form action = "<?=$_SERVER['PHP_SELF']?>" method="POST" accept-charset="utf-8">
				<div class="row">
			<div class="col-md-6">
				<h5>Full Time</h5><hr />
				<div class="form-group">
					<label>Name</label>
					<input type="text" class="form-control" name="name" placeholder="Name">		
					<label>Salary</label>
					<input type="text" class="form-control" name="salary" placeholder="Salary">		
					<label>Extra Payment</label>
					<input type="text" class="form-control" name="xtraPayment" placeholder="Name">
				</div>
			</div>			
			<div class="col-md-6">
				<h5>Hours Based Employee</h5><hr />
				<div class="form-group">
					<label>Name</label>
					<input type="text" class="form-control" name="HBEname" placeholder="Name">		
					<label>Hours</label>
					<input type="text" class="form-control" name="hours" placeholder="Hours">			
					<label>Hour Rate</label>
					<input type="text" class="form-control" name="hourRate" placeholder="Hour Rate">		
					<label>Extra Payment</label>
					<input type="text" class="form-control" name="HBExtraPayment" placeholder="Extra Payment">
				</div>
				<div class="form-group text-right">
					<button type="submit" class="btn btn-success">Submit</button>
				</div>
			</div>
	</div>
			</form>


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
		if(isset($_POST['name'])){
				$objFullTimeEmployee = new fullTimeEmployee($_POST['salary'],$_POST['xtraPayment']);	
				$objhourBasedEmployee = new hourBasedEmployee($_POST['hours'],$_POST['hourRate'],$_POST['HBExtraPayment']);
		?>
		<div class="row">
			<div class="col-md-6">
		<label>Name: </label><?= $objFullTimeEmployee->getEmployeeDetails($_POST['name']); ?><br />
		<label>Salary: </label><?= $objFullTimeEmployee->monthlySalary(); ?></div>
		<div class="col-md-6">
		<label>Name: </label><?= $objhourBasedEmployee->getEmployeeDetails($_POST['HBEname']); ?><br />
		<label>Salary: </label><?= $objhourBasedEmployee->monthlySalary(); ?></div></div>
	</div>	
	<?php
		}
?>
	

</body>
</html>