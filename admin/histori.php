<?php
$title_web = "Aktivitas Histori - Nasi Kebuli AJB";
include "../template/layout-head.php"; ?>

<section class="history w-full ml-[300px] pt-[85px] bg-[#f5f5f5] min-h-screen overflow-y-auto">
    <div class="header-admin w-full bg-white py-5 px-7">
        <div class="flex flex-col">
            <h3 class="text-xl"><i class="fas fa-people-arrows"></i> Aktivitas Histori</h3>
            <p class="text-sm text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Architecto commodi
                nihil fugiat
                voluptates. Quas, a!</p>
        </div>
    </div>
    <main class="row-history py-5 px-7 -z-[1]">
        <div class="bg-white py-5 px-7">
            <table id="myTableDatabase" class="display">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Pesan</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $a = 1;
                    $sqlHistori = mysqli_query($connect, "SELECT * FROM histori");
                    while ($data = mysqli_fetch_array($sqlHistori)) {
                    ?>
                    <tr>
                        <td><?= $a++ ?></td>
                        <td><?= $data['pesan'] ?></td>
                        <td><?= $data['tanggal'] ?></td>
                        <td>
                            <a class="p-1 bg-red-500 text-white text-sm"
                                href="./hapus_histori.php?id_histori=<?= $data['id_histori'] ?>"
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