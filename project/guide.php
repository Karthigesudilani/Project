<?php 

session_start();
$connect = mysqli_connect("localhost", "root", "", "ttgms");

if(isset($_POST["add_to_cart"]))
{
  if(isset($_SESSION["guide"]))
  {
    $item_array_id = array_column($_SESSION["guide"], "guideId");
    if(!in_array($_GET["id"], $item_array_id))
    {
      $count = count($_SESSION["guide"]);
      $item_array = array(
        'guideId'     =>  $_GET["id"],
        'gName '     =>  $_POST["hidden_name"],
        'language'=> $_POST["hidden_language"],
        'fees'    =>  $_POST["hidden_price"],
        
      );
      $_SESSION["guide"][$count] = $item_array;
    }
    else
    {
      echo '<script>alert("Item Already Added")</script>';
    }
  }
  else
  {
    $item_array = array(
      'guideId'     =>  $_GET["id"],
        'gName '     =>  $_POST["hidden_name"],
        'language'=> $_POST["hidden_language"],
        'fees'    =>  $_POST["hidden_price"],
        
    );
    $_SESSION["guide"][0] = $item_array;
  }
}

if(isset($_GET["action"]))
{
  if($_GET["action"] == "delete")
  {
    foreach($_SESSION["guide"] as $keys => $values)
    {
      if($values["guideId"] == $_GET["id"])
      {
        unset($_SESSION["guide"][$keys]);
        echo '<script>alert("Item Removed")</script>';
        echo '<script>window.location="guide.php"</script>';
      }
    }
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
<div style="background-color: Gray; color: black; font-style:italic;">
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
      <a class="nav-link active" href="guide.php">Guide</a>
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
      <a class="nav-link" href="shopping.php"><img src="img\add.png" /></a>
    </li>
 <li class="nav-item">
      <a class="nav-link" href=""></a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href=""></a>
    </li>
    <li class="nav-item" >
  <a class="nav-link" href="login.php"><img src="img\log.png" /></a>
    </li>
    
    </li>
  </ul>
</nav>
</div>
<center>
<div style="background-color: #E0E6F8; width: 80% ">
  <h1> <u>Guide</u> </h1>
                               
          <div id="result">
            


          </div>
<?php
        $query = "SELECT * FROM guide";
        $result = mysqli_query($connect, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
        ?>
        <div class="col-md-4">
        <form method="post" action="guide.php?action=add&id=<?php echo $row["guideId"]; ?>">
          <div  style="border:3px solid #5cb85c; background-color:whitesmoke; border-radius:5px; padding:16px;" align="center">
            <img src="in\upload\<?php echo $row["Image"]; ?>" class="img-responsive" /><br />

            <h4 class="text-info"><?php echo $row["gName"]; ?><br>Rs<?php echo $row["fees"]; ?>  Per Hour
              <br>Language :- <?php echo $row["language"]; ?> </h4>          

            <input type="hidden" name="hidden_name" value="<?php echo $row["gName"]; ?>" />

            <input type="hidden" name="hidden_price" value="<?php echo $row["fees"]; ?>" />
<input type="hidden" name="hidden_language" value="<?php echo $row["language"]; ?>" />

            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

          </div>
        </form>
      </div>
      <?php
          }
        }
      ?>
                <!--end search bar-->                                 
           
      
            </div>  
        </div>
      </div>                </div></b></h5></center></div>


<div class="text-right">

    <a href="Transportation.php"><button type="button" class="btn btn-success">Trasport</button> </a>
        <a href="driver.php"><button type="button" class="btn btn-success">Driver</button>  </a>       
            <a  href="CheckOutForm.php"><button type="button" class="btn btn-success">Check Out</button></a>
<br ?                    </div></center>
    </div>
</div></div></b></h5></center></div>



<footer>

    <div class="footer" id="footer">
 
        <div class="container">
 
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