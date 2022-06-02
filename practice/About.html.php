<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Fourth Coffee - @Page.Title</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="./css/app.css" rel="stylesheet" />
</head>

<body>
    <div id="page">
        <?php include_once "./navbar.php" ?>
        <div id="body">
        <section id="main">
            <h1>A little bit about Fourth Coffee</h1>
            <p>
                Fourth Coffee was founded in 2010 and delivers coffee and fresh baked goods right to your door. 
                In another life, Bill Baker was a developer by day and pastry chef by night.  
                But soon Bill's innate skills with all things involving butter, flour and sugar put him 
                even more in demand than his programming talents and what started out as a way to satisfy 
                his own sweet tooth became all-consuming.  Fourth Coffee is not only a candy-coated wonderland 
                of coffee, pastries, cookies and cakes, it also honors his tech background by employing a state 
                of the art online ordering system that makes it easy for anybody with internet access to 
                order his all natural, locally-sourced confections and have them delivered to their 
                door within 24 hours.
            </p>
        </section>
        </div>
        <footer>
            &copy;@DateTime.Now.Year - Fourth Coffee
        </footer>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>