<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Event Full</title>
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
<body class="bg-gradient-to-tr from-[#1c69ff] to-[#1bf499]">
    <?php include_once 'template/header2.php'; ?>
    <?php include_once 'template/preload.html'; ?>
    
    <div id="section0" class=" mb-5 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid justify-end">
            <a href="event.php" class="underline text-[#2B6EF0] hover:text-[#2B9871] text-xl mt-24">Acara Lainnya</a>
        </div>
        
        <div class="mt-6 space-y-12 lg:space-y-0 lg:grid lg:grid-cols-2 lg:gap-x-12">
            <div class="group relative">
                <div class="w-full h-full sm:aspect-w-2 sm:aspect-h-1 sm:h-full lg:aspect-w-1 lg:aspect-h-1 drop-shadow-xl">
                <img src="assets/sharmasi.jpg" alt="lorem" class="w-full h-full">
                </div>
            </div>

            <div class="group relative">
                <div class="w-full h-full overflow-hidden sm:aspect-w-2 sm:aspect-h-1 sm:h-full lg:aspect-w-1 lg:aspect-h-1 drop-shadow-xl">
                <h3 class="text-4xl font-bold">10 Minutes & Presentation Stratup National 2019</h3>
                <p class="leading-loose mt-6 text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos dignissimos odio accusantium autem facere repellendus tempore necessitatibus, cupiditate nisi perferendis quasi beatae maiores quam quis temporibus nihil omnis consequuntur esse.</p>

                    <div class="text-xl">Benefits :
                        <ul class="ml-5 list-disc">
                            <li class="p-3 list-disc">List Item 1</li>
                            <li class="p-3">List Item 2</li>
                            <li class="p-3">List Item 3</li>
                        </ul>
                    </div>

                    <!-- <div class="text-xl">
                        <ul class="list-none">
                            <li class="p-3"><i class="flex fas fa-money-bill-wave-alt mr-5">&nbsp; List Item 1</i></li>
                            <li class="p-3"><i class="flex far fa-calendar-alt mr-5">&nbsp; List Item 1</i></li>
                            <li class="p-3"><i class="flex fas fa-money-bill-wave-alt mr-5">&nbsp; List Item 1</i></li>
                        </ul>
                    </div> -->

                    <div class="float-right">
                        <button class="text-white h-14 w-52 rounded-full bg-[#2B6EF0] shadow-xl hover:opacity-90">Ikuti Acara Ini</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include_once 'template/footer.php'; ?>
</body>
</html>