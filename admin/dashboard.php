<?php
$title_web = "Dashboard | Nasi Kebuli AJB";
include "../template/layout-head.php" ?>

<section class="dashboard w-full ml-[300px] pt-[85px] bg-[#f7f7f7] min-h-screen overflow-y-auto">
    <div class="header-admin w-full bg-white py-5 px-7">
        <div class="flex flex-col">
            <h3 class="text-xl"><i class="fas fa-th-large"></i> Dashboard </h3>
            <p class="text-sm text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Architecto commodi
                nihil fugiat
                voluptates. Quas, a!</p>
        </div>
    </div>
    <main class="row-dashboard py-5 px-7">
        <div class="card grid grid-cols-2 mt-2 gap-6">
            <div class="flex flex-col shadow p-6 w-full border-[1px] border-gray-200 hover:bg-gray-50 bg-white">
                <div
                    class="w-[40px] h-[40px] border-[1px] mb-2 border-primary bg-primary text-white rounded-sm flex justify-center items-center">
                    <i class="fas fa-location"></i>
                </div>
                <h3 class="text-2xl font-semibold my-1"><?= $_SESSION['alamat'] ?></h3>
                <div class="flex items-center text-sm justify-between">
                    <span class="text-gray-600 ">Alamat Rumah Makan AJB</span>
                    <i class="fas fa-chevron-right bg-gray-200 rounded-sm p-2"></i>
                </div>
            </div>
            <div class="flex flex-col shadow p-6 w-full border-[1px] border-gray-200 hover:bg-gray-50 bg-white">
                <div
                    class="w-[40px] h-[40px] border-[1px] mb-2 border-primary bg-primary text-white rounded-sm flex justify-center items-center">
                    <i class="fas fa-users"></i>
                </div>
                <h3 class="text-3xl font-semibold my-1">100</h3>
                <div class="flex items-center text-sm justify-between">
                    <span class="text-gray-600 ">Total Users</span>
                    <i class="fas fa-chevron-right bg-gray-200 rounded-sm p-2"></i>
                </div>
            </div>

        </div>
        <div class="w-full bg-white mt-6 p-5 rounded-md">
            <h1 class="text-xl font-medium">Selamat Datang, <?= $_SESSION['nama'] ?></h1>
            <p class="text-gray-500">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse,
                incidunt.</p>
        </div>
    </main>

    <footer class="p-5 bg-white">
        <p class="text-sm">&copy; 2025 - Nasi Kenbuli <span class="text-primary">AJB</span></p>
    </footer>
</section>

<?php include "../template/layout-footer.php" ?>