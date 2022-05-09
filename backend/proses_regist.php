<?php

require "conn.php";

ValidateName($_POST['daftarname'], $_POST['daftaremail'], $_POST['daftarpass'], $_POST['daftarnotelp'], $_POST['daftarrole']);



function alert($msg)
{
    echo "<script type='text/javascript'>alert('$msg');
    window.location.href='regist.php';</script>";
}


function ValidateName($username, $email,  $password, $no_telp, $role)
{


    try {
        $con = GetConnection();

        $query = "SELECT * FROM  users WHERE email like ?";

        $result = $con->prepare($query);
        $result->execute(['daftaremail']);

        $row = $result->fetch();
        if ($row['email'] != null && $row['email'] ==  $email) {

            return alert("Email telah ada di DB kami");
            header('Location: home.php');
        } else {

            $password =  password_hash($_POST['daftarpass'], PASSWORD_BCRYPT);

            $conn = GetConnection();

            $sql =  "INSERT INTO users ( username , email, password, no_telp, role) VALUES (?, ?,?,?,?)";

            $result = $conn->prepare($sql);
            $result->execute([$username, $email,  $password, $no_telp, $role]);
            header('Location: home.php');
        }
    } catch (Exception $e) {
        return "error";
        echo "<script type='text/javascript'>alert('ha');
    window.location.href='regist.php';</script>";
    }
}
