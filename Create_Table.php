<?php
$servername = "localhost";
$username = "username";
$password = "password";
$database = "Cyber_Accounts";




$sql = "CREATE TABLE Accounts (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
business VARCHAR(50),
username VARCHAR(30) NOT NULL,
pword VARCHAR(40);
)";

$salted  = "5345432fjdfk".$pword."dfdfdfd";

$hashed = hash('sha1', $salted);

## salt with username instead of password or both
## or randomly generated string

$sql = "INSERT INTO Accounts(username,pword)
        VALUES ('$username', '$hashed')";

?>
