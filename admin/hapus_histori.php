<?php

require "../connection/config.php";

if (!isset($_GET['id_histori'])) {
    header("Location: ../auth/sign-in.php");
}

$id_histori = $_GET['id_histori'];
$sql = mysqli_query($connect, "DELETE FROM histori WHERE id_histori = '$id_histori'");

if ($sql) {
    echo "
    <script>alert('Data histori berhasil dihapus!');
    document.location.href = 'histori.php'</script>
    ";
} else {
    echo "
    <script>alert('Data histori gagal dihapus!');
    document.location.href = 'histori.php'</script>
    ";
}