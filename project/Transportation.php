<?php 

session_start();
$connect = mysqli_connect("localhost", "root", "", "ttgms");

if(isset($_POST["add_to_cart"]))
{
  if(isset($_SESSION["vehicle"]))
  {
    $item_array_id = array_column($_SESSION["vehicle"], "vId");
    if(!in_array($_GET["id"], $item_array_id))
    {
      $count = count($_SESSION["vehicle"]);
      $item_array = array(
        'vId'     =>  $_GET["id"],
        'vName '     =>  $_POST["hidden_name"],
        'howManyPeople'=> $_POST["hidden_people"],
        'fees'    =>  $_POST["hidden_fees"],
        
      );
      $_SESSION["vehicle"][$count] = $item_array;
    }
    else
    {
      echo '<script>alert("Item Already Added")</script>';
    }
  }
  else
  {
    $item_array = array(
      'vId'     =>  $_GET["id"],
        'vName '     =>  $_POST["hidden_name"],
        'howManyPeople'=> $_POST["hidden_people"],
        'fees'    =>  $_POST["hidden_fees"],
        
    );
    $_SESSION["vehicle"][0] = $item_array;
  }
}

if(isset($_GET["action"]))
{
  if($_GET["action"] == "delete")
  {
    foreach($_SESSION["vehicle"] as $keys => $values)
    {
      if($values["vId"] == $_GET["id"])
      {
        unset($_SESSION["vehicle"][$keys]);
        echo '<script>alert("Item Removed")</script>';
        echo '<script>window.location="Transportation.php"</script>';
      }
    }
  }
}

?><HTML lang="en">
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
      <a class="nav-link active" href="Transportation.php">Transport</a>
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
<div style="background-color: #E0E6F8; width: 50% ">
     <center><div class="col-md-4 col-sm-4 alert-info">
                           <br/> <h1><u>Transport</u></h1>
                           
                    </div>
                    
          <div class="col-sm-12">
   


                      
          <div id="result">
            


          </div>
<?php
        $query = "SELECT * FROM vehicle";
        $result = mysqli_query($connect, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
        ?>
        <div class="col-md-8">
        <form method="post" action="Transportation.php?action=add&id=<?php echo $row["vId"]; ?>">
          <div  style="border:3px solid #5cb85c; background-color:whitesmoke; border-radius:5px; padding:16px;" align="center">
            <img src="in\upload\<?php echo $row["Image"]; ?>" class="img-responsive" /><br />

            <h4 class="text-info"><?php echo $row["vName"]; ?><br>Rs<?php echo $row["fees"]; ?>  Per KM
              <br>How May People can teverl:- <?php echo $row["howManyPeople"]; ?> </h4>          

            <input type="hidden" name="hidden_name" value="<?php echo $row["vName"]; ?>" />

            <input type="hidden" name="hidden_fees" value="<?php echo $row["fees"]; ?>" />
<input type="hidden" name="hidden_people" value="<?php echo $row["howManyPeople"]; ?>" />

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

</div>
<div class="text-right">
  
    <a href="driver.php"><button type="button" class="btn btn-success">Driver</button> </a>
         <a href="guide.php"> <button type="button" class="btn btn-success">Guide</button>  </a>         
           <a href = "login.php"> <button type="button" class="btn btn-success">Check Out</button></a>
                    </div></center>
 <br />   </div>
</div>

</b></h5></center></div>
<div class="container">
<table><tr><td width="50%">

    
      <div>
      <h2 align ="center">Rate About Transportation Service</h2>
            <?php
    
$dbServername ="localhost";
$dbUsername ="root";
$dbPassword ="";
$dbName ="ttgms";

$conn = mysqli_connect($dbServername, $dbUsername,$dbPassword,$dbName);

$find_data = "select * from rate";
$result = $conn -> query($find_data);
while ($row = mysqli_fetch_assoc($result)) {
  
  $id = $row['id'];
  $name = $row['name'];
  $food = $row['food'];
  $current_rating = $row['rating'];
  $hits = $row['hits'];

  echo "
          <form action='rates.php' method='POST'>
          $name:<select name='rating' class='form-control selcls'>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          
          </select>
           <div class='form-group'>
          <input type='hidden' value='$food' name='food'>
          </div>
          <div>
          <input type ='submit' value='Rate!' class='btn btn-info'> </div>Current Rating:";
  echo round($current_rating, 3);
  echo "


          </form>

          ";
}
?>
        </div></td><td>
      <div class="container">
            <h2 align="center">Comment About Transportation Service</h2>
          <br />

           <form method="POST" id="comment_form">
            <div class="form-group">
              <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" />
            </div>
            <div class="form-group">
              <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
            </div>
            <div class="form-group">
              <input type="hidden" name="comment_id" id="comment_id" value="0" />
              <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
            </div>
          </form>
          <span id="comment_message"></span>
            <br />
          <div id="display_comment"></div>
        </div>
    </div></div></div></td></tr></table>
</div></div>


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
</BODY>
</HTML>