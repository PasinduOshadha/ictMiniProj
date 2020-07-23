<?php

session_start();

require('../inc/db.conn.php');


// appointment delete
if(isset($_SESSION['msg_type']) && isset($_SESSION['msg'])){
  
  echo "<div class='alert alert-success alert-dismissible fade show'>".$_SESSION['msg']."<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</button></span></div>";
  unset($_SESSION['msg-type']);
  unset($_SESSION['msg']);
}

?>

<?php 
//header
include 'template_parts/header.php';

?>

  <?php if(!isset($_SESSION['user'])) : ?>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 card">
        <p>You must logged in</p>
            
            <p><br> <a class="btn btn-primary" name='logout' href='../admin.php'>login</a></p>
        </div>
      </div>
    </div>

  <?php else: ?>
    <?php  
      include 'template_parts/navbar.php';

    ?>
  
<div id="wrapper">

    <?php
    //side navigation
    include 'template_parts/sidebar.php';
    ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>

                <?php
                  //counting total bookings

                  //sql query
                  $sql = "SELECT * FROM users";

                  //preparing query usinng mysqli_stmt_query
                  $stmt = mysqli_prepare($conn, $sql);

                  if(!$stmt){
                    echo "<script>console.log('rows count query error');</script>";
                  }
                  else{

                    //executing sql
                    mysqli_stmt_execute($stmt);

                    //storing results
                    mysqli_stmt_store_result($stmt);

                    //result row count
                    $rowcount = mysqli_stmt_num_rows($stmt);

                    echo "<div class='mr-5'>$rowcount Total Bookings</div>";
                    mysqli_stmt_close($stmt);
                  }
                ?>

                
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">11 New Tasks!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          
        </div>
 
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Recent Bookings</div>
          <div class="card-body">
           
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Mobile No</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  
                  <?php
                      if($rowcount > 0){
                        // sql query
                        $sql = "SELECT id,userName, userPhn, bookedDate, bookedTime FROM users LIMIT 4";

                        //preparing query
                        $stmt = mysqli_prepare($conn, $sql);

                        //execute the query
                        mysqli_stmt_execute($stmt);

                        //binding paramerters
                        mysqli_stmt_bind_result($stmt, $id, $userName, $userPhn, $bookedDate, $bookedTime);

                        //row numbering
                        $num = 0;

                        // fetching values
                        while(mysqli_stmt_fetch($stmt)){

                          //nubering
                          $num += 1;

                          //genarating the table rows
                          echo "<tr>";
                          echo "<td scope='row'>" .$num ."</td>";
                          echo "<td>" .$userName ."</td>";
                          echo "<td>" .$userPhn ."</td>";
                          echo "<td>" .$bookedDate ."</td>";
                          echo "<td>" .$bookedTime ."</td>";
                          echo "<td><button type='button' class='btn text-white bg-success'>Mark as Done</button>&nbsp;<a data-toggle='modal' data-target='#exampleModal' name='edit' href='$id' class='text-primary pl-2 pr-2'>EDIT</a>&nbsp;<a name='delete' href='process.php?delete=$id' class='text-danger'>CANCEL</a></td>";
                          echo "</tr>";
                        }
                      }

                  ?>
                  
                  
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      

    </div>
    <!-- /.content-wrapper -->

    <?php endif ?>
    <?php 
      mysqli_close($conn);

      ?>




<?php
//footer
include 'template_parts/footer.php';

?>

