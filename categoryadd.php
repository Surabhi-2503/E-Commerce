<?php

        if(isset($_POST['addcat']))
        {
            $caname=$_POST['cat'];
            $scaname=$_POST['subcat'];
            $scatty=$_POST['cattyp'];

          // echo "insert into category(cat_name,sub_cat_name) values ('$caname','$scaname')";
            $sql="insert into category(cat_name,sub_cat_name,cat_type) values ('$caname','$scaname','$scatty')";
            include 'dbconfig.php';
            if(mysqli_query($conn, $sql))
            {
                echo "<script>alert(\"added successfully.!!!!!\")</script>";
                echo"<meta http-equiv='refresh' content='0;URL=adminpanel.php'>";
            }
            else
            {
               echo "<script>alert(\" failed to add.!!!!! try again...!!!!!!\")</script>";
               echo"<meta http-equiv='refresh' content='0;URL=addcat.php'>";
            }
        }
        else 
        {
          header('location:addcat.php');
        }
            
 ?>
