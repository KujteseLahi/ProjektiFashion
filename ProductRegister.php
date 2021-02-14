<!DOCTYPE html>
<html lang="en">

<head>
    <title>pocketMarket-Products</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/productRegister.css">

    <script src = "js/productFormValidation.js">

</script>
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
                <button class="nmenubtn" type="menu" onclick="location.href='adminPage.php'">Home</button>
                <button class="nmenubtn" type="menu" onclick="location.href='ProductRegister.php'">Products</button>
         
                
            </div>

         
            <div class="form-group">
                <div class="form-header">
                    <h3 class = "titulli">Add Product Form</h3>
                </div>
                <form action="views/insertProductView.php" method="post" enctype="multipart/form-data">
                    <div class="block">
                        <label class="label">Product Name</label>
                        <input class="inputi1" id="name" type="text" name="ProductName" placeholder="Product Name" />
                    </div>
                    <div class="block">
                        <label class="label" for="ProductCode">Product Code</label>
                        <input class="inputi2" id="code" type="text" name="ProductCode" placeholder="Product Code" />
                    </div>
                    <div class="block">
                        <label class="label" for="Producer">Producer </label>
                        <input class="inputi3" id="producer"type="text" name="Producer" placeholder="Producer" data-validation="custom" />
                    </div>

                    <div class="block">
                        <label class="label">Price</label>
                        <input class="inputi5" id="price" type="text" name="Category" placeholder="Price" />
                    </div>
                    <div class="block">
                        <label class="label">Product Picture</label>
                        <input class="fields"id="file" class="inputi" type="file" name="ProductPicPath" onclick="fileValidation()"accept="image/x-png,image/gif,image/jpeg" placeholder="Product Picture" />
                    </div>
                    <input class="btn" type="submit" name="submitbtn" onclick="noDataReg()" value="Add" />

                    <div class="block">
                        <label class="label">Product ID (Fill only for editing or deleting datas!)</label>
                        <input class="inputi6"id="id" type="text" name="ProductID" placeholder="Product ID" />
                    </div>
                    <div class="blockz">
                        <input class="btn" type="submit" name="submitbtn3" onclick="noDatadel()" value="Delete" />
                        <input class="btn" type="submit" name="submitbtn4"  onclick="noDataEdit()"value="Edit" />
                </form>
              </div>



            <!--onclick="noDataReg()"-->
 <button class="btn1" name="getbtn" onclick="location.href='ProductAdmin.php'">Get Products</button>
 

        </div>
    </div>
    


      </div>
    </body>
<footer>
    
 
  <footer>
        
    

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
