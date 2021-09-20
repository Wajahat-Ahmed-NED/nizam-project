<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header('location:account_page.php');
    exit;
}
?>
<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    include "db_connection.php";
    if(isset($_POST['submit'])){
      $user_name = $_POST['user_name'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];
    
      $sql="INSERT INTO `contact` (`user_name`, `subject`, `message`,`date`) VALUES ('$user_name', '$subject', '$message',current_timestamp())";
      $result=mysqli_query($conn,$sql);
      if($result){
        header('Location:index.php');
        exit;
      }  
    }
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
                    <img src="Images/logo.png" width="215px">
                </div>
                <nav>
                    <ul id="MenuItems">
                    <li><a href="index.php">Home</a></li>
                        <li><a href="products.php">Products</a></li>
                        <li><a href="contact_info.php">Contact</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </nav>
                <img src="Images/cart.png" width="30px" height="30px">
                <img src="Images/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>


            <div class="anothercontainer">
                <div class="item" id="item-1">
                    <h1>Our Office</h1> <br> 123 Office, Karachi, Pakistan <br> <br> office@example.com <br> <br>
                    +123-456-7890
                </div>
                <div class="item" id="item-2">
                    <h1>Our Store</h1><br> 123 Store, Karachi, Pakistan <br> <br> store@example.com <br> <br>
                    +123-456-7890
                </div>
                <div class="item" id="item-3" div class="container">
                    <form method="post" action="" autocomplete="off">
                        <div class="form-group">
                            <input type="text" name="user_name" id="user_name"placeholder="your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="message" id="message" placeholder="Message" required>
                        </div>
                        <input type="submit" class="btn" name="submit" value="Submit">
                    </form>

                </div>
            </div>
        </div>



        <!-- testimonials -->
        <div class="testimonials">
            <div class="small-container">
                <div class="row">
                    <div class="col-3">
                        <i class="fa fa-quote-left"></i>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam eaque in laboriosam culpa
                            magnam id harum quod. Molestias, tenetur. Cum, est.</p>
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
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam eaque in laboriosam culpa
                            magnam id harum quod. Molestias, tenetur. Cum, est.</p>
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
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam eaque in laboriosam culpa
                            magnam id harum quod. Molestias, tenetur. Cum, est.</p>
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
                        <p>Our Purpose is to Subtainbly make the pleasure and Benefits of sports Accessible to the Many.
                        </p>
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
            var MenuItems = document.getElementById("MenuItems");
            MenuItems.style.maxHeight = "0px";
            function menutoggle() {
                if (MenuItems.style.maxHeight == "0px") {
                    MenuItems.style.maxHeight = "200px";
                }
                else {
                    MenuItems.style.maxHeight = "0px";
                }
            }
        </script>
</body>

</html>