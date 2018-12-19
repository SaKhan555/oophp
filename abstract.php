<!DOCTYPE html>
<html>
<head>
    <title>Abstract Demo</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<!-- abstract classes are those which must be implented in subclasses its adhora classes its contain data member its function may have body etc  and it can not be instanciate -->
	<div class="container">
	<?php 
abstract class Employee {
    protected $firstName;
    protected $lastName;
    public function getFullName(){
        return $this->firstName.' '.$this->lastName;
    }
    abstract function getMonthlySalary();
}

class fullTimeEmployee extends Employee{
    protected $annualSalary = 1200000;
    public function __construct($firstName,$lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getMonthlySalary(){
        return $this->annualSalary/12;
    }
}

class contractEmployee extends Employee{
    protected $hour = 150;
    protected $hourlyRate = 500;
    
    public function __construct($firstName,$lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getMonthlySalary(){
        return $this->hour*$this->hourlyRate;
    }
}

$fullTimeEmployee = new fullTimeEmployee('FullTime','Employee');
echo "<h4>Name: ".$fullTimeEmployee->getFullName()."</h4>";
echo "<h4>Salary: ".$fullTimeEmployee->getMonthlySalary()."</h4>";
echo "<hr />";
$contractEmployee = new contractEmployee('Cotract','Employee');
echo "<h4>Name: ".$contractEmployee->getFullName()."</h4>";
echo "<h4>Salary: ".$contractEmployee->getMonthlySalary()."</h4>";

	 ?>
	 	</div>
</body>
</html>