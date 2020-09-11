<?php include 'header.php'; ?>
    <h3>REGISTRATION PAGE</h3><br>

    <form method="post" action="registerdb.php">
        <br>NAME:<br><input type="text" name="name1" placeholder="enter the valid name" required>
            <br>MOBILE NO:<br><input type="number" name="pno" placeholder="eg:99***845522" required>
            <br>ADDRESS:<br><textarea rows="10" cols="35" name="addre" placeholder="address" required></textarea>
            <br>MAILID:<br><input type="email" name="email1" placeholder="eg:xyz123@famkart.com" required>

            <br>PASSWORD:<br><input type="password" name="paas1" placeholder="Enter the password" required>
            <br>CONFIRM_PASSWORD:<br><input type="password" name="paswd" placeholder="Enter the password" required><br>
           
            <br><input type="submit" value="REGISTER" name="reg">
            <br><h5 ><font color="black">already registered?click</font><a href="index.php"><font color="blue"> here </font></a><font color="black">to sign-in</font></h5>
         </form>
          <?php include 'footer.php' ?>