/*--ramanjotkaur--*/
<!DOCTYPE html>
<html lang="en">
<head>
  <title>php project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
  form{
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
    <?php
    require_once('mysqli_connect.php');
    session_start();
    
    echo $_SESSION['PID'];
    require_once('submit.php');
    ?>

    <form action ="" method = "post">
        <p>firstname :<input type ="text" name ="fname" value ="<?php if(isset($fname)) echo $fname;?>"></p>
        <p>lastname :<input type ="text" name ="lname" value ="<?php if(isset($lname)) echo $lname;?>"></p>
        <p>
          <select id="payment" name="payment">
            <option value="cash" selected="true">Cash On Delivery</option>
            <option value="Debit">Debit Card</option>
            <option value="Credit">Credit Card</option>
            <option value="Master">Master Card</option>
      </select>
          </p>
          <p><input type="submit" name="submit" class = "button"></p>
        
    </form>
</body>
</html>