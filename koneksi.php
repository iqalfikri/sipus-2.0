<?php

$server = "localhost";
$user = "admin";
$password = "whoami2002";
$nama_database = "db_pus";

$db = mysqli_connect($server, $user, $password, $nama_database);

if (!$db) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
