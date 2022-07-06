<?php
$dbhost = 'classmysql.engr.oregonstate.edu';
$dbname = 'capstone_2021_martbrad';
$dbuser = 'capstone_2021_martbrad';
$dbpass = 'v8XwvkCttWQm2xlC';

$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

  $number_value = $_REQUEST['number_value'];

  $sql = "INSERT INTO Bird_Table (ID, Bird_Force)
  VALUES (NULL, '$number_value')";


if($mysqli->query($sql)){
  echo "success";
  header("Location: Database_webpage.php");
}
else{
  echo "error";
}

?>