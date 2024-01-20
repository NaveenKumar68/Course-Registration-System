
<?php
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "crs";
$db_connect = mysqli_connect($db_host, $db_username, $db_password, $db_name);
if (mysqli_connect_error()) {
    echo "Connection failed to mysql: " . mysqli_connect_error();
} 
$id=$_REQUEST["id"];
$query=mysqli_query($db_connect, "delete from form  where id = '$id' ");
mysqli_close($db_connect);
if($query) {

    echo "<script type='text/javascript'>alert('Succesfully Deleted! ');

  window.location = 'delete.php';


</script>";
}
?>