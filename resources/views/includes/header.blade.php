<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <!-- Tambahkan Tailwind CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/alpinejs" defer></script>
  <style>
    .preloader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: white;
      z-index: 50;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .preloader.hidden {
      display: none;
    }
  </style>
</head>
<body>

  <!--====== PRELOADER PART START ======-->
  <div class="preloader" id="preloader">
    <div class="loader">
      <div class="ytp-spinner">
        <div class="ytp-spinner-container">
          <div class="ytp-spinner-rotator">
            <div class="ytp-spinner-left">
              <div class="ytp-spinner-circle"></div>
            </div>
            <div class="ytp-spinner-right">
              <div class="ytp-spinner-circle"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--====== PRELOADER PART ENDS ======-->

  <!--====== HEADER PART START ======-->
  <header class="header-area bg-gray-900 text-white">
    <div class="navbar-area">
      <div class="container relative mx-auto px-4 py-5">
        <nav x-data="{ open: false }" class="flex items-center justify-between">
          
          <!-- Toggler Button for Mobile -->
          <button @click="open = !open" class="block navbar-toggler focus:outline-none lg:hidden">
            <div class="space-y-1">
              <span class="block w-6 h-1 bg-white"></span>
              <span class="block w-6 h-1 bg-white"></span>
              <span class="block w-6 h-1 bg-white"></span>
            </div>
          </button>

          <!-- Logo -->
          <a href="/" class="text-lg font-bold">Rumah Sakit CMII</a>

          <!-- Navbar Links -->
          <div :class="{'hidden': !open}" class="lg:flex lg:items-center">
            <ul class="flex flex-col lg:flex-row lg:space-x-8 mt-4 lg:mt-0 lg:space-y-0 space-y-4">
              <li><a href="/" class="text-white hover:text-gray-400">Home</a></li>
              <li><a href="gallery" class="text-white hover:text-gray-400">Gallery</a></li>
              <li><a href="blog" class="text-white hover:text-gray-400">Blog</a></li>
              <li><a href="portfolio" class="text-white hover:text-gray-400">Portfolio</a></li>
              <li><a href="contact" class="text-white hover:text-gray-400">Contact</a></li>
              <li><a href="profile" class="text-white hover:text-gray-400">Profile</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>
  <!--====== HEADER PART ENDS ======-->

  <script>
    // Menyembunyikan preloader setelah halaman dimuat
    window.addEventListener('load', function() {
      document.getElementById('preloader').classList.add('hidden');
    });
  </script>

</body>
</html>
