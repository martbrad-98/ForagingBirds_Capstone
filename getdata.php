<?php
header('Content-Type: application/json');

$dbhost = 'classmysql.engr.oregonstate.edu';
$dbname = 'capstone_2021_martbrad';
$dbuser = 'capstone_2021_martbrad';
$dbpass = 'v8XwvkCttWQm2xlC';

$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$sql = "SELECT * FROM Bird_Table";

$result = $mysqli->query($sql);

$data = array();
foreach ($result as $row){
  $data[] = $row;
}

print json_encode($data);
?>