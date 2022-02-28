<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BPH Komasi</title>
    <link rel="icon" href="assets/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style/selector.css">
    <link rel="stylesheet" href="style/drop.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body class="bg-gradient-to-b from-[#1c69ff] to-[#1bf499]">
    <?php include_once 'template/preload.html'; ?>
    <?php include_once 'template/header2.php'; ?>

    <!-- content -->
    <div id="section0" class="pb-20">

        <div class="grid justify-items-center text-white">
            <h1 class="lg:text-5xl mt-24 font-bold leading-tight text-3xl text-center"><span class="bg-gradient-to-b from-[#1c69ff] to-[#1bf499] bg-clip-text text-transparent font-bold">B</span>PH Komasi</h1>
            <small>
                Periode <span id="ago"></span> - <span id="demo"></span>
                <script>
                    const d = new Date();
                    const y = new Date();
                    document.getElementById("ago").innerHTML = y.getFullYear() - 1;
                    document.getElementById("demo").innerHTML = d.getFullYear();
                </script>
            </small>
        </div>

        <div class="mt-5 mb-5 max-w-2xl mx-auto flex justify-center">
            <button type="button" onclick="coba('test')" class="text-white rounded-full hover:bg-[#2B9871] hover:text-black h-12 flex items-center justify-center uppercase font-semibold transition duration 300 hover:shadow-xl px-8">4 Pilar</button>
            <button type="button" onclick="depart('test2')" class="text-white h rounded-full hover:bg-[#2B9871] hover:text-black h-12 flex items-center justify-center uppercase font-semibold transition duration 300 hover:shadow-xl px-8">Departement</button>
        </div>

        <!-- 4 pilar -->
        <div id="pilar" class="hidden max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 scale-0">
            <div class="mt-6 space-y-12 lg:space-y-0 lg:grid lg:grid-cols-4 lg:gap-x-6">
                <div class="group relative">
                    <div class="relative border-4 w-full h-full bg-transparent rounded-full overflow-hidden group-hover:opacity-75 transition duration-300 sm:aspect-w-2 sm:aspect-h-1 sm:h-72 lg:aspect-w-1 lg:aspect-h-1 drop-shadow-xl">
                    <img src="assets/julian.png" alt="lorem" class="w-full h-full object-center object-cover">
                    </div>
                    <h3 class="uppercase text-center font-bold mt-6 text-sm text-black">kadek naufal rifqi</h3>
                    <p class="text-center text-[#8DF8D1] font-semibold mb-7">Ketua Umum</p>
                </div>
      
                <div class="group relative">
                    <div class="relative border-4 w-full h-full bg-transparent rounded-full overflow-hidden group-hover:opacity-75 transition duration-300 sm:aspect-w-2 sm:aspect-h-1 sm:h-72 lg:aspect-w-1 lg:aspect-h-1 drop-shadow-xl">
                    <img src="assets/julian.png" alt="lorem" class="w-full h-full object-center object-cover">
                    </div>
                    <h3 class="uppercase text-center font-bold mt-6 text-sm text-black">kadek naufal rifqi</h3>
                    <p class="text-center text-[#8DF8D1] font-semibold mb-7">Ketua Umum</p>
                </div>

                <div class="group relative">
                    <div class="relative border-4 w-full h-full bg-transparent rounded-full overflow-hidden group-hover:opacity-75 transition duration-300 sm:aspect-w-2 sm:aspect-h-1 sm:h-72 lg:aspect-w-1 lg:aspect-h-1 drop-shadow-xl">
                    <img src="assets/julian.png" alt="lorem" class="w-full h-full object-center object-cover">
                    </div>
                    <h3 class="uppercase text-center font-bold mt-6 text-sm text-black">kadek naufal rifqi</h3>
                    <p class="text-center text-[#8DF8D1] font-semibold mb-7">Ketua Umum</p>
                </div>

                <div class="group relative">
                    <div class="relative border-4 w-full h-full bg-transparent rounded-full overflow-hidden group-hover:opacity-75 transition duration-300 sm:aspect-w-2 sm:aspect-h-1 sm:h-72 lg:aspect-w-1 lg:aspect-h-1 drop-shadow-xl">
                    <img src="assets/julian.png" alt="lorem" class="w-full h-full object-center object-cover">
                    </div>
                    <h3 class="uppercase text-center font-bold mt-6 text-sm text-black">kadek naufal rifqi</h3>
                    <p class="text-center text-[#8DF8D1] font-semibold mb-7">Ketua Umum</p>
                </div>
            </div>
        </div>

        <!-- departement -->
        <div id="depart">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="mt-6 space-y-12 lg:space-y-0 lg:grid lg:grid-cols-4 lg:gap-x-6">
                    <div class="group relative">
                        <div class="relative border-4 w-full h-full bg-transparent rounded-full overflow-hidden group-hover:opacity-75 transition duration-300 sm:aspect-w-2 sm:aspect-h-1 sm:h-72 lg:aspect-w-1 lg:aspect-h-1 drop-shadow-xl">
                        <img src="assets/idham.jpg" alt="lorem" class="w-full h-full object-center object-cover">
                        </div>
                        <h3 class="uppercase text-center font-bold mt-6 text-sm text-black">idham noor faizi</h3>
                        <p class="text-center text-[#8DF8D1] font-semibold">Koor Departemen 1</p>
                    </div>
        
                    <div class="group relative">
                        <div class="relative border-4 w-full h-full bg-transparent rounded-full overflow-hidden group-hover:opacity-75 transition duration-300 sm:aspect-w-2 sm:aspect-h-1 sm:h-72 lg:aspect-w-1 lg:aspect-h-1 drop-shadow-xl">
                        <img src="assets/julian.png" alt="lorem" class="w-full h-full object-center object-cover">
                        </div>
                        <h3 class="uppercase text-center font-bold mt-6 text-sm text-black">kadek naufal rifqi</h3>
                        <p class="text-center text-[#8DF8D1] font-semibold">Koor Departemen 2</p>
                    </div>

                    <div class="group relative">
                        <div class="relative border-4 w-full h-full bg-transparent rounded-full overflow-hidden group-hover:opacity-75 transition duration-300 sm:aspect-w-2 sm:aspect-h-1 sm:h-72 lg:aspect-w-1 lg:aspect-h-1 drop-shadow-xl">
                        <img src="assets/julian.png" alt="lorem" class="w-full h-full object-center object-cover">
                        </div>
                        <h3 class="uppercase text-center font-bold mt-6 text-sm text-black">kadek naufal rifqi</h3>
                        <p class="text-center text-[#8DF8D1] font-semibold">Koor Departemen 3</p>
                    </div>

                    <div class="group relative">
                        <div class="relative border-4 w-full h-full bg-transparent rounded-full overflow-hidden group-hover:opacity-75 transition duration-300 sm:aspect-w-2 sm:aspect-h-1 sm:h-72 lg:aspect-w-1 lg:aspect-h-1 drop-shadow-xl">
                        <img src="assets/julian.png" alt="lorem" class="w-full h-full object-center object-cover">
                        </div>
                        <h3 class="uppercase text-center font-bold mt-6 text-sm text-black">kadek naufal rifqi</h3>
                        <p class="text-center text-[#8DF8D1] font-semibold">Koor Departemen 4</p>
                    </div>
                </div>
            </div>
            
            <hr class="grid mx-auto my-8 w-10/12">
            
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="space-y-12 lg:space-y-0 lg:grid lg:grid-cols-4 lg:gap-x-6">
                    <div class="group relative">
                        <div class="relative border-4 w-full h-full bg-transparent rounded-full overflow-hidden group-hover:opacity-75 transition duration-300 sm:aspect-w-2 sm:aspect-h-1 sm:h-72 lg:aspect-w-1 lg:aspect-h-1 drop-shadow-xl">
                        <img src="assets/julian.png" alt="lorem" class="w-full h-full object-center object-cover">
                        </div>
                        <h3 class="uppercase text-center font-bold mt-6 text-sm text-black">kadek naufal rifqi</h3>
                        <p class="text-center text-[#8DF8D1] font-semibold">Koor Departemen 1</p>
                    </div>
        
                    <div class="group relative">
                        <div class="relative border-4 w-full h-full bg-transparent rounded-full overflow-hidden group-hover:opacity-75 transition duration-300 sm:aspect-w-2 sm:aspect-h-1 sm:h-72 lg:aspect-w-1 lg:aspect-h-1 drop-shadow-xl">
                        <img src="assets/julian.png" alt="lorem" class="w-full h-full object-center object-cover">
                        </div>
                        <h3 class="uppercase text-center font-bold mt-6 text-sm text-black">kadek naufal rifqi</h3>
                        <p class="text-center text-[#8DF8D1] font-semibold">Koor Departemen 2</p>
                    </div>

                    <div class="group relative">
                        <div class="relative border-4 w-full h-full bg-transparent rounded-full overflow-hidden group-hover:opacity-75 transition duration-300 sm:aspect-w-2 sm:aspect-h-1 sm:h-72 lg:aspect-w-1 lg:aspect-h-1 drop-shadow-xl">
                        <img src="assets/julian.png" alt="lorem" class="w-full h-full object-center object-cover">
                        </div>
                        <h3 class="uppercase text-center font-bold mt-6 text-sm text-black">kadek naufal rifqi</h3>
                        <p class="text-center text-[#8DF8D1] font-semibold">Koor Departemen 3</p>
                    </div>

                    <div class="group relative">
                        <div class="relative border-4 w-full h-full bg-transparent rounded-full overflow-hidden group-hover:opacity-75 transition duration-300 sm:aspect-w-2 sm:aspect-h-1 sm:h-72 lg:aspect-w-1 lg:aspect-h-1 drop-shadow-xl">
                        <img src="assets/julian.png" alt="lorem" class="w-full h-full object-center object-cover">
                        </div>
                        <h3 class="uppercase text-center font-bold mt-6 text-sm text-black">kadek naufal rifqi</h3>
                        <p class="text-center text-[#8DF8D1] font-semibold">Koor Departemen 4</p>
                    </div>
                </div>
            </div>

            <hr class="grid mx-auto my-8 w-10/12">

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="space-y-12 lg:space-y-0 lg:grid lg:grid-cols-4 lg:gap-x-6">
                    <div class="group relative">
                        <div class="relative border-4 w-full h-full bg-transparent rounded-full overflow-hidden group-hover:opacity-75 transition duration-300 sm:aspect-w-2 sm:aspect-h-1 sm:h-72 lg:aspect-w-1 lg:aspect-h-1 drop-shadow-xl">
                        <img src="assets/julian.png" alt="lorem" class="w-full h-full object-center object-cover">
                        </div>
                        <h3 class="uppercase text-center font-bold mt-6 text-sm text-black">kadek naufal rifqi</h3>
                        <p class="text-center text-[#1c69ff] font-semibold">Koor Departemen 1</p>
                    </div>
        
                    <div class="group relative">
                        <div class="relative border-4 w-full h-full bg-transparent rounded-full overflow-hidden group-hover:opacity-75 transition duration-300 sm:aspect-w-2 sm:aspect-h-1 sm:h-72 lg:aspect-w-1 lg:aspect-h-1 drop-shadow-xl">
                        <img src="assets/julian.png" alt="lorem" class="w-full h-full object-center object-cover">
                        </div>
                        <h3 class="uppercase text-center font-bold mt-6 text-sm text-black">kadek naufal rifqi</h3>
                        <p class="text-center text-[#1c69ff] font-semibold">Koor Departemen 2</p>
                    </div>

                    <div class="group relative">
                        <div class="relative border-4 w-full h-full bg-transparent rounded-full overflow-hidden group-hover:opacity-75 transition duration-300 sm:aspect-w-2 sm:aspect-h-1 sm:h-72 lg:aspect-w-1 lg:aspect-h-1 drop-shadow-xl">
                        <img src="assets/julian.png" alt="lorem" class="w-full h-full object-center object-cover">
                        </div>
                        <h3 class="uppercase text-center font-bold mt-6 text-sm text-black">kadek naufal rifqi</h3>
                        <p class="text-center text-[#1c69ff] font-semibold">Koor Departemen 3</p>
                    </div>

                    <div class="group relative">
                        <div class="relative border-4 w-full h-full bg-transparent rounded-full overflow-hidden group-hover:opacity-75 transition duration-300 sm:aspect-w-2 sm:aspect-h-1 sm:h-72 lg:aspect-w-1 lg:aspect-h-1 drop-shadow-xl">
                        <img src="assets/julian.png" alt="lorem" class="w-full h-full object-center object-cover">
                        </div>
                        <h3 class="uppercase text-center font-bold mt-6 text-sm text-black">kadek naufal rifqi</h3>
                        <p class="text-center text-[#1c69ff] font-semibold">Koor Departemen 4</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include_once 'template/footer.php'; ?>
</body>
<script>

    var test = document.getElementById("pilar");
    var test2 = document.getElementById("depart");
    function coba(){
        test.classList.remove('sclae-0');
        test.style.display = "block";
        test.classList.add('scale-100');
        test2.style.display = "none";
    }

    function depart(){
        test2.style.display = "block";
        test.style.display = "none";
    }
</script>
</html>