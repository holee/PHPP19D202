<?php

define("DSN","mysql:host=localhost;dbname=store;port=3306;");
define("USERNAME","root");
define("PASSWORD",'');

try {
    $conn=new PDO(DSN,USERNAME,PASSWORD);

    
} catch (PDOException $ex) {
    die($ex->getMessage());
}
