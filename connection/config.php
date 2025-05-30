<?php

$connect = mysqli_connect("localhost", "root", "", "db_umkm_ajb");

if (!$connect) {
    die("Database gagal terhubung" . mysqli_connect_error($connect));
}