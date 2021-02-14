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
        <?php include 'menu.php'?>

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
          <?php include 'footer.php' ?>
    </body>
</html>
