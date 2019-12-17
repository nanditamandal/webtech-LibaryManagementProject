<?php
require "db.php";
    session_start();
    
    if(isset($_POST['submit'])){

        $userid = $_POST['userid'];
        $password = $_POST['password'];


        if($userid == "" && $password == "" )
        {
            header("location: salesmanlogin.php?status=nullvalue");
        }
        else
        {

           $conn = DBconnection();
            $sql = "SELECT id FROM salesman WHERE userid='$userid' and password='$password'";
            $result = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($result);

            
            if($count == 1)
            {
                $_SESSION['abc'] = "validuser";
                $isValid = "valid";
                
                if($_POST['rm'] =="on"){

                    setcookie("remember","valid",time()+36000000, "/" );
                }
                header("location: salesmanhomepage.php");
                
            }
        
            else{
                header("location: salesmanlogin.php?status=invaliduser");
            }
            
        }

    }else{
        echo "invalid Reguest!";
    }
    
?>