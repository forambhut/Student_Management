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

    <!--Main Navigation -->
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
              <a href="#" class="list-group-item list-group-item-action py-2 active">
                - View Students
              </a>
              <a href="add.php" class="list-group-item list-group-item-action py-2">
                  - Add Students
              </a>
            </div>
          </div>
        </nav>
        <!-- Sidebar -->

    </header>
  <!--Main Navigation -->
  
  <!--Main layout-->
  <main style="margin-top: 60px;">
    <div class="container p-5">
            <form method="post">
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control border-secondary" placeholder="Name" name="pname">
                    </div>

                    <div class="col">
                        <input type="text" class="form-control border-secondary" placeholder="Age" name="bage">
                    </div>

                    <div class="col">
                        <select class="form-control border-secondary" id="school" name="pschool">
                            <option>school</option>
                            <option value="LEAD School Karmala">LEAD School Karmala</option>
                            <option value="Amirash School">Amirash School</option>
                            <option value="Gyandam International School">Gyandam International School</option>
                            <option value="Jay Ambe School">Jay Ambe School</option>
                            <option value="Swaminarayan School Salvav">Swaminarayan School Salvav</option>
                        </select>
                    </div>

                    <div class="col">
                        <select class="form-control border-secondary" id="class" name="pclass">
                            <option>Class</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="5">5</option>
                            <option value="7">7</option>
                        </select>
                    </div>

                    <div class="col">
                        <select class="form-control border-secondary" id="divison" name="pdivison">
                            <option>Divison</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                        </select>
                    </div>

                    <div class="col">
                        <button type="submit" class="btn btn-secondary w-75" name="search">Search</button>
                    </div>
                </div>
            </form>
            <br>
            <!-- Table Layout -->
  
              <?php
                
                include("db.php");
        
                $results_per_page = 8;
                
                $result = mysqli_query($mysql, 'SELECT * FROM `student_list`');
                $number_of_result = mysqli_num_rows($result);
                

                if(!isset($_GET['page'])) {
                  $page = 1;
                }
                else{
                  $page = $_GET['page'];
                }

                $page_first_result = ($page-1) * $results_per_page;
                $query = "SELECT * FROM `student_list` LIMIT " . $page_first_result . ',' . $results_per_page;
                $result = mysqli_query($mysql, $query);
                
                /* Filter & Search Data */
                if(isset($_POST['search'])) {
                  $pname = $_POST['pname'];
                  $bage = $_POST['bage'];
                  $pschool = $_POST['pschool'];
                  $pclass = $_POST['pclass'];
                  $pdivison = $_POST['pdivison'];

                  if($bage != "" || $pschool != "" || $pclass != "" || $pdivison != "")
                  {
                    $query = "SELECT * FROM student_list WHERE `Age` = '$bage' OR `School` = '$pschool' OR `Class` = '$pclass' OR 
                    `Divison` = '$pdivison'";
                  }
                  
                  if($pname != '')
                  {
                    $query = "SELECT * FROM `student_list` WHERE `Name` LIKE '".$pname."%'";
                  }

                  $result = mysqli_query($mysql, $query);
                }
                
                /* Display Table */
                echo "<table class='table table-striped table-bordered mt-2'>
                <thead class='table-primary'>
                  <tr>
                    <th scope='col'>ID</th>
                    <th scope='col'>Name</th>
                    <th scope='col'>Age</th>
                    <th scope='col'>School</th>
                    <th scope='col'>Class</th>
                    <th scope='col'>Divison</th>
                    <th scope='col'>Status</th>
                    <th scope='col'></th>
                  </tr>
                </thead>
                <tbody>";

                while($row = mysqli_fetch_array($result))
                {
                  echo "<tr>";
                  echo "<th scope='row'>".$row['ID']."</th>";
                  echo "<td>".$row['Name']."</td>";
                  echo "<td>".$row['Age']."</td>";
                  echo "<td>".$row['School']."</td>";
                  echo "<td>".$row['Class']."</td>";
                  echo "<td>".$row['Divison']."</td>";
                  echo "<td>".$row['Status']."</td>";
                  echo "<td>" 
              ?>
                  <a href='edit.php?edit=<?php echo $row['ID'];?>'>Edit</a>
                  <a href='delete.php?del=<?php echo $row['ID'];?>'>Delete</a>
                
              <?php  
                  echo "</tr>";
                }
                
                echo "</tbody></table>";
              ?>

              <!-- Pagination -->
              <div class="m-auto text-center">
                <?php
                    echo '<a href = "demo.php?page=' . $page .'">'.' <'.'</a>';
                    for($page = 1; $page<= 7; $page++) {  

                      echo '<a class="p-1" href = "demo.php?page=' . $page . '">'.' | ' . $page . ' </a>';  
                    }
                    echo '<a href = "demo.php?page=' . $page .'">'.' | >'.'</a>';  
                ?>
              </div>

              <!-- Download Button -->
              <div class="mt-3">
                <button type="button" class="btn btn-secondary"><i class="fa fa-file-excel-o"></i> Download Excel</button>
              </div>
    </div>
  </main>
  <!--Main layout-->

</body>
</html>