<?php
/* echo $_POST['email']if (isset($_POST['submit'])) {$email = $_POST['email'];if (empty($email))echo "YOU HAVE TO GIVE YOUR EMAIL";else {echo $email, "<br>";echo $_POST['pwd'];}} */
if (isset($_GET['submit']));
$email = $_GET['email'];
echo $email;
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="container">
    <h2>Vertical (basic) form</h2>
    <form method="GET" action="?">
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      </div>
      <div class="checkbox">
        <label><input type="checkbox" name="remember"> Remember me</label>
      </div>
      <button type="submit" class="btn btn-default" name="submit">Submit</button>
    </form>
  </div>

</body>

</html>