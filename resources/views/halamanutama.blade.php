<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drive and Go Store</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @vite('resources/css/app.css')
    
</head>


<body>
<header class="bg-red-800 text-white">
    <div class="flex items-center justify-between bg-red-800 text-white px-6 py-3">
  
        <!-- Kiri -->
        <div class="flex items-center space-x-2">
            <img src="/logo/LogoHeader.png" class="h-21 w-31" />

        </div>

        <!-- tengah -->
        <div class="flex bg-white shadow-lg rounded-xl overflow-hidden flex-grow mx-6">
            <select class="text-black px-3 py-3 outline-none border-r border-gray-300">
                <option>Kategori</option>
                <option>baru</option>
                <option>bekas</option>
                <option>sport</option>
            </select>
            <div class="relative flex-grow">
                <input type="text" placeholder="Cari mobil..." 
                       class="bg-white px-5 py-3 w-full transition-all outline-none" />
                      <svg
                          class='size-6 absolute top-3 right-3 text-gray-500'
                          stroke='currentColor'
                          stroke-width='1.5'
                          viewBox='0 0 24 24'
                          fill='none'
                          xmlns='http://www.w3.org/2000/svg'>
                          <path
                              d='m21 21-4.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z'
                              stroke-linecap='round'
                              stroke-linejoin='round'>
                          </path>
                      </svg>
            </div>
        </div>

        <!-- kanan -->
        <div class="relative flex items-center bg-gray-200 h-12 px-3 rounded ml-auto">
                <svg 
                    xmlns='http://www.w3.org/2000/svg'
                    width='2em'
                    height='2em'
                    fill='none'
                    viewBox='0 0 24 24'
                    stroke='black'
                    stroke-width='1.5'
                    class='icon'
                    stroke-linejoin='round'
                    stroke-linecap='round'>
                    <circle r="1" cy="21" cx="9"></circle>
                    <circle r="1" cy="21" cx="20"></circle>
                    <path 
                        d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                </svg>
        </div>
            <div class="relative flex items-center bg-gray-200 h-12 px-3 rounded ml-4">
                <svg xmlns="http://www.w3.org/2000/svg" 
                     fill="none" viewBox="0 0 24 24" 
                     stroke="currentColor" stroke-width="1.5" 
                     class="w-6 h-6 text-black">
                  <path stroke-linecap="round" stroke-linejoin="round" 
                        d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 
                           1.79-4 4 1.79 4 4 4zm0 2c-3.33 0-6 2.67-6 
                           6h12c0-3.33-2.67-6-6-6z"/>
                </svg>
            </div>
    </div>
</header>

<section>
    <div class="relative bg-white py-10 px-6 flex items-center justify-center  w-full">
        <img src='image/heroBanner.jpg' alt='promo Hero' class='w-full max-w-screen-lg mx-auto rounded-lg shadow-lg' />
    </div>
    <div class='grid grid-cols-4 gap-6 text-center mt-12'>
        <div>
            <img src="logo/label.png" alt="Discount Icon" class="w-12 h-12 mx-auto mb-2">
            <h3 class='font-bold'>Discount</h3>
            <p  class='text-gray-600'>Every week new sales</p>
        </div>
        <div>
            <img src="logo/truck.png" alt="Discount Icon" class="w-12 h-12 mx-auto mb-2">
            <h3 class='font-bold'>Free Delivery</h3>
            <p class='text-gray-600'>100% Free for all orders</p>
        </div>
        <div>
            <img src="logo/24h.png" alt="Discount Icon" class="w-12 h-12 mx-auto mb-2">
            <h3 class='font-bold'>Support 24/7</h3>
            <p class='text-gray-600'>Contact us 24 hours a day</p>
        </div>
        <div>
            <img src="logo/money.png" alt="Discount Icon" class="w-12 h-12 mx-auto mb-2">
            <h3 class='font-bold'>Secure Payment</h3>
            <p class='text-gray-600'>100% Secure Payment metode</p>
        </div>
</section>
<section class="bg-gray-100 py-12 px-7">
    <div class="swiper mySwiper w-full h-28">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="image/Toyota_Logo.png" alt="Toyota logo, red oval with stylized T lettermark, automotive brand emblem" class="max-h-12 max-w-20"></div>
            <div class="swiper-slide"><img src="image/Honda.png" alt="Honda logo, silver H symbol within geometric frame, Japanese automotive manufacturer" class="max-h-12 max-w-20"></div>
            <div class="swiper-slide"><img src="image/suzuki.png" alt="Suzuki logo, blue S character in rounded square, automotive brand identity" class="max-h-12 max-w-20"></div>
            <div class="swiper-slide"><img src="image/hyundai.png" alt="Hyundai logo, silver slanted H emblem, South Korean car manufacturer" class="max-h-12 max-w-20"></div>
            <div class="swiper-slide"><img src="image/merci.png" alt="Mercedes-Benz logo, silver three-pointed star in circle, luxury automotive brand" class="max-h-12 max-w-20"></div>
            <div class="swiper-slide"><img src="image/BMW.svg" alt="BMW logo, blue and white circular emblem with interlocking rings, German luxury car maker" class="max-h-12 max-w-20"></div>
            <div class="swiper-slide"><img src="image/Mazda_logo_with_emblem.svg" alt="Mazda logo, stylized phoenix or bird symbol in red and silver, Japanese automaker mark" class="max-h-12 max-w-20"></div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var swiper = new Swiper('.mySwiper', {
        slidesPerView: 3,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 100,
            disableOnInteraction: false,
        },
        speed: 500,
    });
});
</script>
</body>
</html>