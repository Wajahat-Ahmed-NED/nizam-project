<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header('location:account_page.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EStore | Ecommerce Website Design </title>
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
</head>

<body>
    <div class="header">
    <div class="container">
            <div class="navbar">
            <div class="logo">
                    <a href="index.php"><img src="Images/logo.png" width="215px"></a>
                </div>
                <nav>
                    <ul id="MenuItems">
                    <li><a href="index.php">Home</a></li>
                        <li><a href="products.php">Products</a></li>
                        <li><a href="contact_info.php">Contact</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </nav>
                <a href="Cart-Info.html"><img src="Images/cart.png" width="30px" height="30px"></a>
                <img src="Images/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
            <div class="row">
                <div class="col-2">
                    <h1>Welcome To Ecommerce site<br> For used Furniture Sales</h1>
                    <br>
                    <p>Success isn't always about greatness. it's about consistency. <br> consistent always gains
                        success, Greatness will come.</p>
                    <a href="" class="btn">Explore Now &#8594; </a>
                </div>
                <div class="col-2">
                    <img src="Images/door (3).jpg">
                </div>
            </div>
        </div>
    </div>

    <!-- featured catageories -->
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="Images/Chair (15).jpg">
                </div>
                <div class="col-3">
                    <img src="Images/Chair (6).jpg">
                </div>
                <div class="col-3">
                    <img src="Images/Chair (16).jpg">
                </div>
            </div>
        </div>
    </div>

    <!-- featured products -->
    <div class="small-container">
        <h2 class="title">Featured Products</h2>
        <div class="row">
            <div class="col-4">
                <img src="Images/Chair (14).jpg">
                <h4>White 90's Chair</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs: 4700.00</p>
            </div>
            <div class="col-4">
                <img src="Images/pexels-photo-1544420.jpeg">
                <h4>Woody Door</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs: 9700.00</p>
            </div>
            <div class="col-4">
                <img src="Images/Lantern (3).jpeg">
                <h4>Room Hanging Stationary</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs: 4000.00</p>
            </div>
            <div class="col-4">
                <img src="Images/ottomans (1).jpg">
                <h4>Square White & Black ottomans</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs: 2800.00</p>
            </div>
        </div>


        <!-- latest products -->


        <h2 class="title">Latest Products</h2>
        <div class="row">
            <div class="col-4">
                <img src="Images/Chair (7).jpg">
                <h4>Bar Stool Chair</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs: 2200.00</p>
            </div>
            <div class="col-4">
                <img src="Images/Chair (8).jpg">
                <h4>Adolf Chair</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs: 2100.00</p>
            </div>
            <div class="col-4">
                <img src="Images/chair.jpg">
                <h4>Classroom chair</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs: 1700.00</p>
            </div>
            <div class="col-4">
                <img src="Images/chairr.jpg">
                <h4>BabySit Chair</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs: 3200.00</p>
            </div>
        </div>




        <!-- offer -->
        <div class="offer">
            <div class="small-container">
                <div class="row">
                    <div class="col-2">
                        <img src="Images/Lantern (4).jpg"class="offer-img">
                    </div>
                    <div class="col-2">
                        <p>Exclusively Available on EStore</p>
                        <h1>It's Laaltain</h1>
                        <small>You Must Use it in the darkness.</small> <br> <br>
                        <a href="" class="btn" >Buy Now &#8594</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- testimonials -->
        <div class="testimonials">
            <div class="small-container">
                <div class="row">
                    <div class="col-3">
                        <i class="fa fa-quote-left"></i>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam eaque in laboriosam culpa magnam id harum quod. Molestias, tenetur. Cum, est.</p>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <img src="Images/IMG_2961_2.JPG">
                        <h2>Nizam Ali</h2>
                    </div>
                    <div class="col-3">
                        <i class="fa fa-quote-left"></i>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam eaque in laboriosam culpa magnam id harum quod. Molestias, tenetur. Cum, est.</p>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <img src="Images/iphone.jpg">
                        <h2> Isim e Hussain </h2>
                    </div>
                    <div class="col-3">
                        <i class="fa fa-quote-left"></i>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam eaque in laboriosam culpa magnam id harum quod. Molestias, tenetur. Cum, est.</p>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <img src="Images/mm-1.JPG">
                        <h2>Muzamil Hussain</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- brands -->
        <div class="brands">
            <div class="small-conatiner">
                <div class="row">
                    <div class="col-5">
                        <img src="Images/logo godrej.png">
                    </div>
                    <div class="col-5">
                        <img src="Images/logo oppo.png">
                    </div>
                    <div class="col-5">
                        <img src="Images/logo cocacola.jpg">
                    </div>
                    <div class="col-5">
                        <img src="Images/logo paypal.png">
                    </div>
                    <div class="col-5">
                        <img src="Images/logo philips.png">
                    </div>
                </div>
            </div>
        </div>
        <!-- footer -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col-1">
                        <h3>Download Our App</h3>
                        <p>Download App For Android and IOS Mobile Phone.</p>
                        <div class="app-logo">
                            <img src="images/logo google.png">
                            <img src="images/logo app store.png">
                        </div>
                    </div>
                    <div class="footer-col-2">
                         <img src="Images/logo.png">   
                        <p>Our Purpose is to Subtainbly make the pleasure and Benefits of sports Accessible to the Many.</p>
                    </div>
                    <div class="footer-col-3">
                        <h3>Useful Links</h3>
                        <ul>
                            <li>Coupons&nbsp;</li>
                            <li>Blog Posts&nbsp;</li>
                            <li>Return Policy &nbsp;&nbsp;</li>
                            <li>Join Affiliate&nbsp;</li>
                        </ul>
                    </div>
                    <div class="footer-col-4">
                        <h3>Follow Us</h3>
                        <ul>
                            <li>Facebook</li>
                            <li>Instagram</li>
                            <li>Twitter</li>
                            <li>Youtube</li>
                        </ul>
                    </div>
                </div>
                <br>
                <hr>
                <p class="Copyright">Copyright 2020 - It's Too Easy</p>
            </div>
        </div>
        <!-- JS for toggle menu -->
        <script>
            var MenuItems= document.getElementById("MenuItems");
            MenuItems.style.maxHeight="0px";
            function menutoggle(){
                if (MenuItems.style.maxHeight=="0px")
                {
                    MenuItems.style.maxHeight="200px";
                }
                else
                {
                    MenuItems.style.maxHeight="0px";
                }
            }
        </script>
</body>
</html>