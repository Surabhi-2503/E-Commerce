<?php
include 'homeheader.php';
if(isset($_POST['next3']))
        {
        $payment=$_POST['tcard'];
            $addres=$_POST['addre'];
        }
if(isset($_SESSION['modes'])){
      $MODE=$_SESSION['modes'];
     
}
?>
<div style=
     "margin-top:40px;;position:absolute;display: flex;
  flex-wrap: wrap;">
    <?php
    $Today=date('y:m:d');
    $NewDate=Date('y:m:d', strtotime("+10 days"));
    $i=0;
   $arraypid = array();
   $arraycart=array();
    $sum=0;
    $pro_count=0;
    $totqua=0;
    $prods="";
    $carts="";
      $sql="select * from cart where userid1='$id1'";
                 include "dbconfig.php";
                 $res=$conn->query($sql);
                 if($res->num_rows>0)
                 {
                    while($row = $res->fetch_assoc()) 
                    {
                        $caid=$row['cart_id'];
                        $pid1= $row['pro_id2']; 
                        $pprice= $row['pro_price1']; 
                        $quat=$row['quantity'];
                        $sum=$sum+($quat*$pprice);
                        $pro_count=$pro_count+1;
                        $totqua+=$quat;
                        array_push($arraypid, $pid1);
                        array_push($arraycart, $caid);
                     }
                 }
                 for($i=0;$i<$pro_count;$i++)
                 {
                     
                     $carts=$carts." || ".$arraycart[$i];
                     $prods = $prods." ||".$arraypid[$i];
                 }
                 
                 
                // echo "insert into payment(uid1,pro_id3,car_id,total_price,mode_of_payment,tot_qua,delivary_date,address) values ('$id1','$prods','$carts','$sum','$MODE','$totqua','$NewDate','$addres')";
                        echo " total quantity $totqua <br><hr>";
                        echo " cart $arraycart[$i] <br><hr>  ";
                        echo "proid $arraypid[$i]<br>";
                                    $i=$i+1;

                $sql="insert into payment(uid1,pro_id3,car_id,total_price,mode_of_payment,card_no,tot_qua,delivary_date,address) values ('$id1','$prods','$carts','$sum','$MODE','$payment','$totqua','$NewDate','$addres')";
                
                include 'dbconfig.php';
                if(mysqli_query($conn, $sql))
                {
                    echo "<script>alert(\"payment successfull.!!!!!\")</script>";
                    echo"<meta http-equiv='refresh' content='0;URL=removecartitem.php'>";
                }
                else
                {
                  echo "<script>alert(\"payment failed.!!!!! try again...!!!!!!\")</script>";
                  echo"<meta http-equiv='refresh' content='0;URL=codr.php'>";
                }
    ?>
   
    </body>
</html>
