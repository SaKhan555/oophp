<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Static Members</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<!-- Static function or variable does not depend on object its depends on Class itself
We can access directly them with a classname  like ABC::firstname

--the difference between constant and static variable is constant variable value cant be change while static variable value can change and constant will always be public 
-->
<body>
<?php

// public const $abc = 20;
//Class::abc;
// public static $xyz = 50;
//Class::$xyz;

Class Employee {

public static $setCountStatus = 0;
public function __construct(){
     self::$setCountStatus++;
}
public static function getCount(){
    return self::$setCountStatus;
}

public static $fullName = 'Pappu';

public static function setDetails($name){
    self::$fullName = $name;
}

public  static function getDetails(){
    return self::$fullName;
    }
}
?>

<h4>Name: <?=Employee::$fullName;?></h4>
<h4><?=Employee::setDetails('John Doe');?></h4> 
<h4>Other Details: <?=Employee::getDetails();?></h4> 
<?php
$obj01 = new Employee;
$obj02 = new Employee;
echo "Object of the ".get_class($obj01)." Class are: ". Employee::getCount();
?>
</body>
</html>