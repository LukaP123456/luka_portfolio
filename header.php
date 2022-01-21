<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Luka Prcic">
    <meta name="keywords" content="food delivery,pizza,burger,chicken,fast">
    <meta name="description" content="Fast food delivery website">


    <title>Luka Prćić portfolio website</title>

    <!--font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!--css link -->
    <link rel="stylesheet" href="CSS/stajl.css">

    <!-- bootstrap include section -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<!--header start-->

<header>
    <a href="main.php" class="logo"><i class="fas fa-tree"></i>Luka Prćić portfolio website</a>
    <nav class="navbar">
        <a class="active" href="main.php">home</a>
        <a href="dishes.php">Ocene</a>
        <a href="about.php">Linkovi</a>
        <a href="menu.php">filmovi</a>
        <a href="menu-serije.php">serije</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <!--<i class="fas fa-search" id="search-icon"></i>-->
        <?php echo $date = date('Y-m-d H:i:s'); ?>


    </div>
</header>
<!-- header kraj -->