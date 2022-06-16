<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../CSS/demo.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <!--Main Navigation-->
    <header>
        <!-- Navbar -->
        <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">

            <div class="container-fluid">

              <a class="navbar-brand" href="#">
                <img
                  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREgsVzxrYDRRkLYanaJHvvgddtRiyrB8Rp-A&usqp=CAU"
                  height="40px"
                  alt="Logo"
                />
              </a>
        
              <!-- Right links -->
              <ul class="navbar-nav ms-auto d-flex flex-row">

                <li class="nav-item me-3 me-lg-0">
                  <a class="navbar-brand" href="#">
                    <i class="fa fa-bell px-2"></i>
                  </a>
                </li>
      
                <li class="nav-item me-3 me-lg-0">
                  <a class="navbar-brand" href="#">
                    <i class="fa fa-user"></i> Person Name
                  </a>
                </li>
      
              </ul>
            </div>

        </nav>
        <!-- Navbar -->

        <!-- Sidebar -->
        <nav id="sidebarMenu" class="collapse d-lg-block sidebar bg-white mt-2">
          <div class="position-sticky">
            <div class="list-group">
              <a class="list-group-item list-group-item-action py-2">
                Students
              </a>
              <a href="demo.php" class="list-group-item list-group-item-action py-2">
                - View Students
              </a>
              <a href="#" class="list-group-item list-group-item-action py-2 active">
                  - Add Students
              </a>
            </div>
          </div>
        </nav>
        <!-- Sidebar -->

    </header>
  <!--Main Navigation-->
  
  <!--Main layout-->
  <main style="margin-top: 60px;">
    <div class="container p-4">
      <h3>Add Student</h3>
      <hr>
      <form method="post">
          <div class="form-group row">
              <label for="inputName" class="col-sm-2 col-form-label">Full Name</label>
              <div class="col-sm-10">
                  <input type="text" id="inputName" class="form-control w-25 border-secondary" name="name" required>
              </div>
          </div>
          <div class="form-group row">
              <label for="inputDate" class="col-sm-2 col-form-label">Date of Birth</label>
              <div class="col-sm-10">
                  <input type="date" id="inputDate" class="form-control w-25 border-secondary" name="age" required>
              </div>
          </div>
          
          <div class="form-group row">
              <label for="inputSchool" class="col-sm-2 col-form-label">School</label>
              <div class="col-sm-10">
                  <select class="form-control w-25 border-secondary" id="inputSchool" name="school" required>
                      <option value="">Select</option>
                      <option>LEAD School Karmala</option>
                      <option>Amirash School</option>
                      <option>Gyandam International School</option>
                      <option>Jay Ambe School</option>
                      <option>Swaminarayan School Salvav</option>
                  </select>
              </div>
          </div>

          <div class="form-group row">
              <label for="inputClass" class="col-sm-2 col-form-label">Class</label>
              <div class="col-sm-10">
                  <select class="form-control w-25 border-secondary" id="inputClass" name="class" required>
                      <option value="">Select</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>5</option>
                      <option>7</option>
                  </select>
              </div>
          </div>

          <div class="form-group row">
              <label for="inputDivison" class="col-sm-2 col-form-label">Divison</label>
              <div class="col-sm-10">
                  <select class="form-control w-25 border-secondary" id="inputDivison" name="divison" required>
                      <option value="">Select</option>
                      <option>A</option>
                      <option>B</option>
                      <option>C</option>
                  </select>
              </div>
          </div>

          <div class="form-group row">
              <label for="inputStatus" class="col-sm-2 col-form-label">Status</label>
              <div class="col-sm-10 pt-2">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="inputStatus" value="Active" required>
                    <label class="form-check-label" for="inlineRadio1">Active</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="inputStatus" value="Inactive" required>
                    <label class="form-check-label" for="inlineRadio2">Inactive</label>
                </div>
              </div>
          </div>

          <div class="form-group row">
              <label class="col-sm-2 col-form-label"></label>
              <div class="col-sm-10">
                <button type="submit" class="btn btn-secondary w-25" name="save">Save</button>
              </div>
          </div>
      </form>
    
    </div> 
  </main>
  <!--Main layout-->

    <?php

        include("db.php");
        
        if(isset($_POST['save'])) {

              $name = $_POST['name'];
              $date = $_POST['age'];
              $today = date("Y-m-d");
              $age = date_diff(date_create($date), date_create($today));
              $age = $age->format("%y");
              $school = $_POST['school'];
              $class = $_POST['class'];
              $divison = $_POST['divison'];
              $status = $_POST['status'];

              $query = "INSERT INTO `student_list`(`ID`, `Name`, `Age`, `School`, `Class`, `Divison`, `Status`) VALUES ('','$name','$age','$school','$class','$divison','$status')";
              $result = mysqli_query($mysql, $query);
              
        }
    ?>
</body>
</html>