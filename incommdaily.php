<?php
$servername = "127.0.0.1";
$username = "nshiroma";
$password = "TwTtInMPJh91tqRg";
$dbname = "Incomm";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "good conneciton";
}
// Siras_Sales_Monthly
// table name T_Siras_Sales_Monthly
$sql = "DROP TABLE IF EXISTS T_Siras_Sales_Monthly;";

if (mysqli_query($conn, $sql)) {
    echo "good sql statment";
} else {
    echo $sql;
    die("sql error" . mysqli_error($conn));
}
$sql = "CREATE Table T_Siras_Sales_Monthly 
        select left(T_IncommData.SaleTransactionDate,6) AS 
        SaleTransactionMonth, T_IncommData.ModelNumber, count(T_IncommData.ModelNumber) AS cntModel 
        from T_IncommData where ((T_IncommData.SaleRetailerName = 'Walmart USA') and (T_IncommData.SaleTransactionDate > '20220101')) 
        group by T_IncommData.ModelNumber,left(T_IncommData.SaleTransactionDate,6)";

if (mysqli_query($conn, $sql)) {
    echo "good sql statment";
} else {
    echo $sql;
    die("sql error" . mysqli_error($conn));
}

// Close connection
mysqli_close($conn);

?>
