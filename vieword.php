<html>
    <head>
        <title>VIEW</title>
        <link rel="stylesheet" type="text/css" href="style3.css">
        <style>
             ul {
                
              list-style-type: none;
              margin: 0 auto;
              padding:0;
              padding-top: 20px;
              overflow: hidden;
              background-color:lavenderblush;
              width: 100%;
              height:30px;
           }
           li a{
               text-indent: 3em;
                float:left;
                color:red;
                font-weight: bold;
          }
               
            .label{
               
                width: 100%;
                height: 55px;
                background:yellow;
                border-collapse: collapse;
                font-family: monospace;
                font-size: 30px;
                color:black;
                font-weight: bold;
                padding-top:50px;
            }
            .sea{
               float:right;
                padding-top: 15px;
               
            }
             .sea input[type="text"]
            {
              border-style:dashed;
              border-color:black;
              width:250px;
            height: 30px;
           border-radius:7px;
            border-collapse: collapse;
             padding-left:10px;
            -webkit-border-radius: 5px;
             -o-border-radius:5px;
             -moz-border-radius:5px;
            }
            .sea input[type="submit"]
            {
              width:75px;
            height: 30px;
            border: 0;
            border-radius:7px;
            padding-left:7px;
            -webkit-border-radius: 5px;
             -o-border-radius:5px;
             -moz-border-radius:5px;
          background: blue;
          color:white;
          margin-right:20px
          }
         
          
        </style>
    </head>
      <body style="display: 100%;
     margin: 0;
    padding:0;
    border-collapse: collapse;
    background: url(shopping-cart-full-bags-gift-600w-174958088.jpg) repeat;
    background-position: center;
    background-size:35%;
    opacity:0.9;">   <div class="first">
            <div class="second">
                <font color="yellow">FAM</font><font color="lavender">KART</font>
               
                <p class="third">Contact:9448526894</p>
            </div>
           <div class="list">
                        <ul>
                 <li><a  href="adminpanel.php"><b>Dashboard</b></a></li>
                    <li><a href="addcat.php"><b>Add Category</b></a></li>
                    <li><a href="addproduct.php"><b>Add Product</b></a></li>
                    <li><a href="prodes.php"><b>Product Desc</b></a></li>
                        <li><a href="viewproduct.php"><b>View Product</b></a></li>
                        <li><a href="vieword.php"><b>View Orders</b></a></li>
                    <li><a href="logout.php"><b>LOGOUT</b></a></li>
                    
             </ul>
             </div>
         </div>
        <div class="viewtable">
             <center>
                   <div class="label">ORDERS </div>
               

                   <table style="position:relative;margin:0;padding:0;">
<tr><th>USERID</th><th>PRODUCT NAME</th><th>PRODUCT IMAGE</th><th>PRODUCT PRICE</th><th>ORDER DATE</th><th>DELIVARY DATE</th><th>ADDRESS</th><th>MODE_OF_PAYMENT</th></tr>
                <?php
               
               //$sql1="select * from payment,product,description where  pro_id=pro_id2 and pro_id=pro_id1";
$sql="select * from payment order by pay_id";
include "dbconfig.php";
$res=$conn->query($sql);
if($res->num_rows>0)
{
        while($row = $res->fetch_assoc()) 
        {
             $user=$row['uid1'];
                $pid4=$row['pro_id3'];
                $cart3=$row['car_id'];
                $str_arr = explode ("||", $pid4);  
               // print_r($str_arr);
                for($i=1;$i<sizeof($str_arr);$i++)
                {
                    //echo"select * from payment,product,description where  pro_id=pro_id2 and pro_id=pro_id1 and pro_id=$str_arr[$i] and uid1='$user' <br>";
                    $sql1="select * from product,description,payment where  pro_id=pro_id1 and pro_id='$str_arr[$i]' and uid1='$user' ORDER BY address,ord_date ";
                    $res1=$conn->query($sql1);
                    if($res1->num_rows>0)
                    {
                        
                        while($row = $res1->fetch_assoc()) 
                        {
                       $MODE=$row['mode_of_payment'];
                        $productid= $str_arr[$i]; 
                        $total= $row['total_price']; 
                        $addres=$row['address'];
                        $orddate=$row['ord_date'];
                        $del=$row['delivary_date'];
                        $pname= $row['pro_name']; 
                        $pimage= $row['pro_image']; 
                        $pprice= $row['pro_price']; 
                        echo "<tr ><td>$user</td><td>$pname</td><td><img src=$pimage width=\"200\" height=\"200\"></td><td>$pprice</td><td>$orddate</td><td>$del</td><td>$addres</td><td>$MODE</td></tr><br>";
                        }
                    }
                    else{
                        echo "error";
                    }
                }
            }
        }
    else 
    {
       echo "<script>alert(\"inbox is empty\")</script>";
    echo"<meta http-equiv='refresh' content='0;URL=adminpanel.php'>";
    }


?>
                </table>
             </center>
        </div>
      </body>
</html>