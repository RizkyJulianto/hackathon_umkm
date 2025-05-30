<?php
$title_web = "Data Produk - Nasi Kebuli AJB";
include "../template/layout-head.php"; ?>

<section class="product w-full ml-[300px] pt-[85px] bg-[#f5f5f5] min-h-screen overflow-y-auto">
    <div class="header-admin w-full bg-white py-5 px-7">
        <div class="flex flex-col">
            <h3 class="text-xl"><i class="fas fa-database"></i> Data Produk</h3>
            <p class="text-sm text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Architecto commodi
                nihil fugiat
                voluptates. Quas, a!</p>
        </div>
    </div>
    <main class="row-product py-5 px-7 ">
        <a href="./tambah_produk.php" class="inline-block bg-primary text-white py-2 px-3">Tambah Data</a>
        <div class="bg-white py-5 px-7 mt-5">
            <table id="myTableDatabase" class="display">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar Produk</th>
                        <th>Nama Produk</th>
                        <th>Kode Produk</th>
                        <th>Harga</th>
                        <th>QR CODE</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $a = 1;
                    $sqlProduk = mysqli_query($connect, "SELECT * FROM produk");
                    while ($data = mysqli_fetch_array($sqlProduk)) {
                    ?>
                    <tr>
                        <td><?= $a++ ?></td>
                        <td><img src="../uploads/<?= $data['gambar'] ?>" class="w-[120px] h-[90px] object-contain"
                                alt=""></td>
                        <td><?= $data['nama_produk'] ?></td>
                        <td><?= $data['kode_produk'] ?></td>
                        <td><?= $data['harga'] ?></td>
                        <td><img src="./qrcodes/<?= $data['qr_code'] ?>" class="w-[90px] h-[90px]" alt=""></td>
                        <td>
                            <a class="p-1 bg-yellow-500 text-sm"
                                href="./edit_produk.php?id_produk=<?= $data['id_produk'] ?>">Edit</a>
                            <a class="p-1 bg-red-500 text-white text-sm"
                                href="./hapus_produk.php?id_produk=<?= $data['id_produk'] ?>"
                                onclick="return confirm('Data produk ingin dihapus?');">Hapus</a>
                        </td>
                    </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
    </main>

    <footer class="p-5 bg-white">
        <p class="text-sm">&copy; 2025 - Nasi Kebuli <span class="text-primary">AJB</span></p>
    </footer>
</section>
<?php include "../template/layout-footer.php"; ?>