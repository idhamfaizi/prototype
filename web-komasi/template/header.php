<head>
    <link rel="icon" href="assets/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style/selector.css">
    <link rel="stylesheet" href="style/drop.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="style/modalimg.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="js/search.js"></script>
</head>
<body>
    <!-- navbar -->
    <nav id="nav" class="fixed text-white bg-transparent z-50 w-full mb-20 px-7 py-2 flex justify-between font-bold rounded-b-2xl tracking-wide items-center" style="backdrop-filter: blur(3px);">
        <img class="block h-8 w-auto float-left" src="assets/KOMASI.svg" alt="Image">
        <div>
            <a href="#section0" class="hover:text-[#2B9871] hover:underline decoration-2 px-3 py-1">Beranda</a>
            <span class="dropdown"><a href="#" class="dropbtn  hover:text-[#2B9871] hover:underline decoration-2">About<i class="fas fa-angle-down" style="margin-left: 5px;"></i></a>
                <div class="drop">
                    <a href="#section1">Komasi</a>
                    <a href="about2.php#section4">Visi & Misi</a>
                    <a href="bph.php">Struktur Organisasi</a>
                </div>
            </span>
            <a href="#section3" class="hover:text-[#2B9871] hover:underline decoration-2 px-3 py-1">Sharmasi</a>
            <span class="dropdown"><a href="#" class="dropbtn  hover:text-[#2B9871] hover:underline decoration-2">Blog<i class="fas fa-angle-down" style="margin-left: 5px;"></i></a>
                <div class="drop">
                    <a href="#section4">Event</a>
                    <a href="#section2">Berita</a>
                    <a href="galeri.php">Galeri</a>
                </div>
            </span>
            <i class="fas fa-search hover:cursor-pointer hover:text-[#2B9871] px-3 py-1" onclick="openModal('modal')"></i>
        </div>
    </nav>

    <!-- modal search -->
    <div id="modal" class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4">
        <div class="relative top-40 mx-auto shadow-lg rounded-md bg-white max-w-md">

            <!-- Modal header -->
            <div class="flex justify-between items-center bg-[#2B6EF0] text-white text-xl rounded-t-md px-4 py-2">
                <h3>Apa yang mau kamu cari ?</h3>
                <i class="far fa-times-circle hover:cursor-pointer" onclick="closeModal()"></i>
            </div>

            <!-- Modal body -->
            <div class="flex relative mx-auto w-full max-w-md">
                <input class="border-2 border-primary bg-red transition h-12 px-4 pr-16 rounded-md focus:outline-none w-full text-black text-lg" type="search" name="search" placeholder="Search" />
                <button type="submit" class="absolute right-0 top-3 mr-3">
                    <svg class="text-black h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                    <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- btn scroll -->
    <a href="#section0">
        <button id="btn-scroll" class="rounded-full h-12 w-12" onclick="scrolltop()"><i class="fas fa-chevron-up"></i></button>
        <script>
            var mybutton = document.getElementById("btn-scroll");
            var nav = document.getElementById("navbar");
            window.onscroll = function() {scrollFunction()};
            function scrollFunction() {
                if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                    mybutton.style.display = "block";
                } else {
                    mybutton.style.display = "none";
                }
            }
        </script>
    </a>