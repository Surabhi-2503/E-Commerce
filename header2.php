
 <?php
    session_start();
        if(isset($_POST['signin']))
        {
            $userid=$_POST['mail1'];
            $password=$_POST['paswd'];
            if($userid==("surabhi123@famkart.com")&&$password==("march25"))
            {
                $_SESSION['usid']=$userid;
                $_SESSION['paswds']=$password;
                header('location: adminpanel.php');
            }
            else if((preg_match("/@gmail.com/", $userid)))
            {
                $sql="select * from customer where umailid='$userid' and upassword='$password'";
                include "dbconfig.php";
                $res=$conn->query($sql);
                if($res->num_rows>0)
                {
                    $_SESSION['usid']=$userid;
                    $_SESSION['paswds']=$password;
                    header('location:home.php');
               
                }
                else
                {
                    echo "<script>alert(\"no data found.!!!!!\")</script>";
                    echo"<meta http-equiv='refresh' content='0;URL=logout.php'>";
                }
                
            }
            else
            {
                echo "<script>alert(\"invalid data.!!!!!\")</script>";
               echo"<meta http-equiv='refresh' content='0;URL=logout.php'>";
            }
        }
      
  ?>



<html>
    <head>
        <title>
            design
        </title>
        <style>
            body{
                height: 100%;
                margin: 0;
                padding: 0;
            }
            header{
                margin:0px;
                width:100%;
                background-color:pink;
                height:12%;
                position:float;
                }
            
           
            
          
          article{
            
              margin:0px;
              float:right;
                width:75%;
                background-color:lightyellow;
                height:80%;
               overflow: auto;
             
            }
         .bb{
                padding-top:5%;
                
               
            }
            aside{
                float:left;
               margin:0px;
              //padding-top:1.5%;
                width:25%;
                background-color:lavenderblush;
                height:80%;
              }
              .aa{
                  padding-top:45%;
                  padding-left:25%;
              }
         footer{
             margin-top:40%;
            height: 10%;
              text-align: center;
                width:100%;
                background-color:pink;
              }
              .cc{
                  padding-top:10%;
              }
              table{
                  border-color:blue;
                  border-style:dashed;
                  
              }
              th{
                  font-size:15px;
              }
              td{
                  font-size:20px;
              }
            li{
                  display:inline-block;
                  
              }
              img{
                  //border-style:solid white;
                  float:left;
                  margin-top: 15%;
                  margin-left:3%;
                  border-style:solid;
                  border-color:black;
              }
            
        </style>
    </head>
    <body>
