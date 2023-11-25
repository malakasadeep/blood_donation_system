<?php
function emptyInputSignup($name, $email, $username, $pwd, $pwdrepeat){
    $result;
    if(empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdrepeat)){
        $result = true;
    
    }else {
        $result = false;
    }
    return $result;
}

function invalidUid($username){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result = true;
    
    }else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    
    }else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdrepeat){
    $result;
    if($pwd !== $pwdrepeat){
        $result = true;
    
    }else {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $username, $email){
    $sql = "SELECT * FROM donor WHERE DonorUid = ? OR Email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location:../signup.php?error=stmtfaild");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }else{
        return false;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $username, $gender, $dob, $address, $Weight, $phonenumber, $email, $nic, $bloodg, $pwd){
    $sql = "INSERT INTO donor (DonorName, DonorUid, Gender, DOB, Adress, Weight, PhoneNo, Email, NIC, BloodGroup, Password) VALUES (?,?,?,?,?,?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location:../signup.php?error=stmtfaild");
        exit();
    }
    $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "sssssiissss", $name, $username, $gender, $dob, $address, $Weight, $phonenumber, $email, $nic, $bloodg, $hashedpwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location:../login.php?error=none");
    exit();
}

function emptyInputsLogin($username, $pwd){
    $result;
    if (empty($username) || empty($pwd)){
        $result = true;
    }else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $pwd){
    $uidExists = uidExists($conn, $username, $username);
    if ($uidExists === false){
        header("Location:../login.php?error=wronglogin");
        exit();
    }
    $pwdHashed = $uidExists["Password"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if($checkPwd === false){
        header('Location:../login.php?error=wronglogin');
        exit();
    }else if ($checkPwd === true){
        session_start();
        $_SESSION["userid"] = $uidExists["DonorId"];
        $_SESSION["useruid"] = $uidExists["DonorUid"];
        $_SESSION["useruname"] = $uidExists["DonorName"];
        $_SESSION["PhoneNo"] = $uidExists["PhoneNo"];
        $_SESSION["Email"] = $uidExists["Email"];
        $_SESSION["DonationScore"] = $uidExists["DonationScore"];
        header("Location:../donor_menu.php");
        exit();

    }
}

