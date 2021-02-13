<html>
    <head>
        <title> Fashion Glam</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/aboutUs.css">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    <body>
        <?php include 'menu.php';?>
          <div class="body">
              <h1 style="font-size: 35px;"> About Fashion Glam </h1>
              <h5 > Everything you waned to know about us</h5>
              <div class="container"> 
              <div class="mainForm">
                  <div class="link-container">
                    <a  href="#" onclick="changeForm(0)">Who Are We</a>
                    <a href="#" onclick="changeForm(1)">Brands</a>
                    <a href="#" onclick="changeForm(2)">Costumer </a>
                  </div>
                  <div class="we forms form-style">
                    <img src="images/we.gif">
                    <div class="text">
                        <h3>We are Fashion Glam</h3>
                        <p>We, Fashion Glam believe in a world where you have total freedom to be you,
                      without judgement. To experiment. To express yourself.
                      So we make sure everyone has an equal chance to discover all the amazing 
                      things they’re capable of – no matter who they are or where they’re from.
                      We want to give you the confidence to be whoever you want to be.
                      </p>
                      </div>
                  </div>
                  <div class="brands forms hidden">
                      <img src="images/brands.gif">
                        <div class="text">
                        <h3>Brands We Work With</h3>
                        <p>We work with some of the world's biggest brands, and we choose
                        the best pieces from their collections to give you all the things you
                          want to wear… as well as some things you never imagined you’d fall for. </p>
                        </div>
                    </div>
                    <div class="costumers forms hidden">
                        <img src="images/costumer.gif">
                        <div class="text">
                            <h3> Costumers care</h3>
                            <p>We’re not happy till you are. So we have the friendliest customer care 
                                advisors ever working 24/7 to answer your queries (on Facebook, 
                                Twitter, live chat, email, Instagram… you name it) – getting back to 
                                you asap. </p>
                        <div class="textarea">
                          <h3> Give us your thoughts</h3>
                          <form action="models/insertAboutUs.php" method="post">
                            <input id="area" name="w3review" rows="10" cols="50"/>
                            <input name ="submitB" class="button" type = "submit"  value= "Send" />
                        </form>
                          <!-- <form action="models/insertAboutUs.php" method="post">
                          
                          <textarea id="textarea" name="w3review" rows="4" cols="50"> 
                            Write your text here
                          </textarea>                             
                        <input name ="submitB" class="button" type = "submit"  value= "Send" />
                        </form> -->
                       </div>
                       </div>
                
</div>
            </div>
        
          </div>
        </div>
          <script src="js/aboutus.js"></script>
          <?php include 'footer.php';?>

    </body>
</html>

