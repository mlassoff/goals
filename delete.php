<?php
require_once 'connect.php';

$id = $_REQUEST['id'];

$sql = "DELETE FROM goals WHERE goal_id = '" . $id . "'";
if(mysqli_query($link, $sql)){
  print ("Stored");
} else {
  print("Failed");
}

echo "<script>location.href='index.php'</script>";


?>
