<?php
include 'homeheader.php';
$id=$_GET['id'];

   $sql="delete  from cart where userid1='$id1' and cart_id='$id'";
      include "dbconfig.php";
                 $res=$conn->query($sql);       
                echo "<script>alert(\"item removed successfully.!!!!!\")</script>";
                    echo"<meta http-equiv='refresh' content='0;URL=viewcart.php'>";                               
                              
  ?>
                
    
  
      
 
    
                             
