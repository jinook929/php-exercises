<?php

print_r($_GET);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Global GET</title>
</head>

<body>

  <form action="get.php" method="GET">
    <input type="text" name="id" id="">
    <input type="submit" value="Submit">
  </form>

  <?php $id = $_GET['id']; ?>
  <a href="get.php?id=<?php echo $id; ?>">Click Here</a>

</body>

</html>