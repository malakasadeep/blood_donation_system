<?php
if(isset($_POST["submit"])){
    $username = $_POST["uname"];
    $pwd = $_POST["pword"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputsLogin($username, $pwd) !== false){
        header('Location:../staff_login.php?error=emptyinput');
        exit();
    }

    loginstaff($conn, $username, $pwd);
    echo"kjgj";
}
else{
    header('Location:../staff_login.php');
}