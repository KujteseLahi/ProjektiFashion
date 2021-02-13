<html>
    <head>
        <title>Fashion Glam</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="css/singup.css">
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   
    </head>
    <body>
        <div class="body-container">
            <div class="photo-container">
                <img class="mainphoto" src="images/login.jpg"/>
            </div>
            <div class="info-container">
      
            <form name="singinForm" action="views/insertUserView.php" method="post" onsubmit="return validateForm()" id = "forma2" class="forma2" >                    
                 <h2 class="singin">Sing up</h2>
                    <div class="row">
                        <label>Full Name</label>
                        <!-- <input type="text" name="name"> -->
                        <input  name = "emri" class="label"  id= "label2" type="text" />
                        <div class="error" id="nameErr"></div>
                    </div>
                    <div class="row">
                        <label>Email Address</label>
                        <!-- <input type="text" name="email"> -->
                        <input  name = "email" class="label"  id= "label3" type="text" />
                        <div class="error" id="emailErr"></div>
                    </div>
                    <!-- <div class="row">
                        <label>Username</label>
                        <input type="text" name="username" >
                       
                        <div class="error" id="usernameErr"></div>
                    </div> -->
                    <div class="row">
                        <label>Password</label>
                        <!-- <input type="password" name="password" > -->
                        <input name = "paswordi"  class="label" id = "label4" type="password" />
                        <div class="error" id="passwordErr"></div>
                    </div>
                    <div class="row">
                        <label> Confirm Password</label>
                        <!-- <input type="password" name="confirmPassword" > -->
                        <input  name = "paswordi2" class="label" id = "label5"  type="password" />
                        <div class="error" id="confirmPasswordErr"></div>
                    </div>
                    <div class="row">
                        <!-- <input type="submit" value="Submit"> -->
                        <input name = "submitbtn" type = "submit" id='button1' class="submit"  value = "Registre"/>
                    </div>
         
            </form>
            </div>
        <script src="js/singup.js"></script>


        </div>
        <footer>
                      
            <div class="footer-elements">
              <div class="footer logo">
                <img  style="width: 150px;height: 150px;" src="images/bagicon.png">
          
              </div>
            <div class="footer explore">
              <h2 class="footer-heading" >Explore</h2>
              
              <ul>
                
                <li> <a href="home.html" >Home</a></li>
                <li><a href="#" >Products</a></li>
                <li><a href="aboutUs.html" >About Us</a></li>
                
              </ul>
        
            </div>
            <div class="footer info">
              <h2 class="footer-heading">Visit Us</h2>
                
              <ul>  
                <li></i>Autostrada Tiranë - Elbasan, Tiranë</li>
                <li></i> Rr. Agim Ramadani, Prishtine</li>
                </ul>
            </div>
                <div class="footer contact">
                <h2 class="footer-heading">Contact Us</h2>
                  <ul>
                <li> +355 4 418-640</li>
                <li> +383 44 202-472</li>
                <li> google@gmail.com</li>
               </ul>
            </div>
              <div class="footer follow">
                <h2 class="footer-heading">Follow us</h2>
                 
                <ul>
              
                  <li><i class="fab fa-facebook"></i>Fashion Fab</li>
                  <li><i class="fab fa-instagram"></i>FashionFab</li>
                        
                </ul>
            </div>
        
            </div>
           <p style="padding-left: 105px; font-weight: bolder;"> @2020 All Right Reserved.</p> 
          </div>
         
          </footer>
    </body>
</html>