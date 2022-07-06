<?php

$dbhost = 'classmysql.engr.oregonstate.edu';
$dbname = 'capstone_2021_martbrad';
$dbuser = 'capstone_2021_martbrad';
$dbpass = 'v8XwvkCttWQm2xlC';

$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Red Crossbill Database</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=2">
<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  font-size: x-large;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 25px;
  text-align: center;
  background: #D73F09;
  color: white;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
}

/* Sticky navbar - toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it "sticks" in place (like position:fixed). The sticky value is not supported in IE or Edge 15 and earlier versions. However, for these versions the navbar will inherit default position */
.navbar {
  overflow: hidden;
  background-color: #000;
  position: sticky;
  position: -webkit-sticky;
  top: 0;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}


/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Active/current link */
.navbar a.active {
  background-color: #666;
  color: white;
}

/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: white;
  padding: 20px;
}

/* Main column */
.main {   
  width: 800px;
  margin: 0 auto;
  background-color: white;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 90%;
  padding: 20px;
}

.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 20%;
    height: auto; 
}

.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 300px 880px;
  cursor: pointer;
}

.button1 {background-color: #4CAF50;} /* Green */
.button2 {background-color: #008CBA;} /* Blue */

/* Footer */
#footer {
    position: fixed;
            padding: 10px 10px 0px 10px;
            bottom: 0;
            width: 100%;
            /* Height of the footer*/ 
            height: 40px;
            background: grey;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="header">
  <h1>Red Crossbill Database</h1>

</div>

<div class="navbar">
<a href="#" class="active"> Control</a>
<a href="https://web.engr.oregonstate.edu/~martbrad/ECE_Senior_Design/Graphics_Display.php" target =_self">Data View</a>
</div>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $api_key = test_input($_POST["api_key"]);
    if($api_key == $api_key_value) {
        $sensor = test_input($_POST["sensor"]);
    }
    else {
        echo "Wrong API Key provided.";
    }
    echo $sensor;
}
else {
    echo "No data posted with HTTP POST.";
}
?>

<button id="btn" class="button button1">Start Test</button>

<script src="control.js"></script>


</body>
</html>