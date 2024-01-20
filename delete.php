<?php
function fetch_data()
{
    $output = '';
    $conn = mysqli_connect("localhost", "root", "", "crs");
    $sql = "SELECT * FROM form ORDER BY id";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result))
    {
        $output .= '<tr>  
<td>'.$row["id"].'</td>  
<td>'.$row["name"].'</td>  
 
<td>'.$row["email"].'</td>  

<td>'.$row["gender"].'</td>
<td>'.$row["mobile"].'</td>  
<td>'.$row["course"].'</td> 
</tr>  
';
    }
    return $output;
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="style1.css" />
    <script src="script.js"></script>
</head>
<body >
 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
      <div class="container">
        <a href="" class="navbar-brand"><h2>Learn<span class="text-warning">HUB</span></h2></a>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navmenu"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navmenu">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a href="edit.php" class="nav-link">Edit</a>
            </li>
            <li class="nav-item">
              <a href="delete.php" class="nav-link">Delete</a>
            </li>
            <li class="nav-item">
              <a href="fetch.php" class="nav-link">Report</a>
            </li>&emsp;
            <li class="nav-item">
              <a href="#" class="nav-link">Admin</a>
            </li>&emsp;
            <li class="nav-item">
              <a href="logout.php" class="nav-link">Logout</a>
            </li>&emsp;
          </ul>
        </div>
      </div>
    </nav><br><br>
<center>
<h3 style="padding: 30px;">Delete Registration entry:</h3>

<form action ="dodelete.php" method="post" style="padding-bottom: 40px;" class="px-5">
 <div class="input-group col-6">
      <input type="int" name="id" class="form-control" placeholder="Enter id of the entry to be deleted" required>
      <span class="input-group-btn">
        <button class="btn btn-secondary" type="submit" value="submit">Delete!</button>
      </span>
    </div>
  </div>
  </form>
<h3 style="padding: 20px;">Records In Database:</h3>
  <div class="table-responsive table-hover table-bordered col-10" >

     <table class="table" >
  <thead > 
    <tr class="table-primary">
                <th width="1%">Id</th>
           		
                <th width="1%">Name</th>

                <th width="1%">Email</th>
                <th width="1%">Gender</th>
                <th width="1%">Mobile</th>
                <th width="1%">Course</th>
                
            </tr>


		<tbody>
            <?php
            echo fetch_data();
            ?>
        </tbody>
		</table>
        </thead>
        </table>
    </div>
    </div>
</center>
</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crs";
$conn = new mysqli($servername, $username, $password, $dbname);
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$sql = "SELECT * FROM form";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
       // output data of each row
      
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
