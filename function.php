<?php

//connect to database
$conn = mysqli_connect("localhost", "admin", "whoami2002", "db_pus");

//function query
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function register($data)
{
    global $conn;
    $email = $data["email"];
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    $result = mysqli_query($conn, "SELECT username FROM tbuser WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                        alert('Username sudah tersedia !')
                    </script>";
        return false;
    }

    if ($password !== $password2) {
        echo "<script>
                        alert('Konfirmasi password tidak sesuai !')
                    </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO tbuser VALUES(null, '$email','$username', '$password')");

    return mysqli_affected_rows($conn);
}
