<?php
session_start();

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
    require '../inc/db.conn.php';

    if(isset($_POST['update'])){
        //database update code update code
        echo "database update and redirect to index page " .$_GET['id'] ."<br>";

        $cus_name = $_POST['cusName'];
        $cus_email = $_POST['cusEmail'];
        $cus_phn = $_POST['cusPhn'];
        $cus_nic = $_POST['cusNic'];
        $cus_bookedDate = $_POST['bookedDate'];
        $cus_bookedTime = $_POST['bookedTime'];

        $sql = "UPDATE users SET userName=?, userEmail=?, userPhn=?, userNic=?, bookedDate=?, bookedTime=? WHERE id=?";

        //prepare
        $stmt = mysqli_prepare($conn, $sql);

        //binding paramerters
        mysqli_stmt_bind_param($stmt, 'sssssss', $cus_name, $cus_email, $cus_phn, $cus_nic, $cus_bookedDate, $cus_bookedTime, $_GET['id']);

        //execute sql
        mysqli_stmt_execute($stmt);

        //checking whether the statemet is successfult executed

        if(!mysqli_stmt_execute($stmt)){
            echo "error updating table " .mysqli_stmt_errno($stmt);
        }

        else{
            echo "database successfully updated... rediredting to all bookings page";
            // @MUST DO => redirect to all booking page using 'header' function
        }
        
    }

    elseif(isset($_GET['delete'])){
        $row_id = $_GET['delete'];               // the id of the row that will be using in the query
        $sql = "DELETE FROM users WHERE id = ?";

        //prepare
        $stmt = mysqli_prepare($conn, $sql);

        //binding parameters
        mysqli_stmt_bind_param($stmt, 's', $row_id);

        //execute the sql
        mysqli_stmt_execute($stmt);

        //cheking whether the query has succesfully exectuted
        if(!mysqli_stmt_execute($stmt)){
            echo "sql error " .mysqli_stmt_error($stmt);
        }

        else{
            $_SESSION['msg_type'] = 'recored_deleted';
            $_SESSION['msg'] = 'The Record Has beed Deleted';
            header('Location: index.php?status=d');
        }
    }

    else{
        echo "error";
    }
    ?>

<?php endif ?>

