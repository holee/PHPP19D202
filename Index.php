<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Syntax</title>
    <?php  include "./assets/bootstrap.php" ?>
    <style>
        .h2{
            color: red;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
    </style>
</head>
<?php
  require_once "./connections/db.php";
?>
<body>
    <?php  include_once "./navbar.php" ?>
   <div class="container">
    <div class="row">
        <div class="col-6">
        <?php

            $sql="SELECT * FROM Product;";
            if($query=$conn->query($sql)):
            while($row=$query->fetch()):
            ?>
            <div class="row">
                <h3 class="text-danger"><?=  $row[1]  ?></h3>
                <div>
                    <img src="./images/<?= $row[3]  ?>" alt="no-image" 
                        style="width:100px;height:100px;" />
                </div>
                
            </div>

            <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="col-6">
        <?php
        $sql1="SELECT * FROM Product;";
        if($query=$conn->query($sql1)):
            $rows=$query->fetchAll(PDO::FETCH_NUM);

            echo "<pre>";
                print_r($rows);
            echo "</pre>";

            foreach($rows as $row):
        ?>
        <div class="row">
            <h3 class="text-danger"><?=  $row[1]  ?></h3>
            <div>
                <img src="./images/<?= $row[3]  ?>" alt="no-image" 
                    style="width:100px;height:100px;" />
            </div>
            <strong>Price:<?php echo $row[2]  ?>$</strong>
        </div>
            <?php endforeach; ?>
        <?php endif; ?>
                </div>
            </div>
  
    </div>
</body>
</html>
