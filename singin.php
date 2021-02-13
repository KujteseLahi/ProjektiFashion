<html>
    <head>
        <title>Fashion Glam</title>
        <link rel="stylesheet" type="text/css" href="css/singin.css">
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   
    </head>
    <body>
        <div class="body-container">
            <div class="photo-container">
                <img class="mainphoto" src="images/login.jpg"/>
            </div>
            <div class="info-container">
                
            <form action="views/logInForm.php"  method="post" onsubmit="return validateForm()">                    
                 <h2 class="singin">Sing in</h2>
                    <div class="row">
                        <label>Email</label>
                        <input name = "email" class ="label"  id= "label" name="" type="text"  >
                        <div class="error" id="usernameErr"></div>
                    </div>
                    <div class="row">
                        <label>Password</label>
                        <input name = "passwordddd" class="label" id = "label1" name="" type="password" >
                        <div class="error" id="passwordErr"></div>
                    </div>
		    <div class="row">
                      <p> Role</p>
                      <select name ="type" class="label" id = "roli"  style="margin-top: 7%;" >
                      <option value = "0">Choose your Role</option>
                      <option value = "1">Admin</option>
                      <option value = "2">User</option>
                      </select>
                    </div>
                    
                    <div class="row">
                        <!-- <input name = "logINB" type="submit" value="Submit"> -->
                        <button name = "logINB" id='button1' class="submit">Sign in</button>
                    </div>
                    <a href="singup.html"><h3 class="account">You dont have a account yet?</h3></a>
            </form>
            </div>
        <script src="js/singin.js"></script>


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
