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
    <title>All Products</title>
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>

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

    </div>
    <div class="small-container">

        <div class="row row-2">
            <h2>All Products</h2>
            <select>
                <option>Default Shorting</option>
                <option>Short by price</option>
                <option>Shorting by popularity</option>
                <option>Shorting by rating</option>
                <option>Short by sale</option>
            </select>
        </div>


        <div class="row">
            <?php
                include 'db_connection.php';
                $select="SELECT * FROM products";
                $run=mysqli_query($conn,$select);
                while($row_user=mysqli_fetch_array($run)){
                    $id=$row_user['id'];                
                    $product_name=$row_user['product_name'];
                    $product_image=$row_user['product_image'];       
                    $price=$row_user['price'];                   
                ?>
            <div class="col-4">
            <img src="Images/<?php echo $product_image;?>" height="300px" width="150px">
                <h4><?php echo $product_name; ?></h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs: <?php echo $price; ?></p>
                <a href="product_details.php?id=<?php echo $id;?>">
                    <input type="submit" name="add" value="Add to Cart"/>
                    <a>
                
            </div>
            <?php } ?>
        </div>

        <div class="page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594;</span>
        </div>

        <div>
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
                            <p>Our Purpose is to Subtainbly make the pleasure and Benefits of sports Accessible to the
                                Many.</p>
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