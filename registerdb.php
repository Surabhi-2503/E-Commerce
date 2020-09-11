<?php

        if(isset($_POST['reg']))
        {
           
            $uname=$_POST['name1'];
            $uid=$_POST['email1'];
            $pswd=$_POST['paas1'];
            $cpswd=$_POST['paswd'];
            $phone=$_POST['pno'];
            $addrs=$_POST['addre'];
           
           
            
            if($pswd==$cpswd)
            {
                
              //  echo "insert into customer(uname,umobile,umailid,uaddress,upassword) values ('$uname','$phone','$uid','$addrs','$pswd')";
                $sql="insert into customer(uname,umobile,umailid,uaddress,upassword) values ('$uname','$phone','$uid','$addrs','$pswd')";
                include 'dbconfig.php';
                if(mysqli_query($conn, $sql))
                {
                    echo "<script>alert(\"registered successfully.!!!!!\")</script>";
                    echo"<meta http-equiv='refresh' content='0;URL=index.php'>";
                }
                else
                {
                  echo "<script>alert(\"registered failed.!!!!! try again...!!!!!!\")</script>";
                  echo"<meta http-equiv='refresh' content='0;URL=register.php'>";
                }
               
            }
            else
            {
               echo "<script>alert(\"incorrect password...!!!!\")</script>";
                  echo"<meta http-equiv='refresh' content='0;URL=register.php'>";

            }
        }
        else 
        {
             
           header('location:register.php');
     }
            
 ?>
