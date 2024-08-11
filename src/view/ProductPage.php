<?php
include('../db_view/Connection.php');

$query = mysqli_query($connection, "SELECT * FROM tabel_buku");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Product | Web Perpustakaan</title>
     <?php
     include('../components/header.php');
     ?>
</head>

<body class="overflow-x-hidden">
     <header>
          <?php
          include('../components/NavbarView.php')
          ?>
     </header>
     <!-- Star Content -->
     <main>
          <!-- Start Product -->
          <section class="flex flex-col items-center justify-center w-full h-full m-auto">
               <div class="flex flex-col items-center justify-center h-32 gap-3">
                    <h1 class="mt-10 text-4xl font-bold text-black">Product <span
                              class="px-2 text-white bg-black rounded-full">Wind
                              Library</span>
                    </h1>
               </div>

               <!-- Search -->
               <form action="#" class="flex flex-row items-center justify-center w-full gap-2">
                    <div class="flex flex-row gap-4 px-4 py-2 border-2 border-black rounded-xl">
                         <i class="ri-search-line"></i>
                         <input type="text" placeholder="Type to search.." class="outline-none w-60">
                    </div>
                    <div class="flex flex-row items-center justify-center">
                         <button class="px-3 py-1 font-bold text-white bg-black rounded-xl" type="button"
                              onclick="categoriesClick()">Categories <i class="ri-arrow-down-s-line"></i></button>


                         <ul class="hidden absolute flex-col gap-2 px-3 py-1 mt-2 font-bold text-black bg-white border-2 border-black rounded-xl bottom-72"
                              id="show-categories">
                              <li class="flex gap-2"><input type="checkbox">Komik</li>
                              <li class="flex gap-2"><input type="checkbox">Kamus</li>
                              <li class="flex gap-2"><input type="checkbox">Novel</li>
                              <li class="flex gap-2"><input type="checkbox">Majalah</li>
                              <li class="flex gap-2"><input type="checkbox">Digital</li>
                              <li class="flex gap-2"><input type="checkbox">Manga</li>
                         </ul>

                         <script>
                         const showCategories = document.getElementById('show-categories');

                         function categoriesClick() {
                              if (showCategories.classList.contains('hidden')) {
                                   showCategories.classList.add('flex');
                                   showCategories.classList.remove('hidden');
                              } else {
                                   showCategories.classList.add('hidden');
                                   showCategories.classList.remove('flex');
                              }
                         };
                         </script>
                    </div>
               </form>
               <!-- End Search -->
          </section>
          <!-- End Product -->

          <!-- Deksripsi -->
          <section class="flex flex-row flex-wrap items-start justify-center h-full gap-3 mt-20 container-sm">
               <?php foreach ($result as $results) {
               ?>
               <div class="px-5 py-2 text-center text-black border-2 border-black w-72 h-36 rounded-xl">
                    <h1 class="text-xl font-bold"><?php echo $results['nama_buku']
                                                       ?></h1>
                    <p><?php echo $results['tanggal_rilis'] ?></p>
                    <button
                         class="px-3 py-1 text-sm font-bold text-white transition-all ease-in-out bg-black rounded-full hover:translate-x-2">Learn
                         More
                         <i class="ri-arrow-right-s-line"></i></button>
               </div>
               <?php  }
               ?>
          </section>
          <!-- End Deskripsi -->

          <!-- Footer -->
          <?php
          include('../components/Footer.php');
          ?>
          <!-- End Footer -->
     </main>
     <!-- End Content -->
</body>

</html>