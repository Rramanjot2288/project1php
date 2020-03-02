/*--ramanjotkaur--*/
<?php
session_start();
require('mysqli_connect.php');


$product = $_SESSION['PID'];



if($dbc->query($sql) === TRUE){
echo "connection successful";
}
else{
    echo "error" .$sql .$dbc->error;
}


$sqlupdate ="UPDATE products SET quantity = quantity - 1 WHERE id = $product;";

if ($dbc->query($sqlupdate) === TRUE) {
    header('location:success.php');
 } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }
?>
