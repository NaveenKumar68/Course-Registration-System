<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LearnHUB | Report</title>
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
</head>
<body>
 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
      <div class="container">
        <a href="#" class="navbar-brand"><h2>Learn<span class="text-warning">HUB</span></h2></a>

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
    </nav><br><br><br><br><br>
<div class="container">
        <center>
        
        <h3 style="padding: 15px;">Registration Report</h3>
        
            <div class="table-responsive table-hover table-bordered col-12 " >
        
             <table class="table " >
          <thead > 
            <tr class="table-primary">
                       <th width="2%">Id</th>
                        <th width="5%">Name</th>
                        <th width="6%">Email Address</th>
                        <th width="3%">Gender</th>
                        <th width="5%">Mobile No</th>
                        <th width="5%">Course</th>
                        
                    </tr>
        
        
                <tbody>
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "crs");

                    // Check the connection
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    
                    // SQL query to fetch data
                    $sql = "SELECT * FROM form";
                    $result = mysqli_query($conn, $sql);
                    
                    if (mysqli_num_rows($result) > 0) {
                        
                    
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                                <td>" . $row["id"] . "</td>
                                <td>" . $row["name"] . "</td>
                                <td>" . $row["email"] . "</td>
                                <td>" . $row["gender"] . "</td>
                                <td>" . $row["mobile"] . "</td>
                                <td>" . $row["course"] . "</td>
                            </tr>";
                        }
    
                        echo "</table>";
                    } else {
                        echo "No records found.";
                    }
                    
                    // Close the database connection
                    mysqli_close($conn);
                    ?>
                        
                    
                    
                    
                </tbody>
                </table>
                <div class="col-md-12 " align="right">
                
                </div>
                </thead>
                </table>
            </div>
            </div>
        </center>
        </div>


</body>
</html>

