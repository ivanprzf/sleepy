<?php
/**
 * Created by PhpStorm.
 * User: Pepis
 * Date: 11/12/14
 * Time: 12:42
 */

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<html lang="en">
<head>
    <meta charset="utf-8_spanish_ci">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootbusiness | Short description about company">
    <meta name="author" content="Your name">
    <title>Sleepy | Admin users</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap responsive -->
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <!-- Font awesome - iconic font with IE7 support -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/font-awesome-ie7.css" rel="stylesheet">
    <!-- Bootbusiness theme -->
    <link href="css/boot-business.css" rel="stylesheet">
</head>
<body>
<!-- Start: HEADER -->
<header>
    <?php
    include 'utilsPHP/header.php'
    ?>
</header>
<!-- End: HEADER -->
<!-- Start: MAIN CONTENT -->



<div class="content">
    <div class="container">
        <div class="page-header">
            <h1>Admin lodgings</h1>
        </div>
        <div class="row">
            <div class="span8 offset2">
                <h4 class="widget-header"><i class="icon-home"></i> My lodgings</h4>
                <div class="widget-body">
                    <div class="center-align">
                        <!-- If there is not a logged user... -->
                        <?php
                        if(!ISSET($_SESSION['userId'])||$_SESSION['userRole']!=1) {
                            echo "You are not authorized in this zone. <br/> Please, <a href='signin.php'>login</a> with your acount";
                        }
                        //If there is a logged user...
                        else{
                            include "utilsPHP/adminUsers.php";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End: MAIN CONTENT -->
<!-- Start: FOOTER -->
<footer>
    <?php
    include 'utilsPHP/footer.php';
    ?>
</footer>
<!-- End: FOOTER -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/boot-business.js"></script>
</body>
</html>
