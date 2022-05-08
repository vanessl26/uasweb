<?php

require "backend/conn.php";

$username = ValidateName($_POST['daftarname'], $_POST['daftarpass']);

if ($username ==  "ga bisa") {
} else {
    return $username;
}



function alert($msg)
{
    echo "<script type='text/javascript'>alert('$msg');
    window.location.href='regist.php';</script>";
}


function ValidateName($username, $password)
{


    try {
        $con = GetConnection();

        $query = "SELECT * FROM  akun WHERE username like ?";

        $result = $con->prepare($query);
        $result->execute([$username]);

        $row = $result->fetch();
        if ($row['username'] != null && $row['username'] == $username) {

            return alert("Username telah ada di DB kami");
        } else {



            $password =  password_hash($_POST['daftarpass'], PASSWORD_BCRYPT);

            $conn = GetConnection();

            $sql =  "INSERT INTO akun ( username, password) VALUES (?, ?)";

            $result = $conn->prepare($sql);
            $result->execute([$username, $password]);
            header('Location: login.php');
        }
    } catch (Exception $e) {
        return "error";
    }
}
