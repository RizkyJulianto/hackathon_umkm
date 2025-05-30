<?php

require "../connection/config.php";

if (!isset($_GET['id_produk'])) {
    header("Location: ../auth/sign-in.php");
}

$id_produk = $_GET['id_produk'];
$sql = mysqli_query($connect, "DELETE FROM produk WHERE id_produk = '$id_produk'");

if ($sql) {
    echo "
    <script>alert('Data produk berhasil dihapus!');
    document.location.href = 'produk.php'</script>
    ";
} else {
    echo "
    <script>alert('Data produk gagal dihapus!');
    document.location.href = 'produk.php'</script>
    ";
}