<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create product</title>
    <?php include_once "./assets/bootstrap.php" ?>
    <?php  require_once "./connections/db.php" ?>
</head>
<body>
    <?php  include_once "./navbar.php" ?>
    <?php
        $error_prod_name="";$error_category="";$error_price="";
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(empty($_POST["name"])){
                $error_prod_name="Please enter product name";
            }else{
                if(strlen($_POST['name']) < 3){
                    $error_prod_name="product name must be at least 3 characters.";
                }
            }
            
            if(empty($_POST["category_id"])){
                $error_category="Please choose product category.";
            }
            if(empty($_POST["price"])){
                $error_price="Please enter product price";
            }else{
                if(!filter_input(INPUT_POST,"price",FILTER_VALIDATE_FLOAT)){
                    $error_price="input price is not valid.";
                }
            }

            if(empty($error_prod_name) && empty($error_category) && empty($error_price)){
                $name=$_POST["name"];
                $price=$_POST['price'];
                $category_id=$_POST['category_id'];
                $description=$_POST['description'];
                $destination="./images/".basename($_FILES['img']['name']);
                if(move_uploaded_file($_FILES['img']['tmp_name'],$destination)){
                    $img=basename($_FILES['img']['name']);
                    $sql="INSERT INTO product ";
                    $sql .=" VALUES(default,'$name','$price','$img','$description','$category_id');";
                    echo $conn->exec($sql);

                }else{

                }

            }
        }


    ?>
    <div class="container mt-2">
        <form action="" method="post" enctype="multipart/form-data" class="needs-validation">
            <div class="card">
                <div class="card-header">
                    <strong>Create New Product</strong>
                </div>
                <div class="card-body">
                    <div class="mb-2">
                            <label for="name">Product Name</label>
                            <input type="text" name="name" id="name" 
                            class="form-control  <?= empty($error_prod_name)?"":"is-invalid" ?>"/>
                            <div class="text-danger">
                                <?= empty($error_prod_name)?"":$error_prod_name  ?>
                            </div>
                    </div>
                    <div class="mb-2">
                        <label for="name">Category</label>
                        <select name="category_id" class="form-select">
                            <option value="" style="display: none;">Choose your product category</option>
                            <option value="1">Coak</option>
                            <option value="2">Beer</option>
                            <option value="3">Water</option>
                            <option value="4">Cafee</option>
                        </select>
                        <span class="text-danger"><?= empty($error_category)?"":$error_category ?></span>
                    </div>
                    <div class="mb-2">
                        <label for="price">Price</label>
                        <input type="text" name="price" id="price" class="form-control"/>
                        <span class="text-danger"><?= empty($error_price)?"":$error_price  ?></span>
                    </div>
                    <div class="mb-2">
                        <label for="price">Image</label>
                        <input type="file" name="img" id="img" accept="image/*" class="form-control"/>
                    </div>
                    <div class="mb-2">
                        <label for="description">Description</label>
                        <textarea  name="description" id="description" class="form-control">

                        </textarea>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Create Product</button>
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>