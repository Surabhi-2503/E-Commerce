<?php 
session_start();
      if(isset($_SESSION['usid'])){
      $id1=$_SESSION['usid'];
     
    }
    else
{
    echo "<script>alert(\"no item\")</script>";
  }
?>
<html>
    <head>
        <title>VIEW</title>
        <link rel="stylesheet" type="text/css" href="style4.css">
        <style>
            .aaa input[type="submit"]{
                  display: block;
                  padding: 12px 30px;
                  color:white;
                  font-size:15px;
                  font-weight: bold;
                  border:3px solid transparent;
                  border-radius:15px;
                  background: linear-gradient(rgba(0,0,255,0.3), rgba(0,0,255,0.5)),radial-gradient(circle at top LEFT,red,green);
                  background-origin: border-box;
                  box-shadow: inset 0px 1px 4px -2px #333;
               }
                .aaa input[type="submit"]:after{
                        content: '';
                        position: absolute;
                        top: 2px;
                        left: 2px;
                        width: calc(100% - 4px);
                        height: 10%;
                }      
             .aaa input[type="submit"]:hover{
                background:linear-gradient(burlywood,brown);
                }
            .add input[type="submit"] {
                float:right;
                width:100px;
                height: 30px;
                vertical-align: middle;
                border: 0;
                border-radius:7px;
                padding-left:10px;
                -webkit-border-radius: 5px;
                -o-border-radius:5px;
                -moz-border-radius:5px;
                background: blue;
                color:white;
                margin-right:30px
            }
            .contentdis{
                float: right;
                margin-right:150px;
               margin-top:5px;
            }
              .sea{
               float:left;
                padding-top: 15px;
                padding-left: 100px;
               
            }
             .sea input[type="text"]
            {
              border-style:dashed;
              border-color:lavender;
              width:350px;
            height:30px;
            vertical-align: middle;
           border-radius:5px;
            border-collapse: collapse;
             padding-left:10px;
            -webkit-border-radius: 5px;
             -o-border-radius:5px;
             -moz-border-radius:5px;
            }
            .sea input[type="submit"]
            {
              width:85px;
            height: 30px;
            border: 0;
            border-radius:3px;
            padding-left:5px;
            -webkit-border-radius: 5px;
             -o-border-radius:5px;
             -moz-border-radius:5px;
          background:teal;
          color:white;
          margin-right:30px
          }
        </style>
    </head>
    <BODY>
       <div class="first">
            <div class="second">
                <font color="yellow">FAM</font><font color="lavender">KART</font>
               
                <p class="third">Contact:9448526894  || <?php echo "$id1"; ?></p>
            </div>
          
                        <ul>
                 <li><a  href="home.php"><b>HOME</b></a></li>
                    <li class="dropdown">
                        <a class="dropbtn">CLOTHING</a>
                            <div class="dropdown-content">
                                <a href="mencloth.php"><b>MENS</b></a>
                                <a href="womencloth.php"><b>WOMENS</b></a>
                                <a href="girlscloth.php"><b>GIRLS</b></a>
                                <a href="boyscloth.php"><b>BOYS</b></a>
                                <a href="allclo.php"><b>ALL</b></a>
                            </div>
                    </li>
                      <li class="dropdown">
                        <a class="dropbtn">JEWELLARY</a>
                            <div class="dropdown-content">
                                <a href="earring.php"><b>EARRINGS</b></a>
                                <a href="bangles.php"><b>BANGLES</b></a>
                                <a href="necklace.php"><b>NECKLACE</b></a>
                                <a href="alljew.php"><b>ALL</b></a>
                            </div>
                    </li>
                      <li class="dropdown">
                        <a class="dropbtn">HOME APPLICATION/LAPTOPS</a>
                            <div class="dropdown-content">
                                <a href="mobile.php"><b>MOBILES</b></a>
                                <a href="laptop.php"><b>LAPTOPS</b></a>
                                <a href="head.php"><b>HEADPHONES/EARPHONES</b></a>
                             <a href="homeapplication.php"><b>HOMEAPPLIANCES</b></a>
                                <a href="allapp.php"><b>ALL</b></a>
                            </div>
                    </li>
                    <li class="dropdown">
                        <a class="dropbtn">BEAUTY PRODUCTS</a>
                            <div class="dropdown-content">
                                <a href="makeup.php"><b>MAKEUP</b></a>
                                <a href="skin.php"><b>SKINCARE</b></a>
                                <a href="hair.php"><b>HAIRCARE</b></a>
                                <a href="deo.php"><b>DEODRANTS/PERFUMES</b></a>
                            </div>
                    </li>
                      <li class="dropdown">
                        <a class="dropbtn">STATIONARY</a>
                            <div class="dropdown-content">
                                <a href="pens.php"><b>PENS</b></a>
                                <a href="bags.php"><b>BAGPACK</b></a>
                                <a href="calc.php"><b>CALCULATOR</b></a>
                                <a href="deskorganiser.php"><b>DESK ORGANISER</b></a>
                                <a href="keychains.php"><b>KEY CHAINS</b></a>
                            </div>
                    </li>
                    <li><a href="viewcart.php"><b>MY CART</b></a></li>
                    <li><a href="logout.php"><b>LOGOUT</b></a></li>

                    
             </ul>
               
               

        