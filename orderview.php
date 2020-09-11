<?php
include 'homeheader.php';
?>
<div style=
     "margin-top:40px;;position:absolute;display: flex;
  flex-wrap: wrap;">
<tr><th>USERID</th><th>PRODUCT NAME</th><th>PRODUCT IMAGE</th><th>PRODUCT PRICE</th><th>ORDER DATE</th><th>DELIVARY DATE</th><th>ADDRESS</th></tr>

    <?php
    
      $sql="select * from cart where userid1='$id1'";
                 include "dbconfig.php";
                 $res=$conn->query($sql);
                 if($res->num_rows>0)
                 {
                    while($row = $res->fetch_assoc()) 
                    {
                        $pid2=$row['pro_id2'];
                       // echo "select * from product,description where pro_id=pro_id1and pro_id='$pid'";
                        $sql1="select * from cart,product,description where  pro_id=pro_id2 and pro_id=pro_id1 and pro_id2='$pid2' and userid1='$id1'";
                        $res1=$conn->query($sql1);
                            if($res1->num_rows>0)
                            {
                                while($row = $res1->fetch_assoc()) 
                                {
                                    $caid=$row['cart_id'];
                                    $pname= $row['pro_name']; 
                                    $pimage= $row['pro_image']; 
                                    $pprice= $row['pro_price']; 
                                    $psize= $row['size']; 
                                    $pcolor= $row['color'];
                                    $quat=$row['quantity'];
                                     echo "<div style=\" padding:3%;flex-grow:1;flex-basis:10%;flex: 1 10%;\">";
                                     echo "<br><br><br><img src=\"$pimage\" width=\"200\" height=\"200\" style=\"margin-left:auto;margin-right:auto;width:300px;height:400px;border-style:solid;
                                border-color:black;\">";
                                    // echo "<p style=\"margin-top:12px;\"><b>COLOR:</b><font color=\"red\"> $pcolor</font><br><b>BRAND:</b> <font color=\"red\">$pname</font><br><b>SIZE:</b><font color=\"red\"> $psize</font><br><b>PRICE:</b><font color=\"red\"> $pprice</font></p><br>";
                                            
                              
                  ?>
    
                     <div class="add">
                         <br> <a href=descart.php?id=<?php echo $caid;?> style="display: inline-block;
    text-transform: uppercase;
    box-shadow: none;
    outline: 0;
    font-size:18px;
    font-weight: 500;
    cursor: pointer;
    margin-right: 25px;
    color:red;">PRODUCT DESCRIPTION</a>
     </div>
    <form method="post" action="orderdb.php?id=<?php echo $id1 ?>">
      QUANTITY:<input type="number" name="quantity" value="<?php echo $quat ?>" size="2" disabled="" style="margin-top:2px;border:solid;width:100px;height:30px;font-size: 14px; font-weight: 500;vertical-align: middle;text-align: center;"><br>
  
 <?php           
  echo "</div>";
                  }
                }
              }
        }
        else{
             echo "<script>alert(\"NO ITEM IN THE CART.!!!!!\")</script>";
                    echo"<meta http-equiv='refresh' content='0;URL=home.php'>";
                        
                    }
?>
    
                             
                           
</div>
 <br><input type="submit" name="ord" value="PLACE ORDER" style="   position: relative;
    bottom: 0px;
    left: 74px;
    padding: .4em;
    width: 170px;
    height:50px;
    margin: 0em;
    border-radius:5px;
     background: blue;
    color:white;
                ">
                        </form>
    </BODY>
</html>
          