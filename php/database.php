
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>compass</title>
</head>
<body>


</body>
</html>


<?php
include("connection.php");

if(isset($_POST['send']))

$email=$_POST['email'];
$feedback=$_POST['feedback'];

$sql="INSERT INTO card(feedback,email)values('$feedback','$email')";
if(mysqli_query($co,$sql)){
  
}else
{
  echo "no insert";
}






?>