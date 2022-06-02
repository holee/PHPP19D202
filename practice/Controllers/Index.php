<?php
require_once "./db/database.php";
$sql="SELECT * FROM product;";
if($query=$conn->query($sql)):
    while($row=$query->fetch(PDO::FETCH_ASSOC)):
?>

<div class="col-sm-3">
    <a href="./Order.html.php?id=<?php echo $row['id'] ?>" title="Order <?=  $row['name'] ?>">
        <div class="productInfo">
            <h3><?=  $row['name'] ?></h3>
            <img class="product-image img-fluid img-thumbnail" src="./Images/Products/Thumbnails/<?=  $row['image_path'] ?>" alt="Image of  <?=  $row['name'] ?>" />
            <p class="description"><?= $row['description'] ?></p>
        </div>
    </a>
    <div class="action">
        <p class="price float-left">$<?= $row['price'] ?></p>
        <a class="btn btn-sm btn-danger order-button float-right" href="./Order.html.php?id=<?php echo $row['id'] ?>" title="Order  <?=  $row['name'] ?>">Order Now</a>
    </div>
</div>

<?php 
    endwhile; 
    endif; 
    $conn=null;
    $query=null;
?>