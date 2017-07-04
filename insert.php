<html>

<body>
<?php

$con = mysql_connect("localhost","root","","webcup");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysql_select_db("dbtest", $con);

 

$sql="INSERT INTO carads (category, description, mobilePhone, sellerEmail, sellerName, title)

VALUES

('$_POST[category]','$_POST[description]','$_POST[mobile]','$_POST[email]','$_POST[name]','$_POST[title]')";


if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

echo "1 record added";

mysql_close($con)

?>

</body>

</html>