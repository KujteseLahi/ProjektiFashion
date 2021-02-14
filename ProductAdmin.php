<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/ProjektiF/views/insertProductView.php');
$produkt = new InsertView();
$produktet = $produkt->getP();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>FashionGlam</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/adminPage.css">


</head>

<body>
<div class="body">
        <div class="upper">
                   <b>Admin Dashboard</b>
           </div>

    </div>
    <div class="lower">

     


            <div class="nenmeny">
                <button class="nmenubtn"type="menu"onclick="location.href='adminPage.php' ">Home</button>
                <button class="nmenubtn" type="menu"onclick="location.href='ProductRegister.php'">Products</button>
               </div>
               <div class="main"> 
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
    
    <?php include 'footer.php' ?>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    <script>
        $.validate({
            errorMessageClass: "error",
        });
    </script>

</html>
