<?php

        if(isset($_POST['addpro']))
        {
            $pic=$_FILES['pics']['name'];//default to get file name,and name and tmp are inbuilt class
            $pic_loc=$_FILES['pics']['tmp_name'];//to get pic location
            $info=pathinfo($_FILES['pics']['name']);
            $ext=$info['extension'];//default function
            
            $prname=$_POST['prname'];
            $prpri=$_POST['pprice'];
            $catid=$_POST['cate'];
            $new_name=$prname.$catid.".".$ext;
            $target="pic/".$new_name;
        //    echo "insert into product(cid,pro_name,pro_image,pro_price) values ('$catid','$prname','$target','$prpri')";
            if(move_uploaded_file($pic_loc,$target))
            {
             $sql="insert into product(cid,pro_name,pro_image,pro_price) values ('$catid','$prname','$target','$prpri')";
             include 'dbconfig.php';
            if(mysqli_query($conn, $sql))
                {
                    echo "<script>alert(\"added successfully.!!!!!\")</script>";
                    echo"<meta http-equiv='refresh' content='0;URL=adminpanel.php'>";
                }
                else
                {
                    echo "<script>alert(\" failed to add.!!!!! try again...!!!!!!\")</script>";
                   echo"<meta http-equiv='refresh' content='0;URL=addproduct.php'>";
                }
            }
         else{
                echo "<script>alert(\"failed to upload the pic.!!!!! try again...!!!!!!\")</script>";
                  echo"<meta http-equiv='refresh' content='0;URL=addproduct.php'>";
            }
       }
        else 
        {
          header('location:addproduct.php');
        }
            
 ?>
