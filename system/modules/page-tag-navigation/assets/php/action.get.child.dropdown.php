
<?php
// Starts the session and connects to the database
include_once("prepend.page_tag_navigation.endpoint.php");

$vars = $_POST;

$message = '';


$dbh = new mysqli("localhost", "oces_user", "cnLtU3L0fD8PNurD)R", "oces_contao_4_9");
if ($dbh->connect_error) {
  die("Connection failed: " . $dbh->connect_error);
}

$sorting_number = 0;
$query =  "select * from tl_child_category WHERE published=1";
$result = $dbh->query($query);
if($result) {
  while($row = $result->fetch_assoc()) {
    $message = $message . $row['label'];
  }
}


//$message = "Ding" . $vars['parent_val'];
echo $message;
