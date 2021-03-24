<html>
<head>
    <title>Enter data</title>
</head>
 
<body>
<?php

include("config.php");

if(isset($_POST['Submit'])) {
    $LOAN_NUM = mysqli_real_escape_string($mysqli, $_POST['LOAN_NUM']);
	$LOAN_TYPE = mysqli_real_escape_string($mysqli, $_POST['LOAN_TYPE']);
    $LOAN_AMOUNT = mysqli_real_escape_string($mysqli, $_POST['LOAN_AMOUNT']);
    $INTEREST= mysqli_real_escape_string($mysqli, $_POST['INTEREST']);
    $SANCT_DATE = mysqli_real_escape_string($mysqli, $_POST['SANCT_DATE']);
    $PERIOD= mysqli_real_escape_string($mysqli, $_POST['PERIOD']);
   
    
    
	
	$result = mysqli_query($mysqli, "INSERT INTO loan(LOAN_NUM,LOAN_TYPE,LOAN_AMOUNT,INTEREST,SANCT_DATE,PERIOD) VALUES('$LOAN_NUM','$LOAN_TYPE','$LOAN_AMOUNT','$INTEREST','$SANCT_DATE','$PERIOD')");
        

        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='index.php'>View Result</a>";
        //header("Location:agdash.html");
    
}
?>
</body>
</html>
