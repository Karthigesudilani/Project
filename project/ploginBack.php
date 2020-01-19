<?php
    session_start();
    if (isset($_POST["submit"])) {
        $email = $_POST["email"];
        $Pwd = $_POST["psw"];
     
    
    $con = mysqli_connect("localhost", "root", "", "ttgms");
        mysqli_select_db($con, "ttmgs");
        


        $Q2 = "select * from user where userMail='$email' and password='$Pwd'";
        $result = mysqli_query($con, $Q2);
       // $row = mysqli_fetch_assoc($result);
        if ($row = mysqli_fetch_assoc($result)) {

              $_SESSION['email']=$UN['email'];
                $_SESSION['psw']=$row['psw'];
                header("location:./package_Booking.php");
               

              
        } 
    else {
            echo "Invalid user name and password";
        }
        }
    

    
    
  
    ?>