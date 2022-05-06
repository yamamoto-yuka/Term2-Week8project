<?php
include('function.php');

$flowerObj = new Flowers();
$ValentineData = $flowerObj->view_ValentinesDate();

$flowerObj2 = new Flowers();
$BirthdayData = $flowerObj2->view_BirthdayDate();
// echo var_dump($BirthdayData);

$flowerObj3 = new Flowers();
$weddingData = $flowerObj3->view_WeedingDate();

$flowerObj4 = new Flowers();
$plantsData = $flowerObj4->view_PlantsDate();




$flowerObj5 = new Flowers();
$occasion1Data = $flowerObj5->view_Occasion1();

$flowerObj6 = new Flowers();
$occasion2Data = $flowerObj6->view_Occasion2();

$flowerObj7 = new Flowers();
$occasion3Data = $flowerObj7->view_Occasion3();

$flowerObj8 = new Flowers();
$occasion4Data = $flowerObj8->view_Occasion4();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>J.Flower</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <!-- Fontawosome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
</head>




<body>

    <header>
        <div class='fixed-top'>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark  ">
                <div class="container-fluid navContainer">
                    <a class="navbar-brand" href="#">J.Flower</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>


                    <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo02">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">SIGN IN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">LOG IN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">CONTACT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">ABOUT US</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>
                            </li>

                        </ul>
                    </div>


                </div>
            </nav>
        </div>
    </header>

    <main>

        <div class="container-fluid">

            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="image  d-block w-100 d-flex flex-column">
                            <div class="topimage item1">
                                <div class="callToAction text-center">
                                    <h1>VALENTINE'S DAY FLOWERS</h1>
                                    <p>SEND SWEET SENTIMENTS ON</p>
                                    <a href="#"><button class="btn btn-light">MORE</button></a>
                                </div>
                            </div>

                        </div>
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="image d-block w-100 d-flex flex-column ">
                            <div class="topimage item2">
                                <div class="callToAction text-center">
                                    <h1>BIRTHDAY FLOWERS</h1>
                                    <p>SEND FLOWERS FOR BIRTHDAY TO FRIENDS OR LOVED ONES TODAY!</p>
                                    <a href="#"><button class="btn btn-light">MORE</button></a>
                                </div>
                            </div>

                        </div>
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="image d-block w-100 d-flex flex-column">
                            <div class="topimage item3">
                                <div class="callToAction text-center">
                                    <h1>WEEDING FLOWERS</h1>
                                    <p>Installed and delivered across the capital, our flowers will not disappoint,<br>
                                        any occasion, any request, our weddings and events team is here to help.</p>
                                    <a href="#"><button class="btn btn-light">MORE</button></a>
                                </div>
                            </div>

                        </div>
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>



            <div class="row Ads">
                <h2 class="col text-center">
                    <span> SEND FLOWERS TODAY WITH </span><br>
                    FREE DELIVERY AND GREETING CARD
                </h2>
            </div>


            <div class="row filter">
                <p class="text-center">FILTER BY CATEGORY</p>
                <ul class="col filtering">
                    <li class="current"><span data-filter="all" class="active">ALL FLOWERS</span></li>
                    <li><span data-filter="fil-1">VALENTINE</span></li>
                    <li><span data-filter="fil-2">BIRTHDAY</span></li>
                    <li><span data-filter="fil-3">WEDDING</span></li>
                </ul>
            </div>


            <!--PLANTS ITEMS  ---------------------------------------------------------------------------------->
            <div class="row  EventTitele filtering-list">
                <?php foreach($occasion4Data as $Oc) { ?>
                <h2 class="col text-center"><?php echo $Oc['Occasion_name']?> FLOWERS</h2>
                <?php } ?>


                <div class="row eventItem">

                    <?php foreach($plantsData as $flowers) { ?>

                    <div class="col-12 col-md-6 col-lg-3 ">

                        <div class="row">

                            <div class="col-12  carouselContainer">
                                <!-- 
                                <div class="row eventimages"> -->

                                <div id="carouselExampleCaptions<?php echo $flowers['ProductID']?>"
                                    class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class=" w-100 d-flex flex-column carouselBox">
                                                <div class="carouselImage"
                                                    style="background-image: url(<?php echo $flowers['product_image1']?>)">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="carousel-item">
                                            <div class="w-100 d-flex flex-column carouselBox">
                                                <div class="carouselImage"
                                                    style="background-image: url(<?php echo $flowers['product_image2']?>)">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleCaptions<?php echo $flowers['ProductID']?>"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleCaptions<?php echo $flowers['ProductID']?>"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>



                            </div>

                            <!-- </div> -->


                            <div class="col-12  Contents">

                                <div class="row eventcontents d-flex flex-column justify-content-between">
                                    <p class="col-12 product_name"><?php echo $flowers['product_name']?></p>
                                    <p class="col-12 product_describe"><?php echo $flowers['product_info']?>
                                    </p>
                                    <p class="col-12 product_price">$<?php echo $flowers['product_price']?></p>
                                    <div class="col-12 product_rating"
                                        id="product_rating<?php echo $flowers['ProductID']?>">

                                    </div>
                                    <button class="col-12 cart btn btn-light">ADD CART</button>
                                </div>

                            </div>

                        </div>
                    </div>



                    <?php } ?>
                </div>
                <a class="text-center" href="#TOP">TOP</a>
            </div>







            <!--VALENTINE ITEMS  ---------------------------------------------------------------------------------->
            <div class="row  EventTitele filtering-list fil-1" id="valentaineItems">
                <?php foreach($occasion1Data as $Oc) { ?>
                <h2 class="col text-center"><?php echo $Oc['Occasion_name']?> FLOWERS</h2>
                <?php } ?>


                <div class="row eventItem">

                    <?php foreach($ValentineData  as $flowers) { ?>

                    <div class="col-12 col-md-6 col-lg-3 ">

                        <div class="row">

                            <div class="col-12  carouselContainer">
                                <!-- 
                                <div class="row eventimages"> -->

                                <div id="carouselExampleCaptions<?php echo $flowers['ProductID']?>"
                                    class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class=" w-100 d-flex flex-column carouselBox">
                                                <div class="carouselImage"
                                                    style="background-image: url(<?php echo $flowers['product_image1']?>)">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="carousel-item">
                                            <div class="w-100 d-flex flex-column carouselBox">
                                                <div class="carouselImage"
                                                    style="background-image: url(<?php echo $flowers['product_image2']?>)">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleCaptions<?php echo $flowers['ProductID']?>"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleCaptions<?php echo $flowers['ProductID']?>"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>



                            </div>

                            <!-- </div> -->


                            <div class="col-12  Contents">

                                <div class="row eventcontents d-flex flex-column justify-content-between">
                                    <p class="col-12 product_name"><?php echo $flowers['product_name']?></p>
                                    <p class="col-12 product_describe"><?php echo $flowers['product_info']?>
                                    </p>
                                    <p class="col-12 product_price">$<?php echo $flowers['product_price']?></p>
                                    <div class="col-12 product_rating"
                                        id="product_rating<?php echo $flowers['ProductID']?>">

                                    </div>
                                    <button class="col-12 cart btn btn-light">ADD CART</button>
                                </div>

                            </div>

                        </div>
                    </div>



                    <?php } ?>
                </div>

                <a class="text-center" href="#TOP">TOP</a>
            </div>






            <!--BIRTHDAY ITEMS  ---------------------------------------------------------------------------------->
            <div class="row  EventTitele filtering-list fil-2">
                <?php foreach($occasion2Data as $Oc) { ?>
                <h2 class="col text-center"><?php echo $Oc['Occasion_name']?> FLOWERS</h2>
                <?php } ?>


                <div class="row eventItem">

                    <?php foreach($BirthdayData as $flowers) { ?>

                    <div class="col-12 col-md-6 col-lg-3 ">

                        <div class="row">

                            <div class="col-12  carouselContainer">
                                <!-- 
                                <div class="row eventimages"> -->

                                <div id="carouselExampleCaptions<?php echo $flowers['ProductID']?>"
                                    class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class=" w-100 d-flex flex-column carouselBox">
                                                <div class="carouselImage"
                                                    style="background-image: url(<?php echo $flowers['product_image1']?>)">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="carousel-item">
                                            <div class="w-100 d-flex flex-column carouselBox">
                                                <div class="carouselImage"
                                                    style="background-image: url(<?php echo $flowers['product_image2']?>)">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleCaptions<?php echo $flowers['ProductID']?>"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleCaptions<?php echo $flowers['ProductID']?>"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>



                            </div>

                            <!-- </div> -->


                            <div class="col-12  Contents">

                                <div class="row eventcontents d-flex flex-column justify-content-between">
                                    <p class="col-12 product_name"><?php echo $flowers['product_name']?></p>
                                    <p class="col-12 product_describe"><?php echo $flowers['product_info']?>
                                    </p>
                                    <p class="col-12 product_price">$<?php echo $flowers['product_price']?></p>
                                    <div class="col-12 product_rating"
                                        id="product_rating<?php echo $flowers['ProductID']?>">

                                    </div>
                                    <button class="col-12 cart btn btn-light">ADD CART</button>
                                </div>

                            </div>

                        </div>
                    </div>



                    <?php } ?>
                </div>
                <a class="text-center" href="#TOP">TOP</a>
            </div>







            <!--WEDDING ITEMS  ---------------------------------------------------------------------------------->
            <div class="row  EventTitele filtering-list fil-3">
                <?php foreach($occasion3Data as $Oc) { ?>
                <h2 class="col text-center"><?php echo $Oc['Occasion_name']?> FLOWERS</h2>
                <?php } ?>


                <div class="row eventItem">

                    <?php foreach($weddingData as $flowers) { ?>

                    <div class="col-12 col-md-6 col-lg-3 ">

                        <div class="row">

                            <div class="col-12  carouselContainer">
                                <!-- 
                                <div class="row eventimages"> -->

                                <div id="carouselExampleCaptions<?php echo $flowers['ProductID']?>"
                                    class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class=" w-100 d-flex flex-column carouselBox">
                                                <div class="carouselImage"
                                                    style="background-image: url(<?php echo $flowers['product_image1']?>)">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="carousel-item">
                                            <div class="w-100 d-flex flex-column carouselBox">
                                                <div class="carouselImage"
                                                    style="background-image: url(<?php echo $flowers['product_image2']?>)">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleCaptions<?php echo $flowers['ProductID']?>"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleCaptions<?php echo $flowers['ProductID']?>"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>



                            </div>

                            <!-- </div> -->


                            <div class="col-12  Contents">

                                <div class="row eventcontents d-flex flex-column justify-content-between">
                                    <p class="col-12 product_name"><?php echo $flowers['product_name']?></p>
                                    <p class="col-12 product_describe"><?php echo $flowers['product_info']?>
                                    </p>
                                    <p class="col-12 product_price">$<?php echo $flowers['product_price']?></p>
                                    <div class="col-12 product_rating"
                                        id="product_rating<?php echo $flowers['ProductID']?>">

                                    </div>
                                    <button class="col-12 cart btn btn-light">ADD CART</button>
                                </div>

                            </div>

                        </div>
                    </div>



                    <?php } ?>
                </div>
                <a class="text-center" href="#TOP">TOP</a>
            </div>







        </div>

    </main>

    <footer>
        <div class="row ">
            <div class="col text-center">
                <a href="">
                    <p>Terms</p>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <a href="">
                    <p>Delivery</p>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <a href="">
                    <p>About us</p>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <a href="">
                    <p>Contact us</p>
                </a>
            </div>
        </div>

        <div class="row mt-2 sns">
            <div class="col-4 text-center">
                <a href="">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
            <div class="col-4 text-center">
                <a href="">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
            <div class="col-4 text-center">
                <a href="">
                    <i class="fab fa-facebook-square"></i>
                </a>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col text-center">
                <small>© All Rights Reserved.</small>
            </div>
        </div>

    </footer>


</body>

<script>
$(document).ready(function() {


    $('.filtering span').click(function() {
        var value = $(this).attr('data-filter');
        if (value == 'all') {
            $('.filtering-list').show('1000');
        } else {
            $('.filtering-list').not('.' + value).hide('1000');
            // .not:  Rturn All ".filtering-list" elements that do NOT have the class name ".all" 
            $('.filtering-list').filter('.' + value).show('1000');
            // .filter: Return all ".filtering-list" elements with class name ".all" 
        }
        $(document).on('click', '.filtering span', function() {
            $('.filtering span').removeClass('active');
            $(this).addClass('active');
        });
    });

});
</script>
<script>
<?php foreach($plantsData as $flowers){?>
var rating_star = '';
for (j = 0; j < <?php echo $flowers['product_rating'] ?>; j++) {
    rating_star = rating_star + '<span class="fa fa-star checked"></span>';
}
document.getElementById("product_rating<?php echo $flowers['ProductID']?>").innerHTML =
    rating_star + " <?php echo $flowers['product_rating']?>";

<?php } ?>



<?php foreach($ValentineData as $flowers){?>
var rating_star = '';
for (j = 0; j < <?php echo $flowers['product_rating'] ?>; j++) {

    rating_star = rating_star + '<span class="fa fa-star checked"></span>';
}

document.getElementById("product_rating<?php echo $flowers['ProductID']?>").innerHTML =
    rating_star + " <?php echo $flowers['product_rating']?>";

<?php } ?>






<?php foreach($BirthdayData as $flowers){?>
var rating_star = '';
for (j = 0; j < <?php echo $flowers['product_rating'] ?>; j++) {
    rating_star = rating_star + '<span class="fa fa-star checked"></span>';
}

document.getElementById("product_rating<?php echo $flowers['ProductID']?>").innerHTML =
    rating_star + " <?php echo $flowers['product_rating']?>";

<?php } ?>




<?php foreach($weddingData as $flowers){?>
var rating_star = '';
for (j = 0; j < <?php echo $flowers['product_rating'] ?>; j++) {
    rating_star = rating_star + '<span class="fa fa-star checked"></span>';
}
document.getElementById("product_rating<?php echo $flowers['ProductID']?>").innerHTML =
    rating_star + " <?php echo $flowers['product_rating']?>";

<?php } ?>
</script>

</html>