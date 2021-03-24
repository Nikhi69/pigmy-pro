<html>
<head>
    <title>Enter data</title>
</head>
 
<body>
<?php

include("config.php");

if(isset($_POST['Submit'])) {
    $ACCT_NUM = mysqli_real_escape_string($mysqli, $_POST['ACCT_NUM']);
    $ACCT_TYPE = mysqli_real_escape_string($mysqli, $_POST['ACCT_TYPE']);
     $CREDIT = mysqli_real_escape_string($mysqli, $_POST['CREDIT']);
    $DEBIT = mysqli_real_escape_string($mysqli, $_POST['DEBIT']);
    
    
    $result = mysqli_query($mysqli, "INSERT INTO account(ACCT_NUM,ACCT_TYPE,CREDIT,DEBIT) VALUES('$ACCT_NUM','$ACCT_TYPE','$CREDIT','$DEBIT')");
        

        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='index.php'>View Result</a>";
        //header("Location:agdash.html");
    
}
?>
</body>
</html>
