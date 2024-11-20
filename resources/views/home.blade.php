<!-- @format -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <title>Our Website</title>
  <link rel="website icon" type="png" href="img/logo.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="css/Index.css">

<body>
  <!--Header container-->
  <x-header></x-header>

  <!--article-->
  <article class="slideshow-container ">
    <div class="mySlides fade">
      <img src="img/audi.jpg">
    </div>

    <div class="mySlides fade">
      <img src="img/corvete.jpg">
    </div>

    <div class="mySlides fade">
      <img src="img/beetle.jpg">
    </div>

  </article>


  <!--section-->
  <section class="relative justify-center p-2 z-10 ">
    <div class="-mt-20 kolom static p-3 border-gray-200 drop-shadow-2xl rounded-md font-semibold md:mx-10 md:p-6" style="background-color: #057791ee;">
      <h4 class="mb-4 text-slate-100">FIND CAR</h4>

      <form class="mx-5">
        <div class="flex ">
          <label for="location-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your Email</label>
          <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-l-lg focus:ring-blue-500 focus:border-blue-500 block w-40 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>Location</option>
            <option value="Jatim">Jawa Timur</option>
            <option value="Jabar">Jawa Barat</option>
            <option value="Jateng">Jawa Tengah</option>
            <option value="Jabodetabek">Jabodetabek</option>
          </select>

          <div class="relative w-full">
            <input type="search" id="location-search" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="Cari" required />
            <button type="submit" class="absolute top-0 end-0 h-full p-2.5 text-sm font-medium text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
              <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
              </svg>
              <span class="sr-only">Search</span>
            </button>
          </div>
        </div>
      </form>

    </div>
  </section>

  <!--Main-->
  <h2 class="mt-10 pt-4 mb-10 text-center text-2xl font-semibold  " style="color: #e1a823; text-shadow: 0 2px 2px rgba(92, 92, 92, 0.779);">SPECIAL PRICES </h2>
  <main class="container ">
    <div class="swiper mySwiper2 swiper-price">
      <div class="swiper-wrapper mb-5">

        <div class="swiper-slide border-t-5 bg-transparent rounded-lg p-2 md:p-6 ">
          <a href="coba.html">
            <div class="justify-center shadow-lg border-2 border-state-500 border-t-4 bg-state-100 rounded-lg w-full backdrop-blur-xl box">
              <img class=" rounded-t-lg mb-5" style="height: 18rem;  " src="img/corvete.jpg" alt="">
              <div class="text-center mb-6">
                <h5 class="text-xl font-semibold tracking-wider drop-shadow-xl text-zinc-700">CORVETTE Z06 | CHEVROLET</h4>
                  <h4 class=" text-l font-semibold tracking-widest drop-shadow-xl text-zinc-700">2020</h4>
              </div>
              <div class="text-left mb-6">
                <h4 class="ml-5 text-xl font-bold tracking-widest drop-shadow-xl text-zinc-700">IDR 131.000.000 </h4>
                <span class="ml-3 align-items-start bg-blue-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Cicilan Rp. 1,3jt/bulan</span>
              </div>
              <div class="text-left text-sm ml-5 text-zinc-700 tracking-wide font-semibold  ">
                <h4>
                  <img class="float-left mr-5" src="img/transmission.svg" alt="" style=" height: 1.2rem; width: 1.2rem; object-fit: fill; ">
                  Manual
                </h4>
                <h4 class="mt-2">
                  <img class="float-left mr-5" src="img/fuel.svg" alt="" style="height: 1.2rem; width: 1.2rem; object-fit: fill;">
                  1.5E Bensin-MT
                </h4>
                <h4 class="mt-2">
                  <img class="float-left mr-5" src="img/location.svg" alt="" style="height: 1.2rem; width: 1.2rem; object-fit: fill;">
                  Malang, Jawa Timur
                </h4>
                <h4 class="mt-2 mb-5">
                  <img class="float-left mr-5" src="img/distance.svg" alt="" style="height: 1.2rem; width: 1.2rem; object-fit: fill;">
                  175,000-200,000 Km
                </h4>

              </div>
            </div>

          </a>
        </div>

        <div class="swiper-slide border-t-5  bg-transparent rounded-lg p-2 md:p-6 ">
          <a href="">
            <div class=" justify-center shadow-lg border-2 border-state-500 border-t-4 bg-state-100 rounded-lg w-full backdrop-blur-xl box">
              <img class=" rounded-t-lg mb-5" style="height: 18rem;  " src="img/audi.jpg" alt="">
              <div class="text-center mb-6">
                <h5 class="text-xl font-semibold tracking-wider drop-shadow-xl text-zinc-700">R8 | AUDI</h4>
                  <h4 class=" text-l font-semibold tracking-widest drop-shadow-xl text-zinc-700">2020</h4>
              </div>
              <div class="text-left mb-6">
                <h4 class="ml-5 text-xl font-bold tracking-widest drop-shadow-xl text-zinc-700">IDR 131.000.000 </h4>
                <span class="ml-3 align-items-start bg-blue-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Cicilan Rp. 1,3jt/bulan</span>
              </div>
              <div class="text-left text-sm ml-5 text-zinc-700 tracking-wide font-semibold  ">
                <h4>
                  <img class="float-left mr-5" src="img/transmission.svg" alt="" style="height: 1.2rem; width: 1.2rem; object-fit: fill;">
                  Automatic
                </h4>
                <h4 class="mt-2">
                  <img class="float-left mr-5" src="img/fuel.svg" alt="" style="height: 1.2rem; width: 1.2rem; object-fit: fill;">
                  1.5E Bensin-AT
                </h4>
                <h4 class="mt-2">
                  <img class="float-left mr-5" src="img/location.svg" alt="" style="height: 1.2rem; width: 1.2rem; object-fit: fill;">
                  Surabaya, Jawa Timur
                </h4>
                <h4 class="mt-2 mb-5">
                  <img class="float-left mr-5" src="img/distance.svg" alt="" style="height: 1.2rem; width: 1.2rem; object-fit: fill;">
                  125,000-145,000 Km
                </h4>

              </div>
            </div>
          </a>
        </div>

        <div class="swiper-slide border-t-5  bg-transparent rounded-lg p-2 md:p-6 ">
          <a href="">
            <div class=" justify-center shadow-lg border-2 border-state-500 border-t-4 bg-state-100 rounded-lg w-full backdrop-blur-xl box">
              <img class=" rounded-t-lg mb-5" style="height: 18rem;  " src="img/beetle.jpg" alt="">
              <div class="text-center mb-6">
                <h5 class="text-xl font-semibold tracking-wider drop-shadow-xl text-zinc-700">ALPINE | RENAULT</h4>
                  <h4 class=" text-l font-semibold tracking-widest drop-shadow-xl text-zinc-700">1996</h4>
              </div>
              <div class="text-left mb-6">
                <h4 class="ml-5 text-xl font-bold tracking-widest drop-shadow-xl text-zinc-700">IDR 131.000.000 </h4>
                <span class="ml-3 align-items-start bg-blue-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Cicilan Rp. 1,3jt/bulan</span>
              </div>
              <div class="text-left text-sm ml-5 text-zinc-700 tracking-wide font-semibold  ">
                <h4>
                  <img class="float-left mr-5" src="img/transmission.svg" alt="" style="height: 1.2rem; width: 1.2rem; object-fit: fill;">
                  Automatic
                </h4>
                <h4 class="mt-2">
                  <img class="float-left mr-5" src="img/fuel.svg" alt="" style="height: 1.2rem; width: 1.2rem; object-fit: fill;">
                  1.5E Bensin-AT
                </h4>
                <h4 class="mt-2">
                  <img class="float-left mr-5" src="img/location.svg" alt="" style="height: 1.2rem; width: 1.2rem; object-fit: fill;">
                  Surabaya, Jawa Timur
                </h4>
                <h4 class="mt-2 mb-5">
                  <img class="float-left mr-5" src="img/distance.svg" alt="" style="height: 1.2rem; width: 1.2rem; object-fit: fill;">
                  125,000-145,000 Km
                </h4>

              </div>
            </div>
          </a>
        </div>

        <div class="swiper-slide border-t-5  bg-transparent rounded-lg p-2 md:p-6 ">
          <a href="">
            <div class=" justify-center shadow-lg border-2 border-state-500 border-t-4 bg-state-100 rounded-lg w-full backdrop-blur-xl box">
              <img class="rounded-t-lg mb-5" style="height: 18rem;  " src="img/supra (1).jpg" alt="">
              <div class="text-center mb-6">
                <h5 class="text-xl font-semibold tracking-wider drop-shadow-xl text-zinc-700">SUPRA | TOYOTA</h4>
                  <h4 class=" text-l font-semibold tracking-widest drop-shadow-xl text-zinc-700">2018</h4>
              </div>
              <div class="text-left mb-6">
                <h4 class="ml-5 text-xl font-bold tracking-widest drop-shadow-xl text-zinc-700">IDR 131.000.000 </h4>
                <span class="ml-3 align-items-start bg-blue-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Cicilan Rp. 1,3jt/bulan</span>
              </div>
              <div class="text-left text-sm ml-5 text-zinc-700 tracking-wide font-semibold  ">
                <h4>
                  <img class="float-left mr-5" src="img/transmission.svg" alt="" style="height: 1.2rem; width: 1.2rem; object-fit: fill;">
                  Automatic
                </h4>
                <h4 class="mt-2">
                  <img class="float-left mr-5" src="img/fuel.svg" alt="" style="height: 1.2rem; width: 1.2rem; object-fit: fill;">
                  1.5E Bensin-AT
                </h4>
                <h4 class="mt-2">
                  <img class="float-left mr-5" src="img/location.svg" alt="" style="height: 1.2rem; width: 1.2rem; object-fit: fill;">
                  Surabaya, Jawa Timur
                </h4>
                <h4 class="mt-2 mb-5">
                  <img class="float-left mr-5" src="img/distance.svg" alt="" style="height: 1.2rem; width: 1.2rem; object-fit: fill;">
                  125,000-145,000 Km
                </h4>

              </div>
            </div>

          </a>
        </div>

        <div class="swiper-slide border-t-5  bg-transparent rounded-lg p-2 md:p-6 ">
          <a href="">
            <div class=" justify-center shadow-lg border-2 border-state-500 border-t-4 bg-state-100 rounded-lg w-full backdrop-blur-xl box">
              <img class=" rounded-t-lg mb-5" style="height: 18rem;  " src="img/merci.jpg" alt="">
              <div class="text-center mb-6">
                <h5 class="text-xl font-semibold tracking-wider drop-shadow-xl text-zinc-700">AMG | MERCEDES BENZ</h4>
                  <h4 class=" text-l font-semibold tracking-widest drop-shadow-xl text-zinc-700">2020</h4>
              </div>
              <div class="text-left mb-6">
                <h4 class="ml-5 text-xl font-bold tracking-widest drop-shadow-xl text-zinc-700">IDR 131.000.000 </h4>
                <span class="ml-3 align-items-start bg-blue-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Cicilan Rp. 1,3jt/bulan</span>
              </div>
              <div class="text-left text-sm ml-5 text-zinc-700 tracking-wide font-semibold  ">
                <h4>
                  <img class="float-left mr-5" src="img/transmission.svg" alt="" style="height: 1.2rem; width: 1.2rem; object-fit: fill;">
                  Automatic
                </h4>
                <h4 class="mt-2">
                  <img class="float-left mr-5" src="img/fuel.svg" alt="" style="height: 1.2rem; width: 1.2rem; object-fit: fill;">
                  1.5E Bensin-AT
                </h4>
                <h4 class="mt-2">
                  <img class="float-left mr-5" src="img/location.svg" alt="" style="height: 1.2rem; width: 1.2rem; object-fit: fill;">
                  Surabaya, Jawa Timur
                </h4>
                <h4 class="mt-2 mb-5">
                  <img class="float-left mr-5" src="img/distance.svg" alt="" style="height: 1.2rem; width: 1.2rem; object-fit: fill;">
                  125,000-145,000 Km
                </h4>

              </div>
            </div>
          </a>
        </div>

      </div>

    </div>

    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

  </main>

  <!--Article-->
  <article class="container px-2 pt-1 pb-2 md:px-10">
    <div class="rounded-lg shadow-lg border-2 border-state-500 bg-slate-100">
      <h2 class="p-4 mb-10 text-center text-2xl font-semibold " style="color: #057791; text-shadow: 0 2px 2px rgba(92, 92, 92, 0.779);">KEUNTUNGAN </h2>
      <div class="text-center gap-8 columns-1 md:columns-3">
        <div class="break-inside avoid mb-8">
          <img class="m-auto h-48 w-48 ikon " src="img/premium-icon.svg" alt="">
          <h4 class="mt-8 text-xl text-zinc-900 font-semibold"> Harga Terjangkau dan Bergaransi </h4>
          <h4 class="mt-4 mx-5 text-md text-zinc-700 font-semibold md:mx-5"> Garansi mesin & transmisi hingga 1 tahun, serta jaminan 7 hari uang kembali </h4>
        </div>
        <div class="break-inside avoid mb-8">
          <img class="m-auto h-48 w-48 ikon" src="img/home-map-location-icon.svg" alt="">
          <h4 class="mt-8 text-xl text-zinc-900 font-semibold"> Test Drive dari rumah </h4>
          <h4 class="mt-4 mx-5 text-md text-zinc-700 font-semibold md:mx-5"> Nikmati kenyamanan test drive dari rumah </h4>
        </div>
        <div class="break-inside avoid mb-8">
          <img class="m-auto h-48 w-48 ikon" src="img/configuration-icon.svg" alt="">
          <h4 class="mt-8 text-xl text-zinc-900 font-semibold"> Gratis Biaya Jasa Perawatan </h4>
          <h4 class="mt-4 mx-5 text-md text-zinc-700 font-semibold md:mx-5"> Gratis biaya jasa perawatan hingga 30.000 KM/18 bulan</h4>
        </div>
      </div>
      <h4 class="text-center mx-4 text-zinc-900 text-xl py-5 ">Kondisi mobil sudah diinspeksi oleh tim ahli*</h4>
    </div>

  </article>

  <!--Testimonials-->

  <!--Info-->




  <!--Footer container-->
  <footer class="bg-gray-100">
    <div class="mx-auto max-w-5xl px-4 py-16 sm:px-6 lg:px-8">
      <div class="flex justify-center text-teal-600">
        <img src="" alt="">
      </div>

      <p class="mx-auto mt-6 max-w-md text-center leading-relaxed text-gray-500">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt consequuntur amet culpa cum
        itaque neque.
      </p>

      <ul class="mt-12 flex flex-wrap justify-center gap-6 md:gap-8 lg:gap-12">
        <li>
          <a class="text-gray-700 transition hover:text-gray-700/75" href="#"> About </a>
        </li>

        <li>
          <a class="text-gray-700 transition hover:text-gray-700/75" href="#"> Careers </a>
        </li>

        <li>
          <a class="text-gray-700 transition hover:text-gray-700/75" href="#"> History </a>
        </li>

        <li>
          <a class="text-gray-700 transition hover:text-gray-700/75" href="#"> Services </a>
        </li>

        <li>
          <a class="text-gray-700 transition hover:text-gray-700/75" href="#"> Projects </a>
        </li>

        <li>
          <a class="text-gray-700 transition hover:text-gray-700/75" href="#"> Blog </a>
        </li>
      </ul>

      <ul class="mt-12 flex justify-center gap-6 md:gap-8">
        <li>
          <a href="#" rel="noreferrer" target="_blank" class="text-blue-700 transition hover:text-gray-700/75">
            <span class="sr-only">Facebook</span>
            <i class="bi bi-facebook"></i>
          </a>
        </li>

        <li>
          <a
            href="#"
            rel="noreferrer"
            target="_blank"
            class="text-gray-700 transition hover:text-gray-700/75">
            <span class="sr-only">Instagram</span>
            <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path
                fill-rule="evenodd"
                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                clip-rule="evenodd" />
            </svg>
          </a>
        </li>

        <li>
          <a
            href="#"
            rel="noreferrer"
            target="_blank"
            class="text-gray-700 transition hover:text-gray-700/75">
            <span class="sr-only">Twitter</span>
            <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path
                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
            </svg>
          </a>
        </li>

        <li>
          <a
            href="#"
            rel="noreferrer"
            target="_blank"
            class="text-gray-700 transition hover:text-gray-700/75">
            <span class="sr-only">GitHub</span>
            <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path
                fill-rule="evenodd"
                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                clip-rule="evenodd" />
            </svg>
          </a>
        </li>

        <li>
          <a
            href="#"
            rel="noreferrer"
            target="_blank"
            class="text-gray-700 transition hover:text-gray-700/75">
            <span class="sr-only">Dribbble</span>
            <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path
                fill-rule="evenodd"
                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                clip-rule="evenodd" />
            </svg>
          </a>
        </li>
      </ul>
    </div>
  </footer>


</body>

<!-- Script -->
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<!-- Initialize Swiper -->
<script src="script/script.js"></script>


</html>