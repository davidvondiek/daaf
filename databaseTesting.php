<?php

$connection = mysqli_connect('localhost', 'root', 'usbw', 'loginsysteem'); //The Blank string is the password

$query = "SELECT * FROM users"; //You don't need a ; like you do in SQL
$result = mysqli_query($connection, $query);

echo "<table>"; // start a table tag in the HTML

while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['user_id'] . "</td><td>" . $row['user_name'] . "</td><td>" . $row['user_password'] . "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; 

mysql_close(); 
?>