<?php
session_start();

if(!isset($_SESSION['user'])) : ?>

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
//db connection
require '../inc/db.conn.php';

//header
require 'template_parts/header.php';
 
//navbar
require 'template_parts/navbar.php';

?>
<div id="wrapper">

<?php
    //side navigation
    include 'template_parts/sidebar.php';
    ?>

    <div id="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
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

                  //counting total bookings

                  $sql = "SELECT * FROM users";

                  //preparing stmt
                  $stmt = mysqli_prepare($conn, $sql);

                  //execute the query
                  mysqli_stmt_execute($stmt);

                  //storing result
                  mysqli_stmt_store_result($stmt);

                  //rowcount
                  $rowCount = mysqli_stmt_num_rows($stmt);

                      if($rowCount > 0){
                        // sql query
                        $sql = "SELECT id,userName, userPhn, bookedDate, bookedTime FROM users";

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

                            //numbering
                            $num += 1;

                            //genarating the table rows
                            echo "<tr>";
                            echo "<td scope='row'>" .$num ."</td>";
                            echo "<td>" .$userName ."</td>";
                            echo "<td>" .$userPhn ."</td>";
                            echo "<td>" .$bookedDate ."</td>";
                            echo "<td>" .$bookedTime ."</td>";
                            echo "<td><button type='button' class='btn text-white bg-success'>Mark as Done</button>&nbsp;<a name='edit' href='../admin/edit-booking.php?id=$id' class='text-primary pl-2 pr-2'>EDIT</a>&nbsp;<a name='delete' href='process.php?delete=$id' class='text-danger'>CANCEL</a></td>";
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
            </div>
        </div>
    </div>

</div>

<?php endif ?>
<?php

// footer
require 'template_parts/footer.php';
?>