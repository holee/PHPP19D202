<?php

define("DSN","mysql:host=localhost;dbname=store;port=3306;");
define("USERNAME","root");
define("PASSWORD",'');

try {
    $conn=new PDO(DSN,USERNAME,PASSWORD);

    
} catch (PDOException $ex) {
    die($ex->getMessage());
}



// const PI=3.141516;
// define("MARRIED",false);
// define("PII",3.141516);
// define("ARRAY",[1,2,3,4,5,6,7]);