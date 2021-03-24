<html>
<head>
    <title>Enter data</title>
</head>
 
<body>
<?php

include("config.php");

if(isset($_POST['Submit'])) {
    $NAME = mysqli_real_escape_string($mysqli, $_POST['NAME']);
	$CUST_ID = mysqli_real_escape_string($mysqli, $_POST['CUST_ID']);
    $RELATIONSHIP = mysqli_real_escape_string($mysqli, $_POST['RELATIONSHIP']);
    $CONTACT_NO = mysqli_real_escape_string($mysqli, $_POST['CONTACT_NO']);
    $ADDRESS= mysqli_real_escape_string($mysqli, $_POST['ADDRESS']);
   
    
    
	
	$result = mysqli_query($mysqli, "INSERT INTO nominee(NAME,CUST_ID,RELATIONSHIP,CONTACT_NO,ADDRESS) VALUES('$NAME','$CUST_ID','$RELATIONSHIP','$CONTACT_NO','$ADDRESS')");
        

        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='index.php'>View Result</a>";
        //header("Location:agdash.html");
    
}
?>
</body>
</html>
