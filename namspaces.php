<?php namespace Employee { ?>
<!DOCTYPE html>
<html>
<head>
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
	<!--Namspaces are like folders 
	classes with same name but different name spaces are useable
	-->
	<?php
Class Details{
		public function create(){
			echo "Employee created";
		}
	}
?>
</body>
</html>

<?php } 

namespace Admin {
	Class Details {
				public function create(){
			echo "Admin created";
		}
	}
	use Employee\Details as employeeDetails; //use of namspace
	$employee = new employeeDetails; //this is the class of employee namespace
	$employee->create();

	$admin = new \Admin\Details; //this is the class of admin namespace second method use
	$admin->create();
}