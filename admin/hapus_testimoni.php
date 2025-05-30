<?php

require "../connection/config.php";

if (!isset($_GET['id_testimoni'])) {
    header("Location: ../auth/sign-in.php");
}

$id_testimoni = $_GET['id_testimoni'];
$sql = mysqli_query($connect, "DELETE FROM testimoni WHERE id_testimoni = '$id_testimoni'");

if ($sql) {
    echo "
    <script>alert('Data testimoni berhasil dihapus!');
    document.location.href = 'testimoni.php'</script>
    ";
} else {
    echo "
    <script>alert('Data testimoni gagal dihapus!');
    document.location.href = 'testimoni.php'</script>
    ";
}