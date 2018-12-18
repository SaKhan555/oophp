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
<body>
	<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
		<div class="container">
			<div class="form-group">
				<label>Model</label>
				<input type="text" name="model" class="form-control">
				<label>Price</label>
				<input type="text" name="price" class="form-control">
				<div class="clearfix"></div>
				<div class="text-right">
					<button type="submit" class="btn btn-primary">Submit</button>

				</div>
			</div>
		</div>
	</form>

	<?php 
	Class TV {
		public $model;
		public $price;

		public function __construct($model,$price){
			$this->model = $model;
			$this->price = $price;
		}

		public function priceChange($newPrice){
			return $this->price = $newPrice;
		}
	}

	?>

	<div class="container">
		<?php 
		if(isset($_POST['model'])) {
			$sony = new TV($_POST['model'],$_POST['price']);
			echo "<h4>Today Price of ".ucwords($sony->model)."</h4><hr />";
			echo "<h4>Price: ".$sony->price."</h4>";
			echo "<hr /><h4>Price 10% increase After 3 month</h4><hr />";
			echo "<h4>Price: ".$sony->priceChange(((10/100)*$_POST['price'])+$_POST['price'])."</h4>";
			echo "<hr /><h4>Price 15% increase After 6 month</h4><hr />";
			echo "<h4>Price: ".$sony->priceChange((15/100*$_POST['price'])+$_POST['price'])."</h4>";
		}
		?>
	</div>
</body>
</html>