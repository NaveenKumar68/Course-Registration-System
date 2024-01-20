<?php
function fetch_data()
{
    $output = '';
    $conn = mysqli_connect("localhost", "root", "", "crs");
    $sql = "SELECT * FROM   form ORDER BY id";
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
    </nav><br><br>

<center>
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
<h3 style="padding: 20px;">Edit Registration:</h3>

<div class="jumbotron col-6" style=" font-weight: bold;" class="p-4 my-4 mx-4">
<form  action='doedit.php' method='post' class="p-4 my-4 mx-4">
<div class="form-group row">
    <label for="name" class="col-4">ID:</label>
    <input type="int" class="form-control col-7" id="id" name="id" placeholder="Enter id to be edit" required>
 
  </div><br>
  <div class="form-group row">
    <label for="name" class="col-4">Name:</label>
    <input type="text" class="form-control col-7" id="name" name="name" placeholder="Enter name" required>
 
  </div><br>
  <div class="form-group row">
    <label for="exampleInputEmail1" class="col-4">Email address:</label>
    <input type="email" class="form-control col-7" id="email" name="email" placeholder="Enter email" required>
 
  </div><br>
  
  <div class="form-group row">
    <label for="title" class="col-4">Gender:</label>
     <label class="col-4">male&emsp;<input class="form-check-input col-4" type="radio" name="gender" value="male" required></label>
     <label class="col-4">female&emsp;<input class="form-check-input col-4" type="radio" name="gender" value="female" required></label>
  </div><br>

    <div class="form-group row">
    <label for="title" class="col-4">Mobile No:</label>
    <input type="text" class="form-control col-7" id="mobile" name='mobile' placeholder="Enter Mobile No" required>
   
  </div><br>
  <div class="form-group row">
    <label for="title" class="col-4">Course:</label>
    <select class="form-control col-8" id="course" name="course" required>
            <option value="">--Select a Course--</option>
            <option value="HTML">HTML</option>
            <option value="CSS">CSS</option>
            <option value="JavaScript">JavaScript</option>
            <option value="Bootstrap">Bootstrap</option>
            <option value="JQuery">JQuery</option>
            <option value="Nodejs">Nodejs</option>
            <option value="MySQL">MySQL</option>
            <option value="MongoDB">MongoDB</option>
            <option value="C">C</option>
            <option value="C++">C++</option>
            <option value="Java">Java</option>
            <option value="Python">Python</option>
            <option value="Data Science">Data Science</option>
            <option value="Data Analytics">Data Analytics</option>
            <option value="Artificial Intelligence">Artificial Intelligence</option>
            <option value="AWS Cloud">AWS Cloud</option>
            <!-- Add more options as needed -->
        </select>
  </div><br>
  
 


  <button class="btn btn-primary" type="submit"  value='submit' >Submit</button>
  <button class="btn btn-warning" type="reset"  value='Reset' >Reset</button>
</form>
</div>
</div>

</center>

</body>
</html>


