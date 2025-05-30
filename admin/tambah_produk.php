<?php
$title_web = "Tambah Data Produk - Nasi Kebuli AJB";
include "../template/layout-head.php"; ?>

<section class="product w-full ml-[300px] pt-[85px] bg-[#f5f5f5] min-h-screen overflow-y-auto z-10">
    <div class="header-admin w-full bg-white py-5 px-7">
        <div class="flex flex-col">
            <h3 class="text-xl"><i class="fas fa-people-arrows"></i> Data Produk</h3>
            <p class="text-sm text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Architecto commodi
                nihil fugiat
                voluptates. Quas, a!</p>
        </div>
    </div>
    <main class="row-product py-5 px-7 ">
        <div class="bg-white py-5 px-7">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="flex gap-4 mb-3">
                    <div class="flex-col flex w-full">
                        <label for="nama_produk">Nama Produk</label>
                        <input type="text" name="nama_produk" required
                            class="w-full p-2 border-[1.5px] border-gray-600 outline-none focus:border-primary">
                    </div>
                    <div class="flex-col flex w-full">
                        <label for="kode_produk">Kode Produk</label>
                        <input readonly type="text" id="kode_produk" name="kode_produk" required
                            class="w-full p-2 border-[1.5px] border-gray-600 outline-none focus:border-primary">
                    </div>
                </div>
                <div class="flex gap-4 mb-3">
                    <div class="flex-col flex w-full">
                        <label for="harga">Harga Produk</label>
                        <input type="number" name="harga" required
                            class="w-full p-2 border-[1.5px] border-gray-600 outline-none focus:border-primary">
                    </div>
                    <div class="flex-col flex w-full">
                        <label for="gambar">Gambar Produk</label>
                        <input type="file" name="gambar" accept="image/*" required
                            class="w-full p-2 border-[1.5px] border-gray-600 outline-none focus:border-primary">
                    </div>
                </div>
                <div class="flex gap-4 mb-3">
                    <div class="flex-col flex w-full">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" required
                            class="w-full h-[100px] p-2 border-[1.5px] border-gray-600 outline-none focus:border-primary"></textarea>
                    </div>
                </div>
                <button type="submit" class="py-2 px-3 bg-primary text-white" name="addProduk">Tambah Produk</button>
            </form>

        </div>
    </main>

    <footer class="p-5 bg-white">
        <p class="text-sm">&copy; 2025 - Batik Nusantara</p>
    </footer>
</section>

<script>
function generateKodeBarang() {
    const prefix = "PRD";
    const randomNum = Math.floor(1000 + Math.random() * 9000);
    const date = new Date();
    const timestamp = date.getFullYear().toString().slice(-2) +
        String(date.getMonth() + 1).padStart(2, '0') +
        String(date.getDate()).padStart(2, '0');
    const kode = `${prefix}-${timestamp}-${randomNum}`;
    document.getElementById("kode_produk").value = kode;
}

window.onload = generateKodeBarang;
</script>
<?php include "../template/layout-footer.php"; ?>


<?php
include_once '../libs/phpqrcode/qrlib.php';

if (isset($_POST['addProduk'])) {
    $nama_produk = htmlspecialchars($_POST['nama_produk']);
    $kode_produk = htmlspecialchars($_POST['kode_produk']);
    $harga = (int) $_POST['harga'];
    $deskripsi = htmlspecialchars($_POST['deskripsi']);
    $created_at = date('Y-m-d H:i:s');

    $gambar = uploadGambar();
    if (!$gambar) exit;

    $qr_folder = 'qrcodes/';
    if (!file_exists($qr_folder)) mkdir($qr_folder, 0755, true);

    $qr_file = $qr_folder . $kode_produk . '.png';
    QRcode::png($kode_produk, $qr_file, QR_ECLEVEL_H, 10);
    $qr_filename = basename($qr_file);

    $query = "INSERT INTO produk (nama_produk, gambar, harga, deskripsi, qr_code, created_at, kode_produk)
              VALUES ('$nama_produk', '$gambar', $harga, '$deskripsi', '$qr_filename', '$created_at', '$kode_produk')";

    $result = mysqli_query($connect, $query);

    if ($result) {
        echo "<script>alert('Produk berhasil ditambahkan!'); window.location.href='produk.php';</script>";
    } else {
        echo "<script>alert('Gagal menambahkan produk!'); window.location.href='produk.php';</script>";
    }
}

function uploadGambar()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuran = $_FILES['gambar']['size'];
    $tmp = $_FILES['gambar']['tmp_name'];
    $error = $_FILES['gambar']['error'];

    if ($error === 4) {
        echo "<script>alert('Belum memilih gambar!'); window.location.href='produk.php';</script>";
        return false;
    }

    $ekstensiValid = ['jpg', 'jpeg', 'png', 'webp', 'gif'];
    $ekstensi = strtolower(pathinfo($namaFile, PATHINFO_EXTENSION));

    if (!in_array($ekstensi, $ekstensiValid)) {
        echo "<script>alert('File bukan gambar!'); window.location.href='produk.php';</script>";
        return false;
    }

    if ($ukuran > 3000000) {
        echo "<script>alert('Ukuran gambar terlalu besar (max 3MB)!'); window.location.href='produk.php';</script>";
        return false;
    }

    $namaBaru = "IMG_" . uniqid() . '.' . $ekstensi;
    move_uploaded_file($tmp, '../uploads/' . $namaBaru);
    return $namaBaru;
}
?>