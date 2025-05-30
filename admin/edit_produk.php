<?php
// Aktifkan error reporting untuk debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "../template/layout-head.php";
include_once '../libs/phpqrcode/qrlib.php';
include '../koneksi.php'; // Koneksi ke database

// Validasi ID produk dari URL
$id = isset($_GET['id_produk']) ? (int) $_GET['id_produk'] : 0;
if ($id <= 0) {
    die("ID produk tidak valid.");
}

// Ambil data produk
$result = mysqli_query($connect, "SELECT * FROM produk WHERE id_produk = $id");
if (!$result || mysqli_num_rows($result) === 0) {
    die("Produk tidak ditemukan.");
}
$data = mysqli_fetch_assoc($result);

// Fungsi upload gambar
function uploadGambar()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuran = $_FILES['gambar']['size'];
    $tmp = $_FILES['gambar']['tmp_name'];
    $error = $_FILES['gambar']['error'];

    if ($error === 4) return false;

    $ekstensiValid = ['jpg', 'jpeg', 'png', 'webp', 'gif'];
    $ekstensi = strtolower(pathinfo($namaFile, PATHINFO_EXTENSION));
    if (!in_array($ekstensi, $ekstensiValid)) return false;

    if ($ukuran > 3000000) return false;

    $namaBaru = "IMG_" . uniqid() . '.' . $ekstensi;
    if (!move_uploaded_file($tmp, '../uploads/' . $namaBaru)) {
        return false;
    }

    return $namaBaru;
}

// Handle update
if (isset($_POST['updateProduk'])) {
    $nama_produk = htmlspecialchars($_POST['nama_produk']);
    $kode_produk = htmlspecialchars($_POST['kode_produk']);
    $harga = (int) $_POST['harga'];
    $deskripsi = htmlspecialchars($_POST['deskripsi']);
    $updated_at = date('Y-m-d H:i:s');

    // Gambar baru atau lama
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $data['gambar'];
    } else {
        $gambar = uploadGambar();
        if (!$gambar) {
            echo "<script>alert('Upload gambar gagal. Pastikan format dan ukuran benar.'); window.history.back();</script>";
            exit;
        }

        // Hapus gambar lama
        $oldFile = "../uploads/" . $data['gambar'];
        if (file_exists($oldFile)) {
            unlink($oldFile);
        }
    }

    // QR Code
    $qr_folder = 'qrcodes/';
    if (!is_dir($qr_folder)) {
        mkdir($qr_folder, 0755, true);
    }
    $qr_file = $qr_folder . $kode_produk . '.png';
    QRcode::png($kode_produk, $qr_file, QR_ECLEVEL_H, 10);
    $qr_filename = basename($qr_file);

    // Update ke database
    $query = "UPDATE produk SET 
                nama_produk = '$nama_produk',
                kode_produk = '$kode_produk',
                harga = $harga,
                deskripsi = '$deskripsi',
                gambar = '$gambar',
                qr_code = '$qr_filename',
                updated_at = '$updated_at'
              WHERE id_produk = $id";

    if (mysqli_query($connect, $query)) {
        echo "<script>alert('Produk berhasil diupdate!'); window.location.href='produk.php';</script>";
    } else {
        echo "<script>alert('Gagal mengupdate produk!'); window.location.href='produk.php';</script>";
    }
}
?>

<section class="product w-full ml-[300px] pt-[85px] bg-[#f5f5f5] min-h-screen overflow-y-auto -z-10">
    <div class="header-admin w-full bg-white py-5 px-7">
        <h3 class="text-xl"><i class="fas fa-edit"></i> Edit Produk</h3>
    </div>
    <main class="py-5 px-7">
        <div class="bg-white py-5 px-7">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="flex gap-4 mb-3">
                    <div class="flex-col flex w-full">
                        <label for="nama_produk">Nama Produk</label>
                        <input type="text" name="nama_produk" required
                            value="<?= htmlspecialchars($data['nama_produk']) ?>"
                            class="w-full p-2 border-[1.5px] border-gray-600 outline-none focus:border-primary">
                    </div>
                    <div class="flex-col flex w-full">
                        <label for="kode_produk">Kode Produk</label>
                        <input type="text" name="kode_produk" readonly required
                            value="<?= htmlspecialchars($data['kode_produk']) ?>"
                            class="w-full p-2 border-[1.5px] border-gray-600 outline-none focus:border-primary">
                    </div>
                </div>

                <div class="flex gap-4 mb-3">
                    <div class="flex-col flex w-full">
                        <label for="harga">Harga Produk</label>
                        <input type="number" name="harga" required value="<?= $data['harga'] ?>"
                            class="w-full p-2 border-[1.5px] border-gray-600 outline-none focus:border-primary">
                    </div>
                    <div class="flex-col flex w-full">
                        <label for="gambar">Gambar Produk</label>
                        <input type="file" name="gambar" accept="image/*"
                            class="w-full p-2 border-[1.5px] border-gray-600 outline-none focus:border-primary">
                        <?php if (!empty($data['gambar'])): ?>
                        <img src="../uploads/<?= $data['gambar'] ?>" class="w-[120px] mt-2" alt="Preview">
                        <?php endif; ?>
                    </div>
                </div>

                <div class="flex gap-4 mb-3">
                    <div class="flex-col flex w-full">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" required
                            class="w-full h-[100px] p-2 border-[1.5px] border-gray-600 outline-none focus:border-primary"><?= htmlspecialchars($data['deskripsi']) ?></textarea>
                    </div>
                </div>

                <button type="submit" class="py-2 px-3 bg-primary text-white" name="updateProduk">Update Produk</button>
            </form>
        </div>
    </main>

    <footer class="p-5 bg-white">
        <p class="text-sm">&copy; 2025 - Nasi Kebuli <span class="text-primary">AJB</span></p>
    </footer>
</section>

<?php include "../template/layout-footer.php"; ?>