<?php
include 'homeheader2.php';
if(isset($_SESSION['modes'])){
      $MODE=$_SESSION['modes'];
     
    }
$sum=0;
$totqua=0;
$sql="select * from cart where userid1='$id1'";
include "dbconfig.php";
$res=$conn->query($sql);
if($res->num_rows>0)
{
    while($row = $res->fetch_assoc()) 
    {
        $pprice= $row['pro_price1']; 
        $quat=$row['quantity'];
        $sum=$sum+($quat*$pprice);
        $totqua+=$quat;
    }
}
                        
?>

<div style="
            float: right;
            width:350px;
            height:auto;
            background-color:rgba(0,115,115,0.1); 
            margin:0;
            margin-right:2%;
            margin-top:20px;
            padding-top: 10px; 
            padding-left: 20px;
            padding-bottom: 40px;
            border-radius: 5px;
            -webkit-border-radius: 25px;
            -o-border-radius:25px;
            -moz-border-radius:25px;
            color:black;
            text-shadow:2px 2px 4px lavender;
            font-weight:bold;
            font-size: 18px;
            position: relative;
  ">
 <h3>PAYMENT</h3><br>

    <form method="post" action="paymentonline.php" >
        EMAIL:<br><input type="email" name="id3" value="<?php echo $id1; ?>" disabled 
                 style="width:200px;
                    height: 30px;
                    border: 0;
                    border-radius:7px;
                    padding-left:7px;
                    -webkit-border-radius: 5px;
                    -o-border-radius:5px;
                    -moz-border-radius:5px;"><br>
        <br>PRODUCT TOTAL QUANTITY:<br><input type="number" name="tquan" value="<?php echo $totqua; ?>" disabled style="width:200px;
                    height: 30px;
                    border: 0;
                    border-radius:7px;
                    padding-left:7px;
                    -webkit-border-radius: 5px;
                    -o-border-radius:5px;
                    -moz-border-radius:5px;"><br>
        <br> TOTAL PRICE:<br><input type="number" name="tprice" value="<?php echo $sum; ?>" disabled style="width:200px;
                    height: 30px;
                    border: 0;
                    border-radius:7px;
                    padding-left:7px;
                    -webkit-border-radius: 5px;
                    -o-border-radius:5px;
                    -moz-border-radius:5px;"><br>
        <br> MODE:<br><input type="text" name="tmode" value="<?php echo $MODE; ?>" disabled style="width:200px;
                    height: 30px;
                    border: 0;
                    border-radius:7px;
                    padding-left:7px;
                    -webkit-border-radius: 5px;
                    -o-border-radius:5px;
                    -moz-border-radius:5px;"><br>
        <br> CARD NO:<br><input type="text" name="tcard" placeholder="123456789012" required style="width:200px;
                    height: 30px;
                    border: 0;
                    border-radius:7px;
                    padding-left:7px;
                    -webkit-border-radius: 5px;
                    -o-border-radius:5px;
                    -moz-border-radius:5px;"><br>
        <br>ADDRESS:<br><textarea rows="10" cols="35" name="addre" placeholder="address" required  style="width:200px;
                height: 110px;
                border: 0;
                border-radius:7px;
                padding-left:7px;
                -webkit-border-radius: 5px;
                -o-border-radius:5px;
                -moz-border-radius:5px;"></textarea><br>
                 <div class="aaa">
        <br><input type="submit" value="make payment" name="next3">
                 </div>
    </form>
  
</div>

    

 
              
               
               
           