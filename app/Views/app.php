<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.6.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/lightbox/css/lightbox.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
    <div class="container mx-auto relative">
        <?= $this->renderSection('content') ?>
        <form action="">
            <button class="popup fixed right-3 bottom-8 lg:right-10 lg:bottom-10 cursor-pointer">
                <img class="h-14" src="assets/svg/wa-colored.svg" alt="">
            </button>
        </form>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="assets/lightbox/js/lightbox-plus-jquery.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true
        });
    </script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
          const waBtn = document.querySelector('.popup');
  
          waBtn.addEventListener('click', function(e) {
              e.preventDefault();
              const message =
                  "Saya ingin menanyakan apakah saya bisa melakukan pesanan untuk jasa percetakan di simpleclothindustries?. Saya tertarik dan ingin mendapatkan informasi lebih lanjut. Terima kasih!";
              window.open("https://wa.me/6285174446580?text=" + encodeURIComponent(message), '_blank');
          });
      });
  </script>
  
</body>

</html>
