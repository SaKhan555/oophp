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
	<!--Multiple Traits are used in a single class its like multiple classes inheritance-->

	<div class="container">
		<h4>Traits</h4>
		<?php
		trait Base{
			public function traitMethod(){
				return "traitBase Class Method";
			}
		}
		trait Base2{
			public function traitMethod2(){
				return "traitBase2 Class Method2";
			}
		}
		class Child{
				use Base,Base2;
				public function getTraitsMethods(){
					return $this->traitMethod()."<br /> ".$this->traitMethod2();
				}
		}

		$objChild = new Child();
		echo $objChild->getTraitsMethods();

		?>
	</div>
</body>
</html>