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
    <!-- interface classes are just declare its structure its doest not containe data member ,it must be in public , it can implements more than one parent classes and there is no constructor available in this interface available in -->
    <div class="container">
        <?php 
interface Employee {
    public function getFullName($firstName,$lastName);

}
interface employeeFinicial {
    public function getMonthlySalary();
}

class fullTimeEmployee implements Employee,employeeFinicial{
    public $firstName;
    public $lastName;
    protected $annualSalary = 1200000;


    public function getFullName($firstName,$lastName){
    $first = $this->firstName = $firstName;
    $last = $this->lastName = $lastName;
return $first." ".$last;
    }

    public function getMonthlySalary(){
        return $this->annualSalary/12;
    }
}


$fullTimeEmployee = new fullTimeEmployee('FullTime','Employee');
echo "<h4>Name: ".$fullTimeEmployee->getFullName('Sa','Khan')."</h4>";
echo "<h4>Salary: ".$fullTimeEmployee->getMonthlySalary()."</h4>";
echo "<hr />";

     ?>
    </div>
</body>

</html>