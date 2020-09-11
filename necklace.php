<?php
include 'homeheader.php';
?>
<div class="sea">
                        <form  method="post" action="publicsearch.php">
                            <input type='text' name='search2' placeholder="search by category">
                            <input type='submit' value="SEARCH" name="search11">
                        </form>
             
                    </div>
<div style=
     "margin-top:40px;;position:absolute;display: flex;
  flex-wrap: wrap;">
         <?php
        $sql="select * from category,product,description where cat_id=cid and pro_id=pro_id1 and cat_name='necklace'";

       // $sql="select * from category,product,description where cat_id=cid and pro_id=pro_id1 and pro_id between 1 and 100  and cat_name in('male','female')";
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
                        $pid=$row['pro_id'];
                        echo "<div style=\" padding:3%;flex-grow:1;flex-basis:10%;flex: 1 10%;\">";
                        echo "<br><br><br><img src=\"$pimage\" width=\"200\" height=\"200\" style=\"margin-left:auto;margin-right:auto;width:300px;height:400px;border-style:solid;
                                border-color:black;\">";
                        
                        echo "<p style=\"margin-top:12px;\"><b>COLOR:</b><font color=\"red\"> $pcolor</font><br><b>BRAND:</b> <font color=\"red\">$pname</font><br><b>SIZE:</b><font color=\"red\"> $psize</font><br><b>PRICE:</b><font color=\"red\"> $pprice</font></p><br>";

                  ?>
    
                     <div class="add" style="   position: relative;
    bottom: 0px;
    left: 74px;
    padding: .4em;
    width: 8.5em;
    margin: 0em">
                        <form method="post" action="cartdb.php?id=<?php echo $pid;?>">
                            <input type="submit" name="cart" value="Add To Cart">
                        </form>
                    </div>

  <?php           
  echo "</div>";
                  }
                }
    else 
    {
       echo "<script>alert(\"no result\")</script>";
    //echo"<meta http-equiv='refresh' content='0;URL=home.php'>";
    }


?>
</div>
    
        </div>
    </BODY>
</html>
          

