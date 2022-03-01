<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Komasi Raharja</title>
    <link rel="icon" href="assets/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style/selector.css">
    <link rel="stylesheet" href="style/drop.css">
    <link rel="stylesheet" href="style/parallax.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="style/modalimg.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libsanimate.css/4.1.1/animate.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    

</head>
<body class="bg-gray-300">
    <?php include_once 'template/preload.html'; ?>
    <?php include_once 'template/header.php'; ?>

    <!-- jumbotron -->
    <div id="section0" class="flex" style="height:780px; background: rgba(0, 0, 0, .5); background-blend-mode: darken; background-image: url('assets/bghead.png'); background-position: center; background-size: cover;">
        <div class="flex items-start lg:items-center lg:text-center px-8 md:px-12 lg:w-6/12 mx-auto">
            <div class="pt-[50vh] md:pt-40 lg:pt-0 lg:mx-auto">
                <img src="assets/logo.png" class="w-40 lg:w-60 md:block lg:mx-auto" alt="lorem">
                <!-- <img src="assets/KOMASI.svg" class="md:hidden" alt="lorem"> -->
                <h1 class="uppercase text-2xl lg:text-5xl text-white mt-6">komunitas Mahasiswa sistem informasi</h1>
                <a href="#section1"><button class="w-44 h-12 lg:w-96 lg:h-16 text-white lg:text-xl mt-6 transition color text border duration-300 bg-transparent border-2 rounded-full hover:text-[#272727] hover:bg-[#2B9871] transform hover:border-none rounded-tl-[50px] rounded-br-[50px]">Selengkapnya</button></a>
            </div>
        </div>
    </div>

    <!-- about -->
    <div class="hidden bg-[url('assets/bgAbout2.png')] bg-cover bg-center">
        <div class="md:flex space-x-10 md:mr-0 mr-10 pb-10">

            <div class="w-2/4 pl-16 mt-10 md:flex justify-center items-center hidden">
                <img src="assets/logo.png" alt="lorem">
            </div>

            <div class="md:flex items-center lg:pr-56 md:pr-40">
                <div class="text-white">
                    <h1 class="lg:text-5xl font-bold leading-tight text-3xl">Tentang Komasi</h1>
                    <p class="mt-4 text-lg font-normal indent-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus aut non eum esse impedit, perspiciatis, temporibus ea est unde cumque iste alias doloribus praesentium aspernatur perferendis, labore neque culpa! Non.</p>
                    <button class="w-80 h-14 text-white text-lg mt-6 transition-colors transition-border duration-300 bg-transparent border-2 rounded-full hover:bg-[#2B9871] transform hover:border-none rounded-tl-[50px] rounded-br-[50px]">Selengkapnya</button>
                </div>
            </div>
            <!-- Box right -->
        </div>
    </div>

    <!-- slider about -->
    <div id="section1" name="section1" style="--swiper-navigation-color: #272727; --swiper-pagination-color: #fff" class="swiper mySwiper">
      <div class="parallax-bg" style="background-image: url('assets/bgAbout2.png');" data-swiper-parallax="-23%"></div>
      <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="md:flex space-x-3 md:mr-0 mr-5">
                <div class="w-2/4 px-10 md:flex justify-center items-center hidden">
                    <div class="w-full bg-transparent sahdow-lg overflow-hidden flex drop-shadow-2xl">
                        <div class="w-80 h-80" data-swiper-parallax="-300">
                            <img class="object-center object-cover w-full h-full" src="assets/logo.png" alt="photo">
                        </div>
                    </div>
                </div>

                <div class="md:flex items-center lg:pr-10 md:pr-5" >
                    <div class="text-white">
                        <h2 class="pb-5 lg:text-5xl font-bold leading-tight text-3xl" data-swiper-parallax="-500"><span class="bg-gradient-to-b from-[#1c69ff] to-[#1bf499] bg-clip-text text-transparent font-bold">T</span>entang Komasi</h2>

                        <p class="text-lg font-normal indent-6" data-swiper-parallax="-250">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus aut non eum esse impedit, perspiciatis, temporibus ea est unde cumque iste alias doloribus praesentium aspernatur perferendis, labore neque culpa! Non.
                            <a href="about2.php"><button class="lg:block w-40 h-12 lg:w-80 lg:h-16 text-white text-sm md:text-md lg:text-lg mt-6 transition-colors transition-text transition-border hover:text-[#272727] duration-300 bg-transparent border-2 rounded-full hover:bg-[#2B9871] transform hover:border-none rounded-tl-[50px] rounded-br-[50px]" data-swiper-parallax="-200">Selengkapnya</button></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="swiper-slide">
            <div class="md:flex space-x-3 md:mr-0 mr-5">
                <div class="md:flex items-center lg:pl-10 md:pl-5" >
                    <div class="text-white">
                        <h2 class="lg:text-5xl font-bold leading-tight text-3xl" data-swiper-parallax="-500">Sambutan Kaprodi</h2>
                        <p class="py-2 bg-gradient-to-t from-[#1c69ff] to-[#1bf499] bg-clip-text text-transparent font-extrabold" data-swiper-parallax="-350">Desy S.Kom</p>
                        <p class="text-lg font-normal indent-6" data-swiper-parallax="-250">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus aut non eum esse impedit, perspiciatis, temporibus ea est unde cumque iste alias doloribus praesentium aspernatur perferendis, labore neque culpa! Non.</p>
                    </div>
                </div>

                <div class="w-2/4 pr-20 md:flex justify-center items-center hidden">
                    <div class="w-full bg-transparent rounded-full sahdow-lg overflow-hidden flex drop-shadow-2xl">
                        <div class="w-80 h-80" data-swiper-parallax="-300">
                            <img class="object-center object-cover w-full h-full" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80" alt="photo">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-slide">
            <div class="md:flex space-x-3 md:mr-0 mr-5">
                <div class="md:flex items-center lg:pl-10 md:pl-5" >
                    <div class="text-white">
                        <h2 class="lg:text-5xl font-bold leading-tight text-3xl" data-swiper-parallax="-500">Sambutan Ketua Umum</h2>
                        <p class="py-2 bg-gradient-to-t from-[#1c69ff] to-[#1bf499] bg-clip-text text-transparent font-extrabold" data-swiper-parallax="-350">Gian Nurwana</p>
                        <p class="text-lg font-normal indent-4" data-swiper-parallax="-250">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus aut non eum esse impedit, perspiciatis, temporibus ea est unde cumque iste alias doloribus praesentium aspernatur perferendis, labore neque culpa! Non.</p>
                    </div>
                </div>

                <div class="w-2/4 pr-20 md:flex justify-center items-center hidden">
                    <div class="w-full bg-transparent rounded-full sahdow-lg overflow-hidden flex drop-shadow-2xl">
                        <div class="w-80 h-80" data-swiper-parallax="-300">
                            <img class="object-center object-cover w-full h-full" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80" alt="photo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="swiper-button-next px-5 hover:text-[#fff]"></div>
      <div class="swiper-button-prev px-5 hover:text-[#fff]"></div>
      <div class="swiper-pagination"></div>
    </div>

    <!-- galeri -->
    <div id="section2" class="max-w-7xl mx-auto px-4 mb-10 sm:px-6 lg:px-1">
        <div class="grid justify-items-center">
            <h1 class="text-center text-4xl mt-10"><span class="bg-gradient-to-b from-[#1c69ff] to-[#1bf499] bg-clip-text text-transparent font-bold">G</span>aleri</h1>
            <p class="text-center">Sekumpulan momen yang diabadikan lewat foto dari seluruh kegiatan / program kerja KOMASI Raharja.</p>
        </div>
        <div class="mt-6 space-y-12 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-x-6">
            <div class="group relative">
                <div class="relative w-full h-full bg-transparent overflow-hidden group-hover:scale-105 transform duration-300 sm:aspect-w-2 sm:aspect-h-1 sm:h-80 lg:aspect-w-1 lg:aspect-h-1 drop-shadow-xl">
                <img src="assets/bg3.jpg" alt="lorem" class="w-full h-full object-center object-cover">
                </div>
            </div>

            <div class="group relative">
                <div class="relative w-full h-full bg-transparent overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-80 lg:aspect-w-1 lg:aspect-h-1 drop-shadow-xl">
                <img src="assets/bg3.jpg" alt="lorem" class="w-full h-full object-center object-cover">
                </div>
            </div>

            <div class="group relative">
                <div class="relative w-full h-full bg-transparent overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-80 lg:aspect-w-1 lg:aspect-h-1 drop-shadow-xl">
                <img src="assets/bg3.jpg" alt="lorem" class="w-full h-full object-center object-cover">
                </div>
            </div>
        </div>

        <div class="mt-6 space-y-12 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-x-6  hidden">
            <div class="group relative">
                <div class="relative w-full h-full bg-transparent overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-80 lg:aspect-w-1 lg:aspect-h-1 drop-shadow-xl">
                <img src="assets/bg3.jpg" alt="lorem" class="w-full h-full object-center object-cover">
                </div>
            </div>

            <div class="group relative">
                <div class="relative w-full h-full bg-transparent overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-80 lg:aspect-w-1 lg:aspect-h-1 drop-shadow-xl">
                <img src="assets/bg3.jpg" alt="lorem" class="w-full h-full object-center object-cover">
                </div>
            </div>

            <div class="group relative">
                <div class="relative w-full h-full bg-transparent overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-80 lg:aspect-w-1 lg:aspect-h-1 drop-shadow-xl">
                <img src="assets/bg3.jpg" alt="lorem" class="w-full h-full object-center object-cover">
                </div>
            </div>
        </div>

        <div class="grid justify-items-center">
            <a href="galeri.php"><button class="w-80 h-14 text-white text-lg mt-6 transition text color duration-300 bg-[#2b6ef0] rounded-full hover:bg-[#2B9871] hover:text-[#272727] transform rounded-tl-[50px] rounded-br-[50px]">Lihat Semua >></button></a>
        </div>
    </div>

    <!-- sharmasi -->
    <div id="section3" class="bg-[url('assets/bgAbout2.png')] bg-cover bg-center" style="min-height: 60vh;">
        <div class="md:flex space-x-10 md:ml-0 ml-6 py-3 min-width-full">

            <div class="md:flex items-center lg:pl-24 md:pl-12">
                <div class="text-white">
                    <h1 class="lg:text-5xl uppercase font-bold leading-tight text-3xl"><span class="bg-gradient-to-b from-[#1c69ff] to-[#1bf499] bg-clip-text text-transparent">S</span>harmasi</h1>
                    <p class="mt-4 text-lg font-normal indent-6">Halooo sahabat KOMASI, Kami punya kegiatan baru lagi nih, penasaran gak? Langsung aja cek di samping ya. Departement PENELITIAN DAN PENGEMBANGAN PENDIDIKAN mempersembahkan : "SHARMASI (Sharing Mahasiswa Sistem Informasi)"
                    </p>

                    <div class="text-lg mt-2">Benefits :
                        <ul class="ml-5 list-disc">
                            <li class="">Ilmu tentang dasar-dasar CSS</li>
                            <li class="">Reward dengan s&k berlaku</li>
                        </ul>
                    </div>

                    <div class="text-lg mt-2">Untuk informasi lebih lanjut bisa hubungi nomor dibawah ini :
                        <ul class="">
                            <i class="fab fa-whatsapp align-middle" style="color: green; font-size:2em;"></i> 081291840520 (Dhiyah Ayu) <br>
                            <i class="fab fa-whatsapp align-middle" style="color: green; font-size:2em;"></i> 085280427006 (Zahwa)
                        </ul>
                    </div>

                    <p class="mt-2 text-lg font-normal">Jangan lupa untuk follow dan stay terus di platform resmi Komasi ⁣untuk informasi terbaru lainnya :
                    </p>
                    <div class="">
                        <a href="https://www.instagram.com/komasiraharja/" target="_blank" class="hover:opacity-50"><i class="fab fa-instagram align-middle" style="font-size: 2em; padding: 7px;"></i>komasiraharja</a>
                        <a href="https://www.youtube.com/channel/UC3tsda_lJrsZpibGXuZpr-w" target="_blank" class="hover:opacity-50"><i class="fab fa-youtube align-middle" style="font-size: 2em; padding: 7px;"></i>Komasi raharja</a>
                    </div>
                </div>
            </div>

            <div class="w-11/12 pr-24 md:flex justify-center items-center hidden">
                <img id="myImg" src="assets/sharmasi.jpeg" class="transition duration-300 transform hover:scale-105 hover:shadow-2xl" alt="lorem">
                <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img01">
                    <div id="caption"></div>
                </div>
                <script src="js/modalimg.js"></script>
            </div>
        </div>
    </div>

    <!-- event -->
    <div id="section4">
        <div class="grid justify-items-center text-black">
            <h1 class="text-center text-4xl mt-10"><span class="bg-gradient-to-b from-[#1c69ff] to-[#1bf499] bg-clip-text text-transparent font-bold">E</span>vent Yang Akan Datang</h1>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-8">
            <div class="mt-6 space-y-12 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-x-6">
                <div class="group relative">
                    <div class="relative w-full h-full bg-transparent overflow-hidden sm:aspect-w-2 sm:aspect-h-1 sm:h-80 lg:aspect-w-1 lg:aspect-h-1 drop-shadow-xl">
                    <img src="assets/sharmasi.jpg" alt="lorem" class="w-full h-full object-center object-cover">
                    </div>
                    <a href="eventfull.php"><h3 class="font-bold mt-6 text-2xl text-black hover:text-[#2B6EF0]">Webinar Nasional Komasi Raharja</h3></a>
                    <i class="far fa-calendar-alt mr-2"></i><p class="inline text-gray-900 mb-7">10 Januari 2022</p><br>
                    <i class="fas fa-map-marker-alt mr-2"></i><p class="inline text-gray-900 mb-7">Zoom Meeting</p>
                    <a href="eventfull.php" class="text-[#2B6EF0] float-right hover:opacity-75">Detail acara</a>
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
            <div class="grid justify-items-end">
                <a href="event.php" class="text-xl font-bold mt-5 text-[#2B6EF0] hover:text-[#2B9871]">Lihat semua event</a>
            </div>
        </div>
    </div>

    <!-- map -->
    <div id="section5" class="pb-5">
        <div class="grid justify-items-center">
            <h1 class="text-center text-4xl mt-6"><span class="bg-gradient-to-b from-[#1c69ff] to-[#1bf499] bg-clip-text text-transparent font-bold">T</span>emukan Kami</h1>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mt-6 space-y-12 lg:space-y-0 lg:grid lg:grid-cols-2 lg:gap-x-10">
                <div class="group relative">
                    <div class="w-full h-full sm:aspect-w-2 sm:aspect-h-1 sm:h-full lg:aspect-w-1 lg:aspect-h-1 drop-shadow-xl">
                    <img src="assets/map.png" alt="lorem" class="w-full h-full">
                    </div>
                </div>
    
                <div class="group relative">
                    <div class="w-full h-full overflow-hidden sm:aspect-w-2 sm:aspect-h-1 sm:h-full lg:aspect-w-1 lg:aspect-h-1 drop-shadow-xl">
                    <h3 class="text-4xl uppercase font-bold">universitas raharja tangerang</h3>
                    <address class="leading-loose py-6 text-xl">Modern, Jl. Jenderal Sudirman No.40, RT.002/RW.006, Cikokol, Kec. Tangerang, Kota Tangerang, Banten 15117</address>
    
                    <div class="flex justify-center lg:justify-start">
                        <a href="mailto:idham@raharja.info">
                            <button class="text-white h-14 w-52 rounded-tr-[50px] rounded-bl-[50px] bg-[#2B6EF0] shadow-xl transition color text duration-300 hover:bg-[#2B9871] hover:text-[#272727] hover:underline transform hover:translate-x-6 text-xl"><i class="far fa-envelope px-2"></i>Contact Us</button>
                        </a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include_once 'template/footer.php'; ?>
</body>
<script>
    var swiper = new Swiper(".mySwiper", {
        speed: 1000,
        parallax: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        autoplay: {
            delay: 6000,
            disableOnInteraction: false
        },
        // autoplay: false,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        loop: false,
      });
</script>
</html>