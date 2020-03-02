<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require_once('mysqli_connect.php');

    $fname = $lname = $payment = '';
    $fname =strip_tags($_POST['fname']);
    $lname =strip_tags($_POST['lname']);
    $payment = $_POST['payment'];
    if(empty($fname)){
        echo "enter First name";
    }
    else{
        $fnam =$fname;
    }
    if(empty($lname)){
        echo "enter last name ";

    }
    else{   
        $lnam =$lname;
    }

    if(isset($fname) && isset($lname) ){ // if everythings are checked will dispaly success message
        $randomNumber = rand(1,99); 
        $_SESSION['userid']=$randomNumber;
        $iid=$_SESSION['PID'];
        
        echo "to the query";
   
       $sql = "INSERT INTO `customers` (`CID`, `firstname`, `lastname`, `payment`,`id`) VALUES ('$randomNumber', '$fname', '$lname', '$payment','$iid');";

        if ($dbc->query($sql) === TRUE) {
           header('location:neworder.php');
        } else {
            echo "Error: " . $sql . "<br>" . $dbc->error;
        }
    }
    else{
        echo "out of query";
    }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>