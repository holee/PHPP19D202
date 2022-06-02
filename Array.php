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
    <pre>
        <?php print_r($_POST) ?>
    </pre>
<?php

//first example
$fruits=array('apple','banana','coconut','dragon friut','star fruit');
//second example
$students[0]='Kosal';
$students[1]='Ven. Mang';
$students[2]='Sinly';
$students[3]='Snorm';
$students[4]='Reasey';
$students[5]='Sothea';
//third example
$subjects=["Web Programing","Dot Net","PHP","ASP","JSP","Python"];

echo $students[2] ."<br/>";
echo $students[5]."<br/>";

for($x=0;$x<count($subjects);$x++){

    echo "<li>{$subjects[$x]}</li>";

}
foreach($fruits as $value){
    echo "<li>{$value}</li>";
}

$products=['id'=>1,"name"=>"bread","image"=>"bread.jpg",'description'=>"bread",'category_id'=>1];
$products=array('id'=>1,"name"=>"bread","image"=>"bread.jpg",'description'=>"bread",'category_id'=>1);