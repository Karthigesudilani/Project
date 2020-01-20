<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ttgms";

        try{
          $conn = mysqli_connect($servername, $username, $password, $dbname);
          
        }

        catch(MySQLi_Sql_Exception $ex){
          echo("error in connection");
        }

        if(isset($_POST['register'])){
          $fullName = $_POST['fullName'];
          $guideId = $_POST['guideId'];
          $driverId = $_POST['driverId'];
          $vId = $_POST['vId'];
          $startDate = $_POST['startDate']; 
          $endDate = $_POST['endDate'];            
          $userMail = $_POST['userMail']; 
          $total  = $_POST['total']; 
                   
          
          $register_query = "INSERT INTO `booking`(`bId`,`fullName`, `guideId`, `driverId`, `vId`, `startDate`, `endDate`,`userMail`,`total`) VALUES ('','$fullName', '$guideId', '$driverId', '$vId', '$startDate', '$endDate','$userMail','$total')";

          try{
            $register_result = mysqli_query($conn, $register_query);
            if(mysqli_affected_rows($conn)>0){
              
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