
<?php
// Starts the session and connects to the database
include_once("prepend.page_tag_navigation.endpoint.php");

$vars = $_POST;


$dbh = new mysqli("localhost", "ampersan_dbadmin", "Y06ZCg9BiAh2Uv#@", "ampersan_cms49");
if ($dbh->connect_error) {
  die("Connection failed: " . $dbh->connect_error);
}

$sorting_number = 0;
$query =  "select * from tl_quote_request ORDER BY sorting desc LIMIT 1";
$result = $dbh->query($query);
if($result) {
  while($row = $result->fetch_assoc()) {
    $sorting_number = $row['sorting'];
  }
}


$message = "Ding" . $vars['parent_val'];
echo $message;
