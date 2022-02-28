<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Komasi</title>
    <link rel="stylesheet" href="style/selector.css">
    <link rel="stylesheet" href="style/drop.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php include_once 'template/header2.php'; ?>
    <?php include_once 'template/preload.html'; ?>
    
    <!-- content -->
    <div id="section0" class="bg-white-100">

        <div class="grid justify-items-center">
            <h1 class="text-center text-2xl mt-24">Galeri Komasi</h1>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mt-6 space-y-12 lg:space-y-0 lg:grid lg:grid-cols-2 lg:gap-x-6">
                <div class="group relative">
                    <div class="relative w-full h-full bg-transparent rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-96 lg:aspect-w-1 lg:aspect-h-1 drop-shadow-xl">
                    <img src="assets/imgabout.png" alt="lorem" class="w-full h-full object-center object-cover">
                    </div>
                    <h3 class="uppercase text-center font-bold mt-6 text-sm text-black">musyawarah besar komasi 2022</h3>
                    <p class="text-center text-gray-900 mb-7">MUBESEKOM diselenggarakan kurang lebih 1 minggu di ruangan LV-204</p>
                </div>
      
                <div class="group relative">
                    <div class="relative w-full h-full bg-transparent rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-96 lg:aspect-w-1 lg:aspect-h-1 drop-shadow-xl">
                    <img src="assets/prospek.png" alt="lorem" class="w-full h-full object-center object-cover">
                    </div>
                    <h3 class="uppercase text-center font-bold mt-6 text-sm text-black">prospek angkatan 2018</h3>
                    <p class="text-center text-gray-900 mb-7">MUBESEKOM diselenggarakan kurang lebih 1 minggu di ruangan LV-204</p>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mt-6 space-y-12 lg:space-y-0 lg:grid lg:grid-cols-1 lg:gap-x-6">
                <div class="group relative">
                    <div class="relative w-full h-full bg-transparent rounded-full overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-96 lg:aspect-w-1 lg:aspect-h-1 drop-shadow-xl">
                    <img src="assets/bg3.jpg" alt="lorem" class="w-full h-full object-center object-cover">
                    </div>
                    <h3 class="uppercase text-center font-bold mt-6 text-sm text-black">Ketua Umum</h3>
                    <p class="text-center text-gray-900 mb-7">MUBESEKOM diselenggarakan kurang lebih 1 minggu di ruangan LV-204</p>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mt-6 space-y-12 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-x-6">
                <div class="group relative">
                    <div class="relative w-full h-full bg-transparent rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-96 lg:aspect-w-1 lg:aspect-h-1 drop-shadow-xl">
                    <img src="assets/bg3.jpg" alt="lorem" class="w-full h-full object-center object-cover">
                    </div>
                    <h3 class="uppercase text-center font-bold mt-6 text-sm text-black">Ketua Umum</h3>
                    <p class="text-center text-gray-900 mb-7">MUBESEKOM diselenggarakan kurang lebih 1 minggu di ruangan LV-204</p>
                </div>

                <div class="group relative">
                    <div class="relative w-full h-full bg-transparent rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-96 lg:aspect-w-1 lg:aspect-h-1 drop-shadow-xl">
                    <img src="assets/bg3.jpg" alt="lorem" class="w-full h-full object-center object-cover">
                    </div>
                    <h3 class="uppercase text-center font-bold mt-6 text-sm text-black">Ketua Umum</h3>
                    <p class="text-center text-gray-900 mb-7">MUBESEKOM diselenggarakan kurang lebih 1 minggu di ruangan LV-204</p>
                </div>

                <div class="group relative">
                    <div class="relative w-full h-full bg-transparent rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-96 lg:aspect-w-1 lg:aspect-h-1 drop-shadow-xl">
                    <img src="assets/bg3.jpg" alt="lorem" class="w-full h-full object-center object-cover">
                    </div>
                    <h3 class="uppercase text-center font-bold mt-6 text-sm text-black">Ketua Umum</h3>
                    <p class="text-center text-gray-900 mb-7">MUBESEKOM diselenggarakan kurang lebih 1 minggu di ruangan LV-204</p>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include_once 'template/footer.php'; ?>
</body>
<script>
    function openModal(modalId) {
    modal = document.getElementById(modalId)
    modal.classList.remove('hidden')
    }

    function closeModal() {
        modal = document.getElementById('modal')
        modal.classList.add('hidden')
    }
</script>
</html>