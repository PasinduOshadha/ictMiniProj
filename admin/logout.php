<?php

session_start();

require('../inc/db.conn.php');


if(isset($_SESSION['user'])){
    

    session_destroy();
    unset($_SESSION['user']);
    header('Location:../admin.php?logoutsuccessfully');

    
}