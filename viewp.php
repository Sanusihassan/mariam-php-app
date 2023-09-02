
<?php
include "info.php";


?>




<html>
<head>
  
<style>
<?php include "style.css"; ?>
</style>

</head>

<body>

<header class="header">

                                                                        
                                                                            
                                                                        
                                                                            <div class="Address">
                                                                        <div class="text">
                                                                        
                                                                        </div>
                                                                    
                                                                        <div class="text1">
                                                                        
                                                                        </div>
                                                                       
                                                                       
                                                                        <div class="text1">
                                                                             
                                                                        </div>
                                                            
                                                         
                                                                        </div>
                                                                     
                     
                                <div class="LinkEng">
                                  
                                 </div>
                                                                
                                                                
                                                            
                                                            
                                                                </header>
                                                        <!--Enf of Background-->
                                                        <!--Start of Title &#38; Description-->
                                                        
                                                        
                                
                                
                            
                            
                            <div class="container">
                               

                                <div class="verify-title">
                                   
                          
                                </div>
                                
                         
                               


                                <div class="inpbg"> 

<form method="post">

<div class="inpinfo">


    <input type="text" placeholder="رقم المرجع" name="reference_number" autocomplete="off" >

    <input type="text" placeholder="رقم الهوية" name="Id_number" autocomplete="off" >

    

</div>
<div class="btn">
    <input type="submit" name="submit" value="تحقق">

</div>

    <?php


     if (isset($_POST["submit"]))
     {
      
       
            $id_ref = mysqli_real_escape_string($con, $_POST['reference_number']);
            $id_pass = mysqli_real_escape_string($con, $_POST['Id_number']);
           
    
            if (empty($id_ref)) {
                array_push($errors, "ادخل رقم المرجع ");
            }
            if (empty($id_pass)) {
                array_push($errors, "ادخل رقم الهوية /رقم الجواز ");
            }
    
         
                $query = "SELECT * FROM std WHERE Id_ref='$id_ref' AND Id_pass='$id_pass'";
                $results = mysqli_query($con, $query);
    
                if (mysqli_num_rows($results) == 1) {
                    $_SESSION['Id_ref'] = $id_ref;
                    $_SESSION['Id_pass'] = $id_pass;

                    $_SESSION['success'] = "Login is succesed";
                    echo  "Login is succesed";
                    
                       include "home.php";
                    
                    
                    

               
                }else {
                  echo "Error in Id_refernce or Id_pass";
                }
            }
        


      
     
     
       



       ?>
    
    


</form>

</div>



</body>

</html>
