<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    include 'db_connection.php';
    if(isset($_POST['login'])){
      $username = $_POST['username'];
      $password = $_POST['password'];
      $password1 = MD5($password);
      $sql="SELECT * FROM `users` WHERE username='$username' AND password='$password1'";
      $result=mysqli_query($conn,$sql);

      $row_user=mysqli_fetch_assoc($result);
      

      $num=mysqli_num_rows($result);     
      if($num==1){
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['username']=$username;
        header('Location:index.php');
        exit;
      }      
    }
    if(isset($_POST['register'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql="INSERT INTO `users` (`username`, `email`, `password`) VALUES ('$username', '$email', MD5('$password'))";
        $result=mysqli_query($conn,$sql);     
          session_start();
          $_SESSION['loggedin']=true;
          $_SESSION['username']=$username;
          header('Location:index.php');
          exit;
           
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
    <title>Account-page</title>
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
                        <li><a href="account_page.php">Account</a></li>
                    </ul>
                </nav>
                <img src="Images/cart.png" width="30px" height="30px">
                <img src="Images/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
        </div>


        <!-- Account-page -->
        <div class="account-page">
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <img src="Images/Sofa.jpeg" width="100%">
                    </div>
                    <div class="col-2">
                        <div class="form-container">
                            <div class="form-btn">
                                <span onclick="Login()">Login</span>
                                <span onclick="Register()">Register</span>
                                <hr id="Indicator">
                            </div>
                            <form method="post" id="loginform">
                                <input type="text" name="username" Placeholder="Username" required>
                                <input type="Password" name="password" Placeholder="Password" required>
                                <input type="submit" class="btn" name="login" value="Login">
                                <a href="">Forget Password</a>
                            </form>

                            <form method="post" id="regform">
                            <input type="text" name="username" Placeholder="Username" required>
                            <input type="email" name="email" Placeholder="Email" required>
                                <input type="Password" name="password" Placeholder="Password" required>
                    
                                <input type="submit" class="btn" name="register" value="Register">
                            </form>

                        </div>
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
       <!-- JS for toggle Form -->
       <script>
           var loginform = document.getElementById("loginform");
           var regform = document.getElementById("regform");
           var Indicator = document.getElementById("Indicator");

            function Register()
            {
                regform.style.transform ="translateX(0px)";
                loginform.style.transform ="translateX(0px)";
                Indicator.style.transform ="translateX(100px)";
            }

            function Login()
            {
                regform.style.transform="translateX(300px)";
                loginform.style.transform="translateX(300px)";
                Indicator.style.transform="translateX(0px)";
            }
            
            

       </script>

</body>
</html>