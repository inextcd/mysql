<html>
<body>
<?php

$link = mysql_connect("localhost","test","test");

if (!$link)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("test", $link);

$sql = "INSERT INTO cars (id, model, year)

VALUES
('$_POST[id]','$_POST[model]','$_POST[year]')";

if (!mysql_query($sql,$link))

  {
  die('Error: ' . mysql_error());
  }

echo "1 record added";
mysql_close($link)

?>
</body>
</html>