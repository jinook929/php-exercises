<?php 

if(isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  echo "Hello, there! You submitted " . $username . " as your username and " . $password . " as your password." . "<br>";

  if(strlen($username) <= 5) {
    echo "Hmm... Username must be longer than 5 characters." . "<br>";
  }

  if(strlen($password) <= 5) {
    echo "Hmm... Password must be longer than 5 characters." . "<br>";
  }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Form</title>
</head>
<body>
  
<form action="form.php" method="POST">
  <input type="text" name="username" placeholder="Username">
  <br>
  <input type="password" name="password" placeholder="Password">
  <br>
  <input type="submit" name="submit">
</form>

</body>
</html>