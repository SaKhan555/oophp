<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Dependency injection</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<!-- depependenct injecetion is process to inject one class into another through constructore or setter getter -->
<body>
<?php
    Class Logger
    {
        public function br(){
            echo nl2br("\n");
        }
        public function log($message){
           echo "log of {$message}";
        }
    }

Class dmlOperations{

    private $logger;
    public function __construct(Logger $logger){
        $this->logger = $logger;    
    }

    public function create(){
        $this->logger->log('creation.');
        $this->logger->br();
    }   

     public function update(){
        $this->logger->log('updation.');
        $this->logger->br();
    }    

     public function delete(){
        $this->logger->log('deletion.');
        $this->logger->br();
    }
}

$objLogger = new Logger;
$objDmlOperation = new dmlOperations($objLogger);

?>
<h5><?=$objDmlOperation->create();?></h5>
<h5><?=$objDmlOperation->update();?></h5>
<h5><?=$objDmlOperation->delete();?></h5>
</body>
</html>