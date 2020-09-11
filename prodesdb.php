<?php

        if(isset($_POST['prod']))
        {
             $prid=$_POST['prode'];
            $size=$_POST['psize'];
            $color=$_POST['pcolor'];
            $descp=$_POST['des'];
            
           //echo "insert into description(pro_id1,size,color) values ('$prid','$size','$color')";
            
             $sql="insert into description(pro_id1,size,color,pdes) values ('$prid','$size','$color','$descp')";
             include 'dbconfig.php';
            if(mysqli_query($conn, $sql))
                {
                    echo "<script>alert(\"added successfully.!!!!!\")</script>";
                    echo"<meta http-equiv='refresh' content='0;URL=adminpanel.php'>";
                }
                else
                {
                    echo "<script>alert(\" failed to add.!!!!! try again...!!!!!!\")</script>";
                   echo"<meta http-equiv='refresh' content='0;URL=prodes.php'>";
                }
          
       }
        else 
        {
          header('location:prodes.php');
        }
            
 ?>

