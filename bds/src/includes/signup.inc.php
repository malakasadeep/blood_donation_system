<?php
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $username = $_POST["uid"];
    $gender = $_POST["gender"];
    $dob = date('Y-m-d', strtotime($_POST["dob"]));
    $address = $_POST["address"];
    $Weight = $_POST["Weight"];
    $phonenumber = $_POST["phonenumber"];
    $email = $_POST["email"];
    $nic = $_POST["nic"];
    $bloodg = $_POST["bloodg"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    $emptyInput = emptyInputSignup($name, $email, $username, $pwd, $pwdrepeat);
    $invalidUid = invalidUid($username);
    $invalidEmail = invalidEmail($email);
    $pwdMatch = pwdMatch($pwd, $pwdrepeat);
    $uidExists = uidExists($conn, $username, $email);

    if ($emptyInput !== false){
        header("Location:../signup.php?error=emptyinput");
        exit();
    }
    if ($invalidUid !== false){
        header("Location:../signup.php?error=invaliduid");
        exit();
    }
    if ($invalidEmail !== false){
        header("Location:../signup.php?error=invalidemail");
        exit();
    }
    if ($pwdMatch !== false){
        header("Location:../signup.php?error=passwordnotmatch");
        exit();
    }
    /*if ($uidExists !== false){
        header("Location:../signup.php?error=usernametaken");
        exit();
    }*/

    createUser($conn, $name, $username, $gender, $dob, $address, $Weight, $phonenumber, $email, $nic, $bloodg, $pwd);

}
else{
    header('Location:../login.php');
}