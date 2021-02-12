<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/Projekti/views/insertProductView.php');
$produkt = new InsertView();
$produktet = $produkt->getP();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Wear-It</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/adminPage.css">


</head>

<body>
    <div class="upper">
        <div id="box1">
            <div class="pocketMarket">
                <b>Admin Dashboard</b>
            </div>

        </div>

      


    </div>
    <div class="lower">

        <div class="middle">


            <div class="nenmeny">
                <button class="nmenubtn" type="menu" >Home</button>
                <button class="nmenubtn" type="menu"onclick="location.href='ProductRegister.php'">Products</button>
                <button class="nmenubtn" type="menu">Product Slider</button>
                
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
        </div>
    </div>
    
    

    <div class="footer">
        <footer>
                      
            <div class="footer-elements">
              <div class="footer logo">
                <img  style="width: 150px;height: 150px; padding-top: 20px;" src="bagicon.png">
          
              </div>
            <div class="footer explore">
              <h2 class="footer-heading" >Explore</h2>
              
              <ul>
                
              <li><a href="adminPage.php">Home</a></li>
                <li><a href="ProductAdmin.php">Products</a></li>
                
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
    </footer>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    <script>
        $.validate({
            errorMessageClass: "error",
        });
    </script>

</html>