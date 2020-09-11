<?php include 'header3.php'; ?>
        <section>
          <div class="aa" style="height:auto;">   
        <h3>ADD PRODUCT CATEGORY</h3><br>

                <form method="post" action="categoryadd.php" >
                    <br> CATEGORY NAME:<br><br><input type="text" name="cat" placeholder="eg:male,female,girl,boy.." required><br>
                    <br>SUB-CATEGORY:<br><br><input type="text" name="subcat" placeholder="eg:jeans,skirt,nightware" required><br>
                   <br>CAT_TYPE:<br><br><input type="text" name="cattyp" placeholder="eg:clothing,shoes,electronics"><br>
          
           <br><input type="submit" value="ADD" name="addcat">
         </form>
        
        </section>
        </div>
    </body>
</html>