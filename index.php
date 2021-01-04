<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home | E-Store.com</title>
        <link rel="shortcut icon" href="img\srtcticon.png" type="image/png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="./css/style.css" rel="stylesheet">
    </head>

    <body style="padding-top: 50px;">
        <?php include 'includes/header.php';?>
        <div id="content">
            <div id = "banner_image">
                <div class="container">
                    <center>
                        <div id="banner_content">
                            <h1>Biggest Online Mobile Store</h1>
                            <h4><p>Flat &nbsp;&#8377;2,000&nbsp;&nbsp;OFF&nbsp;&nbsp;on all products.</p></h4> <br> <br>
                            <a  href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div> <br><br>
            <div class="container text-center">
                <div id="item_list">
                    <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 style="color:orange">Choose&nbsp;&nbsp;From&nbsp;&nbsp;wide&nbsp;&nbsp;ranges&nbsp;&nbsp;of&nbsp;&nbsp;brands</h3>
                        </div>
                    <div class="panel-body">
                        <div class="col-sm-3">
                            <a href="products.php#ios">
                               <div class="thumbnail">
                                    <img src="./img/iphonex.png" alt="iphone x" >
                                        <div class="caption">
                                            <h3>Apple</h3>
                                        </div>
                                </div>
                            </a>
                        </div>
                         <div class="col-sm-3">
                            <a href="products.php#samsung">
                               <div class="thumbnail">
                                    <img src="./img/samsungnote8plus.png" alt="galaxy note 8 plus" >
                                        <div class="caption">
                                            <h3>Samsung</h3>
                                        </div>
                                </div>
                            </a>
                        </div>
                         <div class="col-sm-3">
                            <a href="products.php#oneplus">
                               <div class="thumbnail">
                                    <img src="./img/op5t.png" alt="oneplus">
                                        <div class="caption">
                                            <h3>OnePlus</h3>
                                        </div>
                                </div>
                            </a>
                        </div>
                         <div class="col-sm-3">
                            <a href="products.php#xiaomi">
                               <div class="thumbnail">
                                    <img src="./img/mimix2.png" alt="mi mix 2" >
                                        <div class="caption">
                                            <h3>Xioami</h3>
                                        </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <?php  include 'includes/footer.php'; ?> 
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
