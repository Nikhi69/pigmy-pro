<html>
<head>
    <title>Enter data</title>
</head>
 
<body>
<?php

include("config.php");

if(isset($_POST['Submit'])) {
    $OFF_ID = mysqli_real_escape_string($mysqli, $_POST['OFF_ID']);
    $OFF_NAME = mysqli_real_escape_string($mysqli, $_POST['OFF_NAME']);
	 $CONTACT = mysqli_real_escape_string($mysqli, $_POST['CONTACT']);
    $STREET = mysqli_real_escape_string($mysqli, $_POST['STREET']);
    $CITY = mysqli_real_escape_string($mysqli, $_POST['CITY']);
    $PINCODE= mysqli_real_escape_string($mysqli, $_POST['PINCODE']);
    
	
	$result = mysqli_query($mysqli, "INSERT INTO office(OFF_ID,OFF_NAME,CONTACT,STREET,AREA,CITY,PINCODE) VALUES('$OFF_ID','$OFF_NAME','$CONTACT','$STREET','$AREA','$CITY','$PINCODE')");
        

        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='index.php'>View Result</a>";
        //header("Location:agdash.html");
    
}
?>
</body>
</html>
