<?php
    session_start();
        if(isset($_POST['next1']))
        {
            $userid=$_POST['id3'];
            $mode=$_POST['modes'];
            if($mode==("COD"))
            {
                $_SESSION['modes']=$mode;
                header('location: cod.php');
            }
            else{
               $_SESSION['modes']=$mode;
                header('location:online.php'); 
            }
        }
        else
        {
                echo "<script>alert(\"no data.!!!!!\")</script>";
               echo"<meta http-equiv='refresh' content='0;URL=orderdescription.php'>";
        }
        
      
  ?>
