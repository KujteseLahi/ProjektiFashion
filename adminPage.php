<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/ProjektiF/models/insertAboutUs.php');
$produkt = new InsertView();
$produktet = $produkt->getKomentet();
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
<div class="body">
          <div class="upper">
                   <b>Admin Dashboard</b>
           </div>

    
    <div class="lower">

            <div class="nenmeny">
                <button class="nmenubtn" type="menu"onclick="location.href='adminPage.php'" >Home</button>
                <button class="nmenubtn" type="menu"onclick="location.href='ProductRegister.php'">Products</button>
               
            </div>
           <div class="main"> 
                <div class="form-group">
                         
                              <h2 class ="titulli1">FeedBack Comments</h2>
                          
                  <div class="swiper-container">
           
                       <div class="swiper-wrapper">

                            <?php foreach($produktet as $produkt):?>
                                <div class="swiper-slide">
                                    <div class="slider-box">
                                          <h3>FeedBack :</H3>
                                           <p> <?php echo $produkt['Comment'];?></p>

                                       
                                     </div>
                                 </div>
                            <?php endforeach; ?>
                       </div>
                   </div>
             </div>
      </div>
</div>
    <?php include 'footer.php';?>
    </body>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    <script>
        $.validate({
            errorMessageClass: "error",
        });
    </script>

</html>
