<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ttgms";

        try{
          $conn = mysqli_connect($servername, $username, $password, $dbname);
          echo("successful in connection");
        }

        catch(MySQLi_Sql_Exception $ex){
          echo("error in connection");
        }

        if(isset($_POST['register'])){
          $fullname = $_POST['fullname']; 
          $email = $_POST['email']; 
          $pakageType = $get=$_POST['pakageType'];
          $address = $_POST['address']; 
          $phoneNum = $_POST['phoneNum']; 
          $startDate = $_POST['startDate']; 
          
          
          $register_query = "INSERT INTO `package_Booking`(`fullname`, `email`, `pakageType`, `address`, `phoneNum`, `startDate`) VALUES ('$fullname', '$email', '$pakageType', '$address', '$phoneNum', '$startDate')";

          try{
            $register_result = mysqli_query($conn, $register_query);
            if(mysqli_affected_rows($conn)>0){
              echo"<script>alert('Booking successful');</script>";

$to = 'karthigesudilani21@gmail.com';
$subject = 'Marriage Proposal';
$message = 'Hi Jane, will you marry me?'; 
$from = 'sandunipiyumikagw@gmail.com';
 
// Sending email
if(mail($to, $subject, $message)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}

              header("location:./Home.php");
            }
            else{
             
            echo"<script>alert('error in Booking');</script>";

            }
            
          }
          catch(Exception $ex){
            echo("error".$ex->getMessage());
          }
          }

        ?>