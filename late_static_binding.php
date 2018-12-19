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
<!-- In late static binding we use static::$variable in place self::$variable or Employee::$variable 
static:: will the get the value of current object
-->
<body>
<?php
Class DB 
{
    protected static $table = 'employee';
    public function select(){
        echo "select * from ".static::$table;//this is late static binding static will bind in run time
    }
}

Class subClass extends DB 
{
    protected static $table = 'employeeDetails';
}

$db = new subClass;
$db->select();

?>
</body>
</html>