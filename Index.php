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
            while($row=$query->fetch(PDO::FETCH_NUM)):
            ?>
            <div class="row">
                <a href="./Order.php?id=<?php echo $row[0]  ?>">
                    <h3 class="text-danger"><?=  $row[1]  ?></h3>
                </a>
                <div>
                <a href="./Order.php?id=<?php echo $row[0]  ?>">
                    <img src="./practice/images/Products/Thumbnails/<?= $row[3]  ?>" alt="no-image" 
                        style="width:100px;height:100px;" />
                </a>
                </div>
                <div>
                    <p><?php echo $row[4]  ?></p>
                </div>
            </div>

            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
