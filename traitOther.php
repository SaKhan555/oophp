<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Traits </title>
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
    <!--Multiple Traits are used in a single class its like multiple classes inheritance and we cant instantiate traits classes-->
    <div class="container">
        <h4>Traits conflict with same class and which one to use</h4>
        <?php
		trait Profile{
			private $name;
			private $salary;

			public function getName($name){
				return $this->name = $name;
			}

			public function getSalary($salary){
				return $this->salary = $salary;
			}
		}

		trait Salary{
			private $salary;
			public function getSalary($salary){
				return $this->salary = $salary;
			}
		}

		class allDetails{
				    use Profile, Salary 
				    {
				    	Profile::getSalary insteadof Salary;
				    	Salary::getSalary as grossSalary;
				    }
				public function getDetails(){
					return "Name: ".$this->getName("Ali")."<br /> GrossSalary:  ".$this->grossSalary(60000)."<br /> Net Salary: ".$this->getSalary(50000);
				}
		}

		$objAllDetails = new allDetails;
		echo $objAllDetails->getDetails();

		?>
    </div>
</body>

</html>