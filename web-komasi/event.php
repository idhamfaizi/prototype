<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Event</title>
    <link rel="icon" href="assets/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style/selector.css">
    <link rel="stylesheet" href="style/drop.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="style/modalimg.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>
<body>
    <?php include_once 'template/header2.php'; ?>
    <?php include_once 'template/header2.php'; ?>

    <!-- section -->
    <div id="section0" class="section">
        <div class="grid justify-items-center text-black">
            <h1 class="text-center font-bold text-4xl mt-24"><span class="bg-gradient-to-b from-[#1c69ff] to-[#1bf499] bg-clip-text text-transparent font-bold">E</span>vent Komasi</h1>
        </div>

        <div class="flex items-center max-w-md md:mx-auto bg-white border-2 border-black rounded-full my-7 mx-5">
            <div class="w-full">
                <input type="search" class="w-full px-4 py-1 text-gray-900 rounded-full focus:outline-none"
                    placeholder="Cari event yang ingin anda ikuti" x-model="search">
            </div>
            <div>
                <button type="submit" class="flex items-center justify-center w-12 h-12 text-black rounded-full">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-8">
            <div class="mt-6 space-y-12 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-x-6">
                <div class="group relative">
                    <div class="relative w-full h-full bg-transparent overflow-hidden sm:aspect-w-2 sm:aspect-h-1 sm:h-80 lg:aspect-w-1 lg:aspect-h-1 drop-shadow-xl">
                    <img src="assets/sharmasi.jpg" alt="lorem" class="w-full h-full object-center object-cover">
                    </div>
                    <a href="#"><h3 class="font-bold mt-6 text-2xl text-black hover:text-[#2B6EF0]">Webinar Nasional Komasi Raharja</h3></a>
                    <i class="far fa-calendar-alt mr-2"></i><p class="inline text-gray-900 mb-7">10 Januari 2022</p><br>
                    <i class="fas fa-map-marker-alt mr-2"></i><p class="inline text-gray-900 mb-7">Zoom Meeting</p>
                    <a href="#" class="text-[#2B6EF0] float-right hover:opacity-75">Detail acara</a>
                </div>

                <div class="group relative">
                    <div class="relative w-full h-full bg-transparent overflow-hidden sm:aspect-w-2 sm:aspect-h-1 sm:h-80 lg:aspect-w-1 lg:aspect-h-1 drop-shadow-xl">
                    <img src="assets/imgabout.png" alt="lorem" class="w-full h-full object-center object-cover">
                    </div>
                    <a href="#"><h3 class="font-bold mt-6 text-2xl text-black hover:text-[#2B6EF0]">Webinar Nasional Komasi Raharja</h3></a>
                    <i class="far fa-calendar-alt mr-2"></i><p class="inline text-gray-900 mb-7">10 Januari 2022</p><br>
                    <i class="fas fa-map-marker-alt mr-2"></i><p class="inline text-gray-900 mb-7">Zoom Meeting</p>
                    <a href="#" class="text-[#2B6EF0] float-right hover:opacity-75">Detail acara</a>
                </div>

                <div class="group relative">
                    <div class="relative w-full h-full bg-transparent overflow-hidden sm:aspect-w-2 sm:aspect-h-1 sm:h-80 lg:aspect-w-1 lg:aspect-h-1 drop-shadow-xl">
                    <img src="assets/imgabout.png" alt="lorem" class="w-full h-full object-center object-cover">
                    </div>
                    <a href="#"><h3 class="font-bold mt-6 text-2xl text-black hover:text-[#2B6EF0]">Webinar Nasional Komasi Raharja</h3></a>
                    <i class="far fa-calendar-alt mr-2"></i><p class="inline text-gray-900 mb-7">10 Januari 2022</p><br>
                    <i class="fas fa-map-marker-alt mr-2"></i><p class="inline text-gray-900 mb-7">Zoom Meeting</p>
                    <a href="#" class="text-[#2B6EF0] float-right hover:opacity-75">Detail acara</a>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-8">
            <div class="mt-6 space-y-12 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-x-6">
                <div class="group relative">
                    <div class="relative w-full h-full bg-transparent overflow-hidden sm:aspect-w-2 sm:aspect-h-1 sm:h-80 lg:aspect-w-1 lg:aspect-h-1 drop-shadow-xl">
                    <img src="assets/imgabout.png" alt="lorem" class="w-full h-full object-center object-cover">
                    </div>
                    <a href="#"><h3 class="font-bold mt-6 text-2xl text-black hover:text-[#2B6EF0]">Webinar Nasional Komasi Raharja</h3></a>
                    <i class="far fa-calendar-alt mr-2"></i><p class="inline text-gray-900 mb-7">10 Januari 2022</p><br>
                    <i class="fas fa-map-marker-alt mr-2"></i><p class="inline text-gray-900 mb-7">Zoom Meeting</p>
                    <a href="#" class="text-[#2B6EF0] float-right hover:opacity-75">Detail acara</a>
                </div>

                <div class="group relative">
                    <div class="relative w-full h-full bg-transparent overflow-hidden sm:aspect-w-2 sm:aspect-h-1 sm:h-80 lg:aspect-w-1 lg:aspect-h-1 drop-shadow-xl">
                    <img src="assets/imgabout.png" alt="lorem" class="w-full h-full object-center object-cover">
                    </div>
                    <a href="#"><h3 class="font-bold mt-6 text-2xl text-black hover:text-[#2B6EF0]">Webinar Nasional Komasi Raharja</h3></a>
                    <i class="far fa-calendar-alt mr-2"></i><p class="inline text-gray-900 mb-7">10 Januari 2022</p><br>
                    <i class="fas fa-map-marker-alt mr-2"></i><p class="inline text-gray-900 mb-7">Zoom Meeting</p>
                    <a href="#" class="text-[#2B6EF0] float-right hover:opacity-75">Detail acara</a>
                </div>

                <div class="group relative">
                    <div class="relative w-full h-full bg-transparent overflow-hidden sm:aspect-w-2 sm:aspect-h-1 sm:h-80 lg:aspect-w-1 lg:aspect-h-1 drop-shadow-xl">
                    <img src="assets/imgabout.png" alt="lorem" class="w-full h-full object-center object-cover">
                    </div>
                    <a href="#"><h3 class="font-bold mt-6 text-2xl text-black hover:text-[#2B6EF0]">Webinar Nasional Komasi Raharja</h3></a>
                    <i class="far fa-calendar-alt mr-2"></i><p class="inline text-gray-900 mb-7">10 Januari 2022</p><br>
                    <i class="fas fa-map-marker-alt mr-2"></i><p class="inline text-gray-900 mb-7">Zoom Meeting</p>
                    <a href="#" class="text-[#2B6EF0] float-right hover:opacity-75">Detail acara</a>
                </div>
            </div>
        </div>        
    </div>

    <!-- footer -->
    <?php include_once 'template/footer.php'; ?>
</body>
</html>