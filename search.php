


 <?php
    session_start();
        if(isset($_POST['search11']))
        {
             $sid11=$_POST['search2'];
            $_SESSION['sea1']=$sid11;
              header('location:searchitem.php');
        }
            else
            {
                echo "<script>alert(\"no item found.!!!!!\")</script>";
               echo"<meta http-equiv='refresh' content='0;URL=logout.php'>";
            }
        
      
  ?>




          
