<?php include "../template/layout-head.php"; ?>
<section class="product w-full ml-[300px] pt-[85px] bg-[#f5f5f5] min-h-screen overflow-y-auto z-100">
    <div class="header-admin w-full bg-white py-5 px-7">
        <div class="flex flex-col">
            <h3 class="text-xl"><i class="fas fa-database"></i> Data Product </h3>
            <p class="text-sm text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Architecto commodi
                nihil fugiat
                voluptates. Quas, a!</p>
        </div>
    </div>
    <main class="row-product py-5 px-7">
        <a href="py-2 px-3">Tambah Produk</a>
        <div class="bg-white py-5 px-7">
            <table id="myTableDatabase" class="display">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar Produk</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>QR CODE</th>
                        <th>Aksi</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "../connection/config.php";
                    $a = 1;
                    $sql = mysqli_query($connect, "SELECT * FROM produk WHERE id_produk ORDER BY id_produk DESC");
                    while ($data = mysqli_fetch_array($sql)) {
                    ?>
                    <tr>
                        <td><?= $a++ ?></td>
                        <td><?= $data['gambar'] ?></td>
                        <td><?= $data['nama_produk'] ?></td>
                        <td><?= $data['nama_produk'] ?></td>
                        <td><?= $data['nama_produk'] ?></td>
                        <td><?= $data['qr_code'] ?></td>
                        <td>
                            <a class="p-1 bg-yellow-400" href="./hapus_produk.php">Edit</a>
                            <a class="p-1 bg-red-500" href="./hapus_produk.php?id_produk=<?= $data['id_produk'] ?>"
                                onclick="return confirm('Data produk ingin dihapus?');">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </main>

    <footer class="p-5 bg-white">
        <p class="text-sm">&copy; 2025 - Batik Nusantara</p>
    </footer>
</section>
<?php include "../template/layout-footer.php"; ?>