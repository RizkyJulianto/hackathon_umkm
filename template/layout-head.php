<?php
include "../connection/config.php";
session_start();

if (!isset($_SESSION['id_users'])) {
    header("Location: ../login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title_web ?></title>
    <link rel="stylesheet" href="../assets/css/tailwindcss/output.css">
    <link rel="stylesheet" href="../libs/font/font.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.1/css/dataTables.dataTables.css" />
    <link rel="stylesheet" href="../assets/tailwindcss/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="font-fira overflow-x-hidden">
    <div class="app-container relative min-h-screen flex">
        <header class="flex fixed top-0 left-0 right-0 w-full">
            <aside
                class="max-w-[300px] w-full h-screen border-r-[2px] bg-white border-r-gray-200 shadow py-3 px-5 z-[1000]">
                <div class="logo flex justify-center text-center w-full">
                    <a href="" class="font-semibold text-xl pt-2 px-3 pb-3">Nasi Kebuli<span class="text-primary">
                            AJB</span>
                    </a>
                </div>
                <div class="nav-side flex flex-col w-full mt-3">
                    <span class="text-sm text-gray-400 mb-2 inline-block">Home</span>
                    <a href="../admin/dashboard.php"
                        class="nav-menu active-menu bg-primary text-white p-3 rounded mb-3">
                        <span><i class="fas fa-th-large"></i> Dashboard</span>
                    </a>
                    <span class="text-sm text-gray-400 mb-2 inline-block">Main Data</span>
                    <a href="../admin/produk.php" class="nav-menu p-3 rounded mb-3 hover:bg-primary hover:text-white">
                        <span><i class="fas fa-database"></i> Data Produk</span>
                    </a>
                    <a href="../admin/testimoni.php"
                        class="nav-menu p-3 rounded mb-3 hover:bg-primary hover:text-white">
                        <span><i class="fas fa-people-arrows"></i> Testimoni</span>
                    </a>
                    <span class="text-sm text-gray-400 mb-2 inline-block">Activity</span>
                    <a href="../admin/histori.php" class="nav-menu p-3 rounded mb-3 hover:bg-primary hover:text-white">
                        <span><i class="fa-solid fa-clock-rotate-left"></i>
                            Histori</span>
                    </a>

                    <a href="../auth/sign-out.php" class="nav-menu p-3 rounded mb-3 hover:bg-primary hover:text-white">
                        <span><i class="fas fa-sign-out-alt"></i> Sign Out</span>
                    </a>
                </div>
            </aside>
            <nav class="w-full h-[85px] border-b-[2px] border-b-gray-200 z-[1000]">
                <div class="bg-white shadow flex justify-end items-center px-5 gap-4 h-full">
                    <h1><?= $_SESSION['email'] ?></h1>
                    <img class="w-[45px] h-[45px] shadow-sm border-[1px] border-[#eee] rounded-full"
                        src="https://cdn-icons-png.flaticon.com/512/4042/4042171.png" alt="">
                </div>
            </nav>
        </header>