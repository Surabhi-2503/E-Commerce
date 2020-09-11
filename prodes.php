<?php include 'header3.php'; ?>
        <section>
          <div class="aa">   
        <h3>ADD PRODUCT DESCRIPTION</h3><br>

                <form method="post" action="prodesdb.php" >
                     <?php
                $sql="select DISTINCT pro_id,pro_name from product order by pro_id";
                include "dbconfig.php";
                $res=$conn->query($sql);
                ?>
                PRODUCT-NAME:<br><select name="prode" required style="width:250px;
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
               
                <option value="<?php echo $row['pro_id']; ?>"><?php echo $row['pro_name']; ?></option>
                <?php }
                }
                ?>
                  
                 </select>
                    <br>SIZE:<br><input type="text" name="psize" placeholder="eg:jeans,skirt,nightware" required><br>
                    COLOR:<br><input type="text" name="pcolor" placeholder="eg:black,blue,green" required><br>
                    DESCRIPTION:<br><input type="text" name="des" placeholder="description" required><br>
                    <input type="submit" value="ADD" name="prod">
         </form>
        
        </section>
        </div>
    </body>
</html>