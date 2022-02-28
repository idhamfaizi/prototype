
    <footer>
    <!-- 1st footer -->
    <div class="bg-[#272727] dark:bg-[#272727] grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 lg:gap-8 md:gap-12 gap-14 lg:px-20 lg:py-8 py-8 md:px-12 px-4">
        <div class="">
          <div class="grid justify-items-center">
              <img src="assets/logo.png" alt="Image">
          </div>
          <h3 class="uppercase text-xl text-center leading-5 dark:text-white font-semibold text-gray-800 lg:mt-10 mt-8">universitas raharja</h3>
        </div>
    
        <div class="">
          <h3 class="italic text-4xl dark:text-white font-semibold text-gray-800">Menu</h3><br>
          <a href="index.php" class="text-xl hover:text-[#2B9871] hover:underline border-b-green-700 font-normal dark:text-gray-300 text-gray-600 mt-4 lg:w-full md:w-9/12 w-full">Beranda</a><br><br>
          <a href="about2.php" class="text-xl hover:text-[#2B9871] hover:underline font-normal dark:text-gray-300 text-gray-600 mt-4 lg:w-full md:w-9/12 w-full">About</a><br><br>
          <a href="bph.php" class="text-xl hover:text-[#2B9871] hover:underline font-normal dark:text-gray-300 text-gray-600 mt-4 lg:w-full md:w-9/12 w-full">Struktur Organisasi</a><br><br>
          <a href="index.php#section3" class="text-xl hover:text-[#2B9871] hover:underline font-normal dark:text-gray-300 text-gray-600 mt-4 lg:w-full md:w-9/12 w-full">Sharmasi</a><br>
        </div>
    
        <div class="">
          <h3 class="italic text-4xl dark:text-white font-semibold text-gray-800">About Us</h3><br>
          <a href="about2.php#section4" class="text-xl hover:text-[#2B9871] hover:underline font-normal dark:text-gray-300 text-gray-600 mt-4 lg:w-full md:w-9/12 w-full">Visi & Misi</a><br><br>
          <a href="galeri.php" class="text-xl hover:text-[#2B9871] hover:underline font-normal dark:text-gray-300 text-gray-600 mt-4 lg:w-full md:w-9/12 w-full">Galeri</a><br><br>
          <a href="index.html" class="text-xl hover:text-[#2B9871] hover:underline font-normal dark:text-gray-300 text-gray-600 mt-4 lg:w-full md:w-9/12 w-full">Berita</a><br><br>
          <a href="index.html" class="text-xl hover:text-[#2B9871] hover:underline font-normal dark:text-gray-300 text-gray-600 mt-4 lg:w-full md:w-9/12 w-full">Kebijakan & Privasi</a><br>
        </div>
        
        <div class="">
          <h3 class="italic text-4xl dark:text-white font-semibold text-gray-800">Visit Us</h3><br>
          <div class="flex justify-around">
              <a href="index.html" class="text-xl text-[#f9f9f9] hover:text-[#2B9871] transition duration-300"><i class="fab fa-instagram" style="font-size: 2em;"></i></a>
              <a href="index.html" class="text-xl hover:text-[#2B9871] transition duration-300 text-[#f9f9f9]"><i class="fab fa-facebook" target="_blank" style="font-size: 2em;"></i></a>
              <a href="index.html" class="text-xl text-[#f9f9f9] hover:text-[#2B9871] transition duration-300"><i class="fab fa-twitter" target="_blank" style="font-size: 2em;"></i></a>
          </div>
        </div>
    </div><hr>
    <div class="bg-[#272727] p-5">
        <p class="text-white text-center">- Copyright &copy; <span id="year"></span> | <a href="swiper.html" class="hover:text-[#2B9871] hover:underline">Akatsukidev</a> -</p>
        <script>
          const year = new Date();
          document.getElementById("year").innerHTML = year.getFullYear();
        </script>
    </div>
    </footer>
</body>
</html>