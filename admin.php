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

    <!-- form -->

    <center>
    <div class="container w-50 p-4 bg-dark text-light " id="box">
    <h3 style="padding: 10px;">Registration Form</h3>
    
    <div class="jumbotron col-6" style=" font-weight: bold;">
    <form  action='db_connect.php' method='post'>
      <div class="form-group row">
        Name:
        <input type="text" class="form-control col-8" id="name" name="name" placeholder="Enter name" required>
     
      </div><br>
      <div class="form-group row">
        Email address:
        <input type="email" class="form-control col-8" id="email" name="email" placeholder="Enter email" required>
     
      </div><br>
      
    
      <div class="form-group row">
         Gender:
         <label class="col-4">male <input class="form-check-input col-4" type="radio" name="gender" value="male" required></label>
         <label class="col-4">female <input class="form-check-input col-4" type="radio" name="gender" value="female" required></label>
      </div><br>
      <div class="form-group row">
        Mobile No:
        <input type="text" class="form-control col-8" id="mobile" name="mobile" placeholder="Enter Mobile Number" required>
     
      </div><br>
      <div class="form-group row">
        Course:
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
    
      
   
    
    
      <button class="btn btn-primary" type="submit"  value='submit' name="submit">Submit</button>&emsp;&emsp;
      <button class="btn btn-warning" type="reset"  value='reset' >Reset</button>
    </form>
    </div>
    </div>
    
    </center>
</body>
</html>