<?php
include 'homeheader.php';

?>
<?php

        if(isset($_POST['ord']))
        {
           
            $qua=$_POST['quantity'];
           
           $id=$_GET['id'];
            
             
//echo "update cart set quantity='$qua' where cart_id='$id' and userid1='$id1'";
                $sql="update cart set quantity='$qua' where cart_id='$id' and userid1='$id1'";
                include 'dbconfig.php';
                if(mysqli_query($conn, $sql))
                {
                    echo "<script>alert(\"updated successfully.!!!!!\")</script>";
                    echo"<meta http-equiv='refresh' content='0;URL=viewcart.php'>";
                }
                else
                {
                  echo "<script>alert(\" failed.!!!!! try again...!!!!!!\")</script>";
                  echo"<meta http-equiv='refresh' content='0;URL=viewcart.php'>";
                }
               
            
           
        }
        else 
        {
             
           header('location:viewcart.php');
     }
            
 ?>
