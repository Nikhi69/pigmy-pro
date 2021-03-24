<html>
<head>
    <title>Enter data</title>
</head>
 
<body>
<?php

include("config.php");

if(isset($_POST['Submit'])) {
    $FNAME = mysqli_real_escape_string($mysqli, $_POST['FName']);
    $LNAME = mysqli_real_escape_string($mysqli, $_POST['LName']);
	 $CUST_ID = mysqli_real_escape_string($mysqli, $_POST['Cust_Id']);
    $DOB = mysqli_real_escape_string($mysqli, $_POST['Dob']);
    $PHONE = mysqli_real_escape_string($mysqli, $_POST['Phone']);
    $ADDRESS= mysqli_real_escape_string($mysqli, $_POST['Address']);
    $DOJ = mysqli_real_escape_string($mysqli, $_POST['Doj']);
    
    
	
	$result = mysqli_query($mysqli, "INSERT INTO customer(FNAME,LNAME,CUST_ID,DOB,PHONE,ADDRESS,DOJ) VALUES('$FNAME','$LNAME','$CUST_ID','$DOB','$PHONE','$ADDRESS','$DOJ')");
        

        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='index.php'>View Result</a>";
        //header("Location:agdash.html");
    
}
?>
</body>
</html>
