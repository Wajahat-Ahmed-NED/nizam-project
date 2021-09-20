
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Info</title>
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


        <!-- cart items Details -->

        <div class="small-container cart-page">

            <table>
                <tr>
                    <th>Products</th>
                    <th>Quantity</th>
                    <th>Sub total</th>
                </tr>
                <tr>
                   <td>
                       <div class="cart-info">
                           <img src="Images/Cart (3).jpeg">
                            </div>
                                <p>Batti</p>
                                <small>Price: Rs: 2800.00</small>
                                <br>
                                <a href="">Remove</a>
                            </div>
                        </div>

                   </td> 
                   <td> <input type="number" value="1"></td>
                   <td>Rs: 2800.00</td>
                </tr>
                <tr>
                   <td>
                       <div class="cart-info">
                           <img src="Images/Cart (1).jpeg">
                            </div>
                                <p>Laltain</p>
                                <small>Price: Rs: 2300.00</small>
                                <br>
                                <a href="">Remove</a>
                            </div>
                        </div>
                        
                   </td> 
                   <td> <input type="number" value="1"></td>
                   <td>Rs: 2300.00</td>
                </tr>
                tr>
                   <td>
                       <div class="cart-info">
                           <img src="Images/Cart (2).jpeg">
                            </div>
                                <p>Laltain</p>
                                <small>Price: Rs: 2200.00</small>
                                <br>
                                <a href="">Remove</a>
                            </div>
                        </div>
                        
                   </td> 
                   <td> <input type="number" value="1"></td>
                   <td>Rs: 2200.00</td>
                </tr>
            </table>











            <div class="total-price">
                <table>
                    <tr>
                        <td>Subtotal</td>
                        <td>Rs: 7300.00</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>Rs: 700.00</td>
                    </tr>
                    <tr>
                    <tr>
                        <td>Total</td>
                        <td>Rs: 8000.00</td>
                    </tr>
                </table>
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
</body>
</html>