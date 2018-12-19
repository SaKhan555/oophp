<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Constructor Demo</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<!--Encapsulation is a class where we can restrict accession of data members and methodos 
for that we use public protected private and so on
-->
<body>
    <form method="post" action="<?=$_SERVER['PHP_SELF']?>">
        <div class="container">
            <div class="form-group">
                <label>Model: </label>
                <input type="text" name="model" class="form-control">
                 <label>Price:</label>
                <input type="text" name="price" class="form-control">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
    <?php 
	Class TV {
		private $model;
		private $price;

		public function __construct($model,$price){
			$this->model = $model;
			$this->price = $price;
		}

	protected function getModel(){
		return $this->model;
	}

	protected function getPrice(){
		return $this->price;
	}

	}
	class newTV extends TV {
		public function getAllDetails(){
			return 'Model: '.$this->getModel().'<br />Price: '.$this->getPrice();
		}
	}

	?>
    <div class="container">
        <?php 
if(isset($_POST['model'])) {
	$sony = new newTV($_POST['model'],$_POST['price']);
	?>
    <div class="row">
    	<div class="container">
    		<?=$sony->getAllDetails();?>
    	</div>
    </div>
	<?php
}
?>
    </div>

</body>

</html>