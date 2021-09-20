<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header('location:account_page.php');
    exit;
}
?>
<?php
  
  include 'db_connection.php';
      $id=$_GET['id'];
      $sql="SELECT * FROM products where id='$id'"; 
      $result=mysqli_query($conn,$sql);
      $row_user=mysqli_fetch_array($result);

      $product_name=$row_user['product_name'];
      $product_image=$row_user['product_image'];
      $price=$row_user['price'];
      $quantity=$row_user['quantity'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Details</title>
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

<!-- Single product Details -->
            <div class="small-container single-product">
                <div class="row">
                    <div class="col-2">
                   
                        <img src="Images/<?php echo $product_image;?>" width="100%" id="productimg">

                    
                    
                    
                    </div>
                    <div class="col-2">
                       
                        <h2><?php echo $product_name;?></h2>
                        <h4>Rs: <?php echo $price;?></h4>
                        <h5>Quantity Available: <?php echo $quantity;?></h5>
                        <select>
                            <option>Select Size</option>
                            <option>Smalll</option>
                            <option>Medium</option>
                            <option>XL</option>
                            <option>XXL</option>
                            <option>3XL</option>
                        </select>
                        <input type="Number" value="1">
                        <a href="" class="btn">Add to cart</a>
                        <h3>Product Details<i class="fa fa-star"></i></h3>
                            <br>
                        <p>The <?php echo $product_name;?> will be proven very Comfortable when you'll use it.</p>
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

        <!-- JS for product Gallery  -->
        <script>
            var productimg = document.getElementById("productimg");
            var smallimg =document.getElementsByClassName("small-img");

            smallimg[0].onclick=function()
            {
                productimg.src=smallimg[0].src;
            }
            smallimg[1].onclick=function()
            {
                productimg.src=smallimg[1].src;
            }
            smallimg[2].onclick=function()
            {
                productimg.src=smallimg[2].src;
            }
            smallimg[3].onclick=function()
            {
                productimg.src=smallimg[3].src;
            }
        </script>
</body>
</html>