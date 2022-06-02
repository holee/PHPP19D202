<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Fourth Coffee - @Page.Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="./css/app.css" rel="stylesheet" />
</head>

<body>
    <div id="container-fluid">
        <?php include_once "./navbar.php" ?>
        <div id="body">
            <h1>Welcome to Fourth Coffee!</h1>
           
            <div id="productsWrapper" class="row">
                <?php include "./Controllers/Index.php"  ?>
            </div>
        </div>
        <footer>
            &copy;@DateTime.Now.Year - Fourth Coffee
        </footer>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>