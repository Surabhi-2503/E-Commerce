<?php include 'header.php'; ?>
    <h3>SIGN-IN PAGE</h3><br>

    <form method="post" action="redirect.php" >
            EMAIL:<br><input type="email" name="mail1" placeholder="eg:xyz123@famkart.com" required><br>
           <br>PASSWORD:<br><input type="password" name="paswd" placeholder="Enter the password" required><br>
           
           <br><input type="submit" value="sign-in" name="signin">
            <br><h3 ><font color="black">new user?click</font><a href="register.php"><font color="blue"> here </font></a><font color="black">to register</font></h3>
         </form>
              <?php include 'footer.php' ?>