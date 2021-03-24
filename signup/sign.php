<html>
<head>
    <title>Enter data</title>
</head>
 
<body>
<?php

include_once("config.php");

if(isset($_POST['Submit'])) {
    $NAME = mysqli_real_escape_string($mysqli, $_POST['NAME']);
    $AGENT_ID = mysqli_real_escape_string($mysqli, $_POST['AGENT_ID']);
    $DOB = mysqli_real_escape_string($mysqli, $_POST['DOB']);
    $PHONE = mysqli_real_escape_string($mysqli, $_POST['PHONE']);
    $STREET = mysqli_real_escape_string($mysqli, $_POST['STREET']);
    $CITY = mysqli_real_escape_string($mysqli, $_POST['CITY']);
    $PINCODE= mysqli_real_escape_string($mysqli, $_POST['PINCODE']);
    $EMAIL = mysqli_real_escape_string($mysqli, $_POST['EMAIL']);
    $USERNAME = mysqli_real_escape_string($mysqli, $_POST['USERNAME']);
    $PASSWORD = mysqli_real_escape_string($mysqli, $_POST['PASSWORD']);
    $CONFIRMPSW = mysqli_real_escape_string($mysqli, $_POST['CONFIRMPSW']);
  
        

    // if( empty('$username') || empty('$password') || empty('$h_id') || empty('$h_name') empty('$phone_number') || empty('$h_location')) {

    //  if(empty($username)) {
    //      echo "<font color='red'>Name field is empty.</font><br/>";
    //  }
                
    //  if(empty($password)) {
    //      echo "<font color='red'>Name field is empty.</font><br/>";
    //  }
    //  if(empty($h_name)) {
    //      echo "<font color='red'>Name field is empty.</font><br/>";
    //  }
                
    //  if(empty($h_id)) {
    //      echo "<font color='red'>Name field is empty.</font><br/>";
    //  }
        
    //  if(empty($phone_number)) {
    //      echo "<font color='red'>phone_number field is empty.</font><br/>";
    //  }
        
    //  if(empty($h_location)) {
    //      echo "<font color='red'>h_location field is empty.</font><br/>";
    //  }

      //echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    //} else
     //{ 
        
            

       $result = mysqli_query($mysqli, "INSERT INTO AGENT(NAME,AGENT_ID,DOB,PHONE,STREET,CITY,PINCODE,EMAIL,USERNAME,PASSWORD,CONFIRMPSW) VALUES('$NAME','$AGENT_ID','$DOB','$PHONE','$STREET','$CITY','$PINCODE','$EMAIL','$USERNAME','$PASSWORD','$CONFIRMPSW')");
        

        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='index.php'>View Result</a>";
    
}
?>
</body>
</html>
