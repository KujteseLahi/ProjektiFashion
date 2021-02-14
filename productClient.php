<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/ProjektiF/views/insertProductView.php');
$produkt = new InsertView();
$produktet = $produkt->getP();
?>

<html>
    <head>
        <title>FashionGlam</title>
        <link rel="stylesheet" href="productClient.css">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    <body>
        <div class="navbar">
           
            <nav class="stroke">
              <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="productClinet.php">Products</a></li>
                <li><a href="aboutUs.php">AboutUs</a></li>
                <li><a href="cart.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li>
              </ul>
            </nav>
          </div>

          <div class="swiper-container">
           
            <div class="swiper-wrapper">
            
            <?php foreach($produktet as $produkt):?>
                <div class="swiper-slide">

            
                    <div class="slider-box">
                   
                        <p class="time">New</p>
                        

                        <div class="img-box">
                        <?php if($produkt['ProductPicPath']):?>
                           <img class = "imgg"src="<?php echo $produkt['ProductPicPath'];?>">
                        <?php else: ?>
                        <p>No image selected</p>
                        <?php endif ?>
                        </div>
                        
                        <p class="detail"><?php echo $produkt['ProductName']?>
                            <a href="#" class="price"><?php echo number_format($produkt['Price'], 2, '.', ',')?>
                        </a>
                        </p>
                        <div class="Cart">
                            <a href="#">Add to Cart</a>
                        </div>
                       

                    </div>
                    
                </div>
                <?php endforeach; ?>
            </div>
                        
            
        </div>
           
          
        <footer>
                      
          <div class="footer-elements">
            <div class="footer logo">
              <img  style="width: 150px;height: 150px;" src="images/bagicon.png">
        
            </div>
          <div class="footer explore">
            <h2 class="footer-heading" >Explore</h2>
            
            <ul>
            <li> <a href="home.php" >Home</a></li>
              <li><a href="productClient.php" >Products</a></li>
              <li><a href="aboutUs.php" >About Us</a></li>
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
         <p style="padding-left: 105px; font-weight: bolder; color: aliceblue;"> @2020 All Right Reserved.</p> 
        </div>
       
        </footer>
    </body>
</html>
