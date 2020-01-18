
        
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
          $nGuideFname = $_POST['nGuideFname']; 
          $nGuideLname = $_POST['nGuideLname']; 
          $nGnic = $_POST['nGnic']; 
          $nGdob = $_POST['nGdob']; 
          $nGcontactNo = $_POST['nGcontactNo']; 
          $nGmail = $_POST['nGmail']; 
          $nGaddress = $_POST['nGaddress'];
          $nGcv = $_POST['nGcv'];

              echo "<script>

  function checkForm(form)
  {

      re = /[0-9]/;
      if(re.test(form.nGuideFname.value)) {
        alert('Error: Invalid Firstname !');
        form.nDriverFname.focus();
        return false;
      }
 
        re = /^\w+$/;
      if(!re.test(form.nGuideFname.value)) {
        alert('Error: Invalid Firstname !');
        form.nDriverFname.focus();
        return false;
      }


      re = /[0-9]/;
      if(re.test(form.nGuideLname.value)) {
        alert('Error: Invalid lastname !');
        form.nDriverLname.focus();
        return false;
      }
 
       re = /^\w+$/;
      if(!re.test(form.nGuideLname.value)) {
        alert('Error: Invalid lastname !');
        form.nDriverLname.focus();
        return false;
      }

      re = /[a-z]/;
      if(re.test(form.nGcontactNo.value)) {
        alert('Error: Invalid Phone Number!');
        form.nDcontactNo.focus();
        return false;
      }
      re = /[A-Z]/;
      if(re.test(form.nGcontactNo.value)) {
        alert('Error: Invalid Phone Number!');
        form.nDcontactNo.focus();
        return false;
      }
    re = /^\w+$/;
      if(!re.test(form.nGcontactNo.value)) {
        alert('Error: Invalid Phone Number!');
        form.nDcontactNo.focus();
        return false;
      }
         if(form.nGcontactNo.value != "") {
      if(form.nGcontactNo.value.length =< 9) {
        alert('Error: Phone number must contain at Ten characters!');
        form.nGcontactNo.focus();
        return false;
      }
       if(form.nGcontactNo.value.length > 11) {
        alert('Error: Phone number must contain at Ten characters!');
        form.nGcontactNo.focus();
        return false;
      }
  }
}
</script>";

      
          
          
          $register_query = "INSERT INTO `newguide`(`newGuideId`,`nGuideFname`, `nGuideLname`, `nGnic`, `nGdob`, `nGcontactNo`, `nGmail`,`nGaddress`,`nGcv`) VALUES ('','$nGuideFname', '$nGuideLname', '$nGnic', '$nGdob', '$nGcontactNo', '$nGmail','nGaddress','nGcv')";

          try{
            $register_result = mysqli_query($conn, $register_query);
            if(mysqli_affected_rows($conn)>0){
   echo"<script>alert('registration Successfully');</script>";
   header("location:../Home.php");
               
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