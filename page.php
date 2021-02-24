<?php 
$id=$_GET['id'];
require_once ($_SERVER['DOCUMENT_ROOT'].'/ProjektiF/views/insertProductView.php');
$produkt = new InsertView();
$produktet = $produkt->getP();

//   $servername = 'DESKTOP-G35692C';
//  $user = 'DesktopUser';

//  $password = '123456';
//  $databaseName = 'WearFashion';


// $connection = new PDO("sqlsrv:Server= $servername ;Database= $databaseName", "$user", "$password");

// $result= $connection->prepare("Select * from Product where id={$id}");

// $return = $connection->prepare("Select * from Product where id={$id}")
//query
//return;

?>


<!DOCTYPE html>
<html>
    <head>
    
    <title><?php echo $id; ?></title>
        <link rel="stylesheet" href="css/page.css?v=<?php echo time(); ?>">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    <body>
       <?php include 'menu.php'?>
          <div class="body">
          <?php for( $i=0; $i < count($produktet);$i++):?>
         <?php if($produktet[$i]['ProductID'] == $id) :?>

        
          <div class="product-details">
          <div class="photos-container">
            
            <div class="main-photo-container">
          
            
                                          <?php if($produktet[$i]['ProductPicPath']):?>
                                            <img class = "imgg"src="<?php echo $produktet[$i]['ProductPicPath'];?>">
                                          <?php else: ?>
                                          <p>No image selected</p>
                                          <?php endif ?>
            <img class="max-photo"src="">

            </div>
          </div>
            <div class="info-container">
            <div class="product-info-details">

            <p><?php echo $produktet[$i]['ProductName']?> </p>
            <p><?php echo $produktet[$i]['ProductCode']?></p>
            <p><?php echo number_format($produktet[$i]['Price'], 2, '.', ',')?>$</p>
            <p>BLACK </p>
          </div>
          
          <div class="sizes">
              
              <h3>Select One</h3>
              <div class="labels">
              <label class="label"><input type="radio" name="select" /><span>XS</span></label>
              <label class="label"><input type="radio" name="select" /><span>S</span></label>
              <label class="label"><input type="radio" name="select" /><span>M</span></label>
              <label class="label"><input type="radio" name="select" /><span>L</span></label>
              <label class="label"><input type="radio" name="select" /><span>XL</span></label>
              <label class="label"><input type="radio" name="select" /><span>XXL</span></label>
            </div>
           
          </div>

            
            <button class="submit-button" type="Submit">ADD TO BAG</button>
            </div>
           
           

          </div>
          <?php endif; ?>
          <?php endfor;?>
        
        </div>
       <?php include 'footer.php' ?>
    </body>
</html>