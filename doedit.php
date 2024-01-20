<?php

$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "crs";
$db_connect = mysqli_connect($db_host, $db_username, $db_password, $db_name);
if (mysqli_connect_error()) {
    echo "Connection failed to mysql: " . mysqli_connect_error();
} 

$id=$_REQUEST['id'];
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];

$gender=$_REQUEST['gender'];
$mobile=$_REQUEST['mobile'];
$course=$_REQUEST['course'];


$query=mysqli_query($db_connect, " UPDATE form SET name='$name',email='$email',gender='$gender',mobile='$mobile',course='$course' WHERE id='$id' ");
if(!$query) 
        { echo "<script type='text/javascript'>alert('Error in Submission! Try Again ');

  window.location = 'edit.php';

</script>";}
    else
    {
        echo "<script type='text/javascript'>alert('Succesfully Submitted! ');

  window.location = 'edit.php';

</script>";

    }

    mysqli_close($db_connect);

?>