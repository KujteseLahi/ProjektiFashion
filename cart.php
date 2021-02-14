<html>
    <head>
        <title>FashionGlam</title>
        <link rel="stylesheet" href="css/cart.css">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    <body>
       <?php include 'menu.php'?>
          <div class="body">
          <div class="bag-details">
          <div class="products-container">
            <h1>My Bag</h1>
            <hr>
            <div class="product">
              <img class="product-img" src="images/k3 (2).jpg">
              <div class="product-info">
                <div ><h4>15.15$</h4></div>
                <div><p>Product name and info</p></div>
                <div class="product-details"> 
                  <p>Colour</p>
                  <p>Size </p>
                  <p>Quantity</p>
                  <input class="qnt-input" type="text"  placeholder="0">
                </div>
              </div>
            </div>
            <hr>
            <div class="product">
              <img class="product-img" src="images/k3 (1).jpg">
              <div class="product-info">
                <div ><h4>15.15$</h4></div>
                <div><p>Product name and info</p></div>
                <div class="product-details"> 
                  <p>Colour</p>
                  <p>Size </p>
                  <p>Quantity</p>
                  <input class="qnt-input" type="text"  placeholder="0">
                </div>
              </div>
            </div>
            
          </div>
            <div class="info-container">
            <h1>Total</h1>
            <hr>
            <div class="info-details"> <h3>Subtotal</h3> <p>$</p> </div>
            <div  class="info-details"> <h3>Deliivery</h3> <p>$</p> </div>
            <hr>
            <div  class="info-details"> <h3>Order Total</h3> <p>$</p> </div>
            <button class="submit-button" type="Submit">CHECKOUT</button>
            <h3>WE ACCEPT</h3>
            <img src="images/cards.png">
          </div>
            
            </div>

          
          </div>
        </div>
        <?php include 'footer.php'?>
    </body>
</html>
