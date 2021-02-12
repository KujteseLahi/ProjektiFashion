<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/Projekti/controller/AboutUsController.php');
if (isset($_POST['submitB'])) {
    
    $comment= $_POST['w3review'];
  $view = new InsertView();
    $view->InsertTextForm($comment);

    
    
}
class InsertView
{
    public function InsertTextForm($comment){
    
             
        // dergojme kerkesen ne controller
        $abouText = new aboutUs($comment);
        $controller = new AboutUsController();
        $response = $controller->InsertKoment($abouText);

        if ($response) {
            ?>
                          <?php

echo '<script type="text/javascript">'; 
echo 'alert("Comment send!");'; 
echo 'window.location.href = "../home.php";';
echo '</script>';


?>
                      
                    <?php
                   
                    } else {
                    ?>
                   
                   <?php

echo '<script type="text/javascript">'; 
echo 'alert("Comment Failed!");'; 
echo 'window.location.href = "../home.php";';
echo '</script>';


?>
        
          <?php
         // header("Location:../logIb.php"); 
         // exit();
          echo "Register Failed";
                    }
    
}

public function getKomentet()
    {
        // dergojme kerkesen ne controller
        $controller = new AboutUsController();
        $data = $controller->GetK();

        return $data;
}



}



















?>