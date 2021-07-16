<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Not found</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" />
      <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer ></script> 
    </head>
    <body>
       <section class="h-full w-full border-box sm:pt-20 pt-16 sm:pb-16 pb-8 lg:px-24 md:px-16 sm:px-8 px-8 transition-all duration-500 linear bg-white">

      <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        .empty-2-1 .title-text{
          color: #7D5A50;
        }

        img {
          width: 30%
        }

        .empty-2-1 .caption-text{
          color: #7D5A50;
        }
        .empty-2-1 .btn-back{
          background-color: #7D5A50;
        }
        @media(min-width: 425px){
          .empty-2-1 .title-text{
            font-size: 40px;
          }
        }
      </style>

      <div class="empty-2-1" style="font-family: 'Poppins', sans-serif;">
        <div class="container mx-auto flex items-center justify-center flex-col">
          <img class="img" src="img/404.png" alt="">                    
          <div class="text-center w-full">
            <h1 class="title-text text-3xl mb-5 font-semibold">
              Opss! Halaman Sedang Diperbaiki
            </h1>
            <p class="caption-text mb-16 tracking-wide leading-7">
              Halaman yang kamu cari sedang dalam perbaikan. <br class="sm:block hidden"> Lebih baik kamu balik ke halaman sebelumnya aja.
            </p>
            <div class="flex justify-center">
              <a href="Dashboard.php">
                <button class="btn-back inline-flex font-semibold text-white text-lg leading-7 py-4 px-6 rounded-xl focus:outline-none hover:shadow-lg">
                  Kembali ke Zen Academy
                  </button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>    
    </body>
  </html>