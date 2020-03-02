/*--ramanjotkaur--*/
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>


table, td, th {
  border: 1px solid black;
  border-collapse: collapse;
  align-content: center;
}
</style>
</head>
<body>
    
<nav class="navbar bg-light">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Homepage</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="store.php">Shocksstore</a>
    </li>
  </ul>
</nav>
<br>

    <table align="center">
        <tr>
            
            <th>id</th>
            <th>name</th>
            <th>price<th>description
            <th>quantity</th>
                 
        </tr>
        <?php
session_start();
require('mysqli_connect.php');

$sql = "SELECT id, name,description, quantity, price FROM `products`";
$result = $dbc -> query($sql);

if($result -> num_rows > 0 ){
    while($row =$result-> fetch_assoc()){
        echo "<tr><td>"."<a href = '?ID=".$row["id"]."'>"."purchase"."</a>"."</td><td>".$row["name"]."</td><td>".$row["price"]."</td><td>".$row["description"]."</td><td>".$row["quantity"]."</td></tr>";
    }
    echo "</table>";
}
else{
    echo "o result";
}

if(isset($_GET['ID'])){
    echo $_GET['ID'];
    $_SESSION['PID']=$_GET['ID'];
    header("Location: checkout.php");
}
?>
    </table>
</body>
</html>