<?php
$title_web = "Testimoni - Nasi Kebuli AJB";
include "../template/layout-head.php"; ?>

<section class="testimoni w-full ml-[300px] pt-[85px] bg-[#f5f5f5] min-h-screen overflow-y-auto">
    <div class="header-admin w-full bg-white py-5 px-7">
        <div class="flex flex-col">
            <h3 class="text-xl"><i class="fas fa-people-arrows"></i> Data Testimoni</h3>
            <p class="text-sm text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Architecto commodi
                nihil fugiat
                voluptates. Quas, a!</p>
        </div>
    </div>
    <main class="row-testimoni py-5 px-7 -z-[1]">
        <div class="bg-white py-5 px-7">
            <table id="myTableDatabase" class="display">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pelanggan</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $a = 1;
                    $id_users = $_SESSION['id_users'];
                    $sqlTestimoni = mysqli_query($connect, "SELECT * FROM testimoni");
                    while ($data = mysqli_fetch_array($sqlTestimoni)) {
                    ?>
                    <tr>
                        <td><?= $a++ ?></td>
                        <td><?= $data['nama'] ?></td>
                        <td><?= $data['deskripsi'] ?></td>
                        <td>
                            <a class="p-1 bg-red-500 text-white"
                                href="./hapus_testimoni.php?id_testimoni=<?= $data['id_testimoni'] ?>"
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