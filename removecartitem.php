<?php
include 'homeheader.php';

//echo "delete  from cart where userid1='$id1'";
   $sql="delete  from cart where userid1='$id1'";
      include "dbconfig.php";
                 $res=$conn->query($sql);       
               // echo "<script>alert(\"item removed successfully.!!!!!\")</script>";
                    echo"<meta http-equiv='refresh' content='0;URL=home.php'>";                               
                              
  ?>
                
    
  
      
 
    
                             
