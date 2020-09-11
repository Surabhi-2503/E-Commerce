<?php
include 'homeheader.php';
?>
<div style=
     "margin-top:40px;;position:absolute;display: flex;
  flex-wrap: wrap;">
    <?php
    $sum=0;
    $pro_count=0;
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
                                     $sum=$sum+($quat*$pprice);
                                    $pro_count=$pro_count+1;
                                    echo "<div style=\" padding:1%;flex-grow:1;\">";
                                echo "<br><br><br><img src=\"$pimage\" width=\"200\" height=\"200\" style=\"margin-left:auto;margin-right:auto;width:300px;height:400px;border-style:solid;
                                border-color:black;\">";
                                    echo "<p style=\"margin-top:12px;\"><b>COLOR:</b><font color=\"red\"> $pcolor</font><br><b>BRAND:</b> <font color=\"red\">$pname</font><br><b>SIZE:</b><font color=\"red\"> $psize</font><br><b>PRICE:</b><font color=\"red\"> $pprice</font><BR><b>QUANTITY:</b><font color=\"red\"> $quat</font><br></p><br>";
                                   
                              
                  ?>
      <center> 
    <form method="post" action="orderdescription.php?id=<?php echo $id1 ?>">
      
       
 <?php           
 echo "</div>";
                  }
                }
                                }
                    }
?>
  
        <div style=" float: right;
                    width:350px;
                    height:auto;
                    background-color:rgba(0,0,2,0.1); 
                    margin:0;
                    margin-left:500px;
                    margin-top: 55px;
                    padding-top:30px; 
                    padding-left: 50px;
                    padding-bottom: 40px;
                    border-radius:4px;
                    color:royalblue;
                    text-shadow:2px 2px 4px white;
                    font-weight:bold;
                    font-size: 20px;">                     
            <p><font color="black">TOTAL PRODUCT:  </font><?php echo $pro_count;?></p><br>
    <p><font color="black">TOTAL PRICE:  </font><?php echo $sum;?></p>                      
    <br><input type="submit" name="pay" value="make payment" style="   position: relative;
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
            
        </div>
      
        </form>
            </center>
    </body>
</html>
          