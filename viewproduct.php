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
                height: 75px;
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
                padding-top: 20px;
                margin-top: 50px;
                position:relative;
               
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
    opacity:0.9;">
       <div class="first">
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
                    <li><a href="logout.php"><b>logout</b></a></li>
                    
             </ul>
             </div>
         </div>
      
             <center>
              
                    <div class="label">PRODUCTS </div>
                    <div class="sea">
                        <form  method="post" action="search.php">
                            <input type='text' name='search2' placeholder="search by category">
                            <input type='submit' value="search" name="search11">
                        </form>
             
                    </div>
                    <table style="margin: 0;padding: 0;position:relative;">
<!--<div class="aa" >-->
<tr><th>CATEGORY-NAME</th><th>SUB CATEGORY</th><th>PRODUCT NAME</th><th>PRODUCT IMG</th><th>PRODUCT PRICE</th><th>SIZE</th><th>COLOR</th></tr>
                <?php
               
               
                 $sql="select * from category,product,description where cat_id=cid and pro_id=pro_id1";
                 include "dbconfig.php";
                 $res=$conn->query($sql);
                 if($res->num_rows>0)
                 {
                    while($row = $res->fetch_assoc()) 
                    {
                        $cname=$row['cat_name'];
                        $sname= $row['sub_cat_name']; 
                        $pname= $row['pro_name']; 
                        $pimage= $row['pro_image']; 
                        $pprice= $row['pro_price']; 
                        $psize= $row['size']; 
                        $pcolor= $row['color']; 

                      
           
            echo "<tr ><td>$cname</td><td>$sname</td><td>$pname</td><td><img src=$pimage width=\"200\" height=\"200\"></td><td>$pprice</td><td>$psize</td><td>$pcolor</td></tr><br>";
                    }
                }
    else 
    {
       echo "<script>alert(\"inbox is empty\")</script>";
    echo"<meta http-equiv='refresh' content='0;URL=home.php'>";
    }


?>
                </table>
             </center>
       
    </body>
</html>