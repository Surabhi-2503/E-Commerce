<?php 
    include 'header3.php'; 
?>
<section>
    <div class="aa">   
        <h3>ADD PRODUCT </h3><br>
            <form method="post" action="productadddb.php" enctype="multipart/form-data" >
                <?php
                $sql="select distinct cat_name,cat_id,sub_cat_name from category order by cat_id";
                include "dbconfig.php";
                $res=$conn->query($sql);
                ?>
                CATEGORY:<br><select name="cate" required style="width:250px;
                padding:3px;
                
                font-family:cursive; 
                line-height:1;
              border-radius:5px;
               background-color:lavendere;
              color:black;
                font-size:20px;
              ">
                <?php
                if($res->num_rows>0)
                {
                   while($row = $res->fetch_assoc()) 
                    { 
                    ?>
               
                <option value="<?php echo $row['cat_id']; ?>"><?php echo $row['cat_name']; echo "  " ;echo $row['sub_cat_name'] ; ?></option>
                <?php }
                }
                ?>
                  
                 </select>
                <br>PRODUCT-NAME:<br><input type="text" name="prname" placeholder="enter the product name">
                <br>PRODUCT IMAGE:<br><input type="file" name="pics" required ><br>
                <br>PRODUCT PRICE:<br><input type="text" name="pprice" placeholder="eg:$120" required>
          <br><br><input type="submit" value="ADD" name="addpro">
            </form>
        </div>
</section>
        </div>
    </body>
</html>