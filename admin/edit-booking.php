<?php

session_start();


// checking for sessions
if(!isset($_SESSION['user'])) : ?>

<div class="container pt-4">
      <div class="row justify-content-center">
        <div class="col-md-8 card">
        <p>You must logged in</p>
            
            <p><br> <a class="btn btn-primary" name='logout' href='../admin.php'>login</a></p>
        </div>
      </div>
</div>

<?php else: 

    //header
    require 'template_parts/header.php';
    
    //navbar
    require 'template_parts/navbar.php';

    

    require '../inc/db.conn.php';

    //sql
    $sql = "SELECT userName, userEmail, userPhn, userNic, bookedDate, bookedTime FROM users WHERE id=?";
    
    //prepare
    $stmt = mysqli_prepare($conn, $sql);

    //bind query param
    mysqli_stmt_bind_param($stmt, 's', $_GET['id']);

    //execute
    mysqli_stmt_execute($stmt);

    //binding result params
    mysqli_stmt_bind_result($stmt, $username, $usermail, $userphn, $usernic, $bookeddate, $bookedtime);

    if(!mysqli_stmt_fetch($stmt)){
        echo "error" .mysqli_stmt_error($stmt);
    }

    else{ ?>

        <div id="wrapper">
            <?php require 'template_parts/sidebar.php' ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 card">
                        <div class="card-header">
                            <h3>Edit boooking</h3>
                        </div>
                        <div class="card-body">
                        <form method="POST" action="process.php?id=<?php echo $_GET['id'] ?>">
                            <div class="row">
                                <div class="col-md-6">
                                    
                                    <div class="form-group">
                                        <label class="mb-3">Customer Name</label>
                                        <input type="text" name="cusName" class="form-control" value="<?php echo $username; ?>">
                                    </div>
                                    <div class="form-group">
                                    <label class="mb-3">Customer Phone No.</label>
                                        <input type="text" name="cusPhn" class="form-control" value="<?php echo $userphn; ?>">
                                    </div>
                                    <div class="form-group">
                                    <label class="mb-3">Customer Appointment Date</label>
                                        <input type="text" name="bookedDate" class="form-control" value="<?php echo $bookeddate; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label class="mb-3">Customer Email</label>
                                    <input type="text" name="cusEmail" class="form-control" value="<?php echo $usermail; ?>">
                                </div>
                                <div class="form-group">
                                    <label class="mb-3">Customer NIC</label>
                                    <input type="text" name="cusNic" class="form-control" value="<?php echo $usernic; ?>">
                                </div>
                                <div class="form-group">
                                    <label class="mb-3">Customer Appointment Time</label>
                                    <input type="text" name="bookedTime" class="form-control" value="<?php echo $bookedtime; ?>">
                                </div>
                                </div>
                            </div>
                            <button name="update" class="btn btn-primary">Update</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php 
    //php end of if(!mysqli_stmt_fetch)
    }

    ?>

<?php endif ?>

<?php require 'template_parts/footer.php'; ?>



