<?php
<link rel="stylesheet" type="text/css" href="style.css">
$username = 'ddd9';
$password = 'Southpark2!';
$hostname = 'sql1.njit.edu';
$dsn = "mysql:host=$hostname;dbname=$username";
try {
    $db = new PDO($dsn, $username, $password);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>