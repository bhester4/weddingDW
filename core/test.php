<?php   

require "connect.php";


$sql = "SELECT * FROM guests";

$query = mysql_query($sql) or die (mysql_error()); 
// Output the data here using a while loop, the loop will return all members 
while ($row = mysql_fetch_array($query)) { 
    // Gather all $row values into local variables for easier usage in output
    $uid = $row["firstName"]; 
    $username = $row["lastName"]; 
    $email = $row["addressLn1"]; 
    $password = $row["city"]; 
    $website = $row["state"]; 
    // echo the output to browser 
    echo "First Name= $uid 
    <br />Last Name = $username 
    <br />Address = $email 
    <br />City= $password 
    <br />state = $website 
    <hr />"; 
} 
// Free the result set if it is large 
mysql_free_result($query);  





mysql_close();

?>