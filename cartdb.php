<?php //
include 'homeheader.php';
?>
<?php 
     $id=$_GET['id'];
      $sql="select * from product where  pro_id=$id";
        include "dbconfig.php";
        $res=$conn->query($sql);
        if($res->num_rows>0)
                 {
                    while($row = $res->fetch_assoc()) 
                    {  
                        $pprice=$row['pro_price'];
             //   echo "insert into cart(pro_id2,pro_price1) values ('$id','$pprice')";
                        $sql1="insert into cart(pro_id2,pro_price1,userid1) values ('$id','$pprice','$id1')";
                         if(mysqli_query($conn, $sql1))
                         {
                                echo "<script>alert(\"SUCCESSFULLY ADDED TO CART....!!!!!\")</script>";
                                echo"<meta http-equiv='refresh' content='0;URL=home.php'>";
                         }
                         else
                        {
                                echo "<script>alert(\" failed to add.!!!!! try again...!!!!!!\")</script>";
                                echo"<meta http-equiv='refresh' content='0;URL=home.php'>";
                        }
                    }
                 }
   
    ?>
</div>
    </BODY>
</html>
          