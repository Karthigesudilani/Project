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
          $fName = $_POST['fName']; 
          $lName = $_POST['lName']; 
          $uNIC = $_POST['uNIC']; 
          $uAge = $_POST['uAge']; 
          $userMail = $_POST['userMail']; 
          $password = $_POST['password']; 
          
          
          $register_query = "INSERT INTO `user`(`fName`, `lName`, `uNIC`, `uAge`, `userMail`, `password`) VALUES ('$fName', '$lName', '$uNIC', '$uAge', '$userMail', '$password')";

          try{
            $register_result = mysqli_query($conn, $register_query);
            if(mysqli_affected_rows($conn)>0){
              echo"<script>alert('registration successful');</script>";
            }
            else{
             
            echo"<script>alert('error in registration');</script>";
            }
            
          }
          catch(Exception $ex){
            echo("error".$ex->getMessage());
          }
          }

        ?>

<HTML lang="en">
<HEAD>
  <TITLE>
  Tourists Transportation and Guiding Management System for a Travel Agency In Badulla  
  </TITLE>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  

<!-- CUSTOM STYLE CSS -->
    <link href="ass\style.css" rel="stylesheet" />


      <style>

      * {
          box-sizing: border-box;
        }
  
@media screen and(min-width:600px ){
  #image{
      flex:50%;
      max-width: 50%;
      }
  }

@media screen and(max-width:800px ){
  #image{
      flex:100%;
      max-width: 100%;
      }
  }

.div1 {
    display: flex;
    flex-wrap: wrap;
    padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.image {
    flex: 25%;
    max-width: 25%;
    padding: 0 4px;
  background-color :black;
  flex-wrap: nowrap;
}

.img:hover{
transform: scale(1.15);
}
.img{
    margin-top: 10px;
 }

.full {
 
    width: 100%; 
 
}
 
 
 
.footer {
 
                height: auto;
 
                padding-bottom: 30px;
 
                position: relative;
 
                width: 100%;
 
                 color:green;
 
                border-bottom: 1px solid #CCCCCC;
 
                border-top: 1px solid #DDDDDD;
 
                background: #ffffff;
 
                background: -webkit-linear-gradient(to right, #000000, #ffffff); 
 
                background: linear-gradient(to right, #000000, #ffffff);   
 
}
 
 
 
 
 

.footer ul {
 
                font-size: 13px;
 
                list-style-type: none;
 
                margin-left: 0;
 
                padding-left: 0;
 
                margin-top: 15px;
 
                color: #000000;
 
}


 

</style>
</HEAD>

<BODY>
<div style = "background-image:url('Badulla.jpg');  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;">
<div style="background-color: Gray;font-style:italic;">
  <center><h5><b>Tourists Transportation and Guiding Management System for a Travel Agency In Badulla.
</h5></center></div>

<!--Nav Bar-->  
<div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="Home.php">Home</a>
    </li>
 
     <li class="nav-item">
      <a class="nav-link" href=""></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="Transportation.php">Transport</a>
    </li>
        

     <li class="nav-item">
      <a class="nav-link" href=""></a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="guide.php">Guide</a>
    </li>

     <li class="nav-item">
      <a class="nav-link" href=""></a>
    </li>
 
     <li class="nav-item">
      <a class="nav-link" href="driver.php">Driver</a>
    </li>
  
     <li class="nav-item">
      <a class="nav-link" href=""></a>
    </li>
    
     <li class="nav-item">
      <a class="nav-link" href="package.php">Package</a>
    </li>
   
     <li class="nav-item">
      <a class="nav-link" href=""></a>
    </li>
  
    
    <li class="nav-item">
      <a class="nav-link" href="places.php">Tourist Attraction Places</a>
    </li>
  
    <li class="nav-item">
      <a class="nav-link" href=""></a>
    </li>
    
    
      <li class="nav-item">
      <a class="nav-link" href="about.php">About Us</a>
    </li>

     <li class="nav-item">
      <a class="nav-link" href=""></a>
    </li>
   
 <li class="nav-item" >
      <a class="nav-link" href="cancelbooking.php">Cancel Booking</a>
    </li>

     <li class="nav-item">
      <a class="nav-link" href=""></a>
    </li>

   <li class="nav-item" >
      <a class="nav-link" href=""><img src="img\add.png" /></a>
    </li>
 <li class="nav-item">
      <a class="nav-link" href=""></a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href=""></a>
    </li>
    <li class="nav-item" >
  <a class="nav-link" href="Home.php">Log Out</a>
    </li>
    
    </li>
  </ul>
</nav>
</div>



<div class="col-15">
              <div class="thumbnail" style="width:100%",>
                    <center><b>                 
                  
                    
        <form class="form-horizontal w3-left w3-border w3-light-gray" id="register-form" method="post" action="./package_BookingBack.php" style="background-color: #E0ECF8;">

          <div class="container">
            <center><div class="col-md-6 col-sm-6 alert-info"><br />
                            <h3> Package Booking Form</h3>
                           
                    </div></center>
              <p>Please fill in this form to Booking Package.</p>                             
                <div class="form-group">
                  <label class="control-label col-sm-4" for="fullName">Full name:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="fullname" placeholder="Enter Full name" id="fullname" required >
                      <span class="error_form" id="fname_error_message"> </span>
                    </div>
                </div>  
            
                <div class="form-group">
                  <label class="control-label col-sm-2" for="userMail">Email:</label>
                  <div class="col-sm-10"> 
                    <input type="email" class="form-control" name="email"   placeholder="Enter email" id ="email" required>
                  </div>
                </div>

<div class="form-group">
              <label class="control-label col-sm-4" for="pakageType">Package Type&nbsp&nbsp&nbsp </label> 
              <div class="col-sm-10">
                <select name="pakageType" style="width:500px">
                    <option value="Family" > Family</option>
                    <option value="Couple"> Couple</option>
                    <option value="Friends">Friends</option>
                    
                </select>
     </div></div>

                <div class="form-group">
                  <label class="control-label col-sm-2" for="address" required>Address:</label>
                  <div class="col-sm-10"> 
                    <input type="text" class="form-control" name="address"  placeholder="Enter Address" id="address" required>
                  </div>
                </div>
            
                <div class="form-group">
                  <label class="control-label col-sm-2" for="phoneNum">Phone Number </label>
                  <div class="col-sm-10"> 
                    <input  type="text" class="form-control" name="phoneNum" placeholder="Enter your Phone Number"  id="phoneNum" required>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="control-label col-sm-2" for="startDate">Start Date:</label>
                  <div class="col-sm-10"> 
                    <input type="text" class="form-control" name="startDate"  placeholder="Enter Start Date" id="startDate" required>
                  </div>
                </div>
                
               
               
                  <p>By Booking you agree to our Terms & Privacy.</p>
            
                <div class="form-group"> 
             <div class="col-sm-6">        
                    <button type="submit" class="btn btn-success btn-lg btn-block" name="register" id="submit-button"  >Send</button><br><br>
                    <button type="reset" class="btn btn-danger btn-lg btn-block" name="cancel" id="cancel-button" >Cancel</button> 
                  </div>
                </div>
            
            
               
          </div>          
        </form>
</b></center></div></div></div></div></b></h5></center></div>


<footer>
  <div class="container">
 
    <div class="footer" id="footer">
  
            <div class="row">
 
                <div class="col-lg-3  col-md-3 col-sm-5 col-xs-7">
 
                    <h3> Services </h3>
 
                    <ul>
 
                        <li> <a href="#"> Trasportation </a> </li>
 
                        <li> <a href="#"> Guide </a> </li>
 
                        <li> <a href="#"> Driver</a> </li>
 
                        
                    </ul>
 
                </div>
 
                <div class="col-lg-3  col-md-3 col-sm-5 col-xs-7">
 
                    <h3> About </h3>
 
                    <ul>
 
                        <li> <a href="#"> Our Company </a> </li>
 
                        <li> <a href="#"> About Us </a> </li>
 
                        <li> <a href="#"> Terms of Services </a> </li>
 
                        <li> <a href="#"> Our Team </a> </li>
 
                    </ul>
 
                </div>
 
                <div class="col-lg-3  col-md-3 col-sm-5 col-xs-7">
 
                    <h3> Contact </h3>
 
                    <ul>
 
                       <li> <a href="#"> <i class=" fa fa-facebook">   </i> </a> </li>
 
                        <li> <a href="#"> <i class="fa fa-twitter">   </i> </a> </li>
 
                        <li> <a href="#"> <i class="fa fa-google-plus">   </i> </a> </li>
 
                        <li> <a href="#"> <i class="fa fa-pinterest">   </i> </a> </li>
 
                        <li> <a href="#"> <i class="fa fa-youtube">   </i> </a> </li>
 
 
                    </ul>
 
                </div>
 
                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-7 ">
 
                    <h3> Rating  </h3>
 
 
      <div class="rating">
<ul><li><b><span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span></b></li></ul>
</div>     
          </div>
 
            </div>
 
        </div>
 
        
    </div>
 
       </div>
</footer>
</div>
</BODY></HTML>