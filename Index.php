<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Syntax</title>
    <style>
        .h2{
            color: red;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
    </style>
</head>
<?php
  //require_once "./connections/db.php";
?>
<body>
    <form action="" method="GET">
        <input type="text" name="name1" id="name1">
        <input type="submit" value="Test">
    </form>
    <?php
        $value="global variable";
        $name="Dara";

        function counter(){
           static $count=0;
            $count++;
            echo $count ."<br/>";
        }

        function display(){
            ///local $value;
            $value1="local varible";
            $GLOBALS['value']="new global variable";
            echo $value1;
        }

        display();
        echo $value;
        echo "<pre>";
            print_r($GLOBALS);
            echo "<hr/>";
            print_r($_SERVER);
            echo "<hr/>";
            print_r($_GET);
            echo "<hr/>";
            print_r($_POST);
            echo "<hr/>";
            print_r($_REQUEST);
        echo "</pre>";


        counter();//1
        counter();//2
        counter();//3
        counter();//4
        counter();//5

    ?>
   
</body>
</html>
