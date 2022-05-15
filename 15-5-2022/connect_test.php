<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  $serverName='localhost';
  $userName='root';
  $password= '';
  $databaseName='employees';
  $test= mysqli_connect($serverName,$userName,$password,$databaseName);
  if($test)
  {echo "Connection done";}
  else{
  die("Connection fail".mysqli_connect_error());
}
  ?>  
</body>
</html>