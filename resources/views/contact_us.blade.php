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

    <!--Main-->
    <div class="my-5 px-4">
        <h2 class="mt-10 pt-4 mb-10 text-center text-2xl font-semibold  "
            style="color: #e1a823; text-shadow: 0 2px 2px rgba(92, 92, 92, 0.779);">CONTACT US</h2>
        <p class="text-center mt-3 ">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. <br>
            Ut obcaecati deleniti qui totam possimus aut laudantium nulla
            consectetur dolorem? <br>Exercitationem laborum illum sequi voluptate ratione vitae tempora similique nobis
            excepturi.
        </p>

    </div>

    <!--Main-->
    <main class="grid grid-cols-1 grid-row-1 md:grid-cols-2 md:grid-row-3 gap-8 mx-2 md:mx-24 gap-x-2 gap-y-3 ">
        <div class="row-span-2 rounded-lg  shadow-xl   ">
            <div class="bg-zinc-50 dark:border-gray-600 h-full rounded shadow p-4 ">
                <iframe class="w-full rounded mb-4" height="320px"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.55873199195!2d112.77634647499991!3d-7.290940242716488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa469f2b37b5%3A0x8d971ebe4e20a0d5!2sInstitut%20Teknologi%20Adhi%20Tama%20Surabaya!5e0!3m2!1sid!2sid!4v1721227269110!5m2!1sid!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <h5>Address</h5>
                <a href="https://maps.app.goo.gl/KbCtDStDuDWjS6Dm8" class="text-decoration-non ikon "
                    style="font-size: 15px;">
                    Jl. Arief Rahman Hakim No.100, Klampis Ngasem, Kec. Sukolilo, Surabaya, Jawa Timur 60117
                </a>
                <h5 class="mt-5 mb-2">Call Us</h5>
                <a href="tel: +6281232448985" class=" mb-2 text-decoration-none ikon ">
                    <img class="size-5 float-left mx-3 " src="img/telepon.png " alt="">+62 81232448985
                </a>
                <br>
                <a href="tel: +6281232448985" class=" mb-2 text-decoration-none ikon ">
                  <img class="size-5 float-left mx-3 " src="img/telepon.png " alt="">+62 81232448985
                </a>
                <h5 class="mt-4 mb-2">Email</h5>
                <a href="agamdana125@gmail.com" class=" mb-2 text-decoration-none text-dark ikon ">
                  <img class="size-5 float-left mx-3 " src="img/gmail.png " alt=""></i>ask.bscar@gmail.com
                </a>
                <h5 class="mt-4 mb-2">Follow Us</h5>
                <a href="#" class="mb-2 ikon">
                  <img class="size-5 float-left mx-3 mt-1 " src="img/twitter.png " alt="">bs_car
                </a>
                <br>
                <a href="https://www.facebook.com/profile.php?id=100078084866344&mibextid=ZbWKwL"class=" mb-2 text-decoration-none ikon" >
                  <img class="size-5 float-left mx-3 mt-1 " src="img/fb.png " alt="">bs_car
                </a>
                <br>
                <a href="https://www.instagram.com/biyan.77" class=" mb-2 text-decoration-none ikon " >
                  <img class="size-6 float-left ml-2 mr-3 mt-1 " src="img/instagram.png " alt="">bs_car18
                </a>
            </div>

        </div>

        <div class="row-span-1 rounded-lg shadow-xl   ">
          <div class="bg-zinc-50 dark:border-gray-600 rounded-lg shadow p-4 ">
            <form action="" method="post">
                <h5>Write your feedback</h5>
                <div class="mt-8">
                  <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Name</label>
                  <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-sky-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Hubner" required />
                </div>
                <div class="mt-3">
                  <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email address</label>
                  <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-sky-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="hubner123@gmail.com" required />
                </div>
                <div class="mt-3">
                    <label class="form-label" style="font-weight: 500;">Message</label>
                    <textarea class="resize-y rounded-md bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-sky-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                </div>
                <button type="button" class="text-white bg-gradient-to-br from-sky-800 to-blue-600 hover:bg-gradient-to-tl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center my-3">Send  </button>
            </form>
        </div>

      </div>

    </main>



    <!--Footer container-->
    <footer class="bg-gray-100 mt-10">
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
                    <a href="#" rel="noreferrer" target="_blank"
                        class="text-blue-700 transition hover:text-gray-700/75">
                        <span class="sr-only">Facebook</span>
                        <i class="bi bi-facebook"></i>
                    </a>
                </li>

                <li>
                    <a href="#" rel="noreferrer" target="_blank"
                        class="text-gray-700 transition hover:text-gray-700/75">
                        <span class="sr-only">Instagram</span>
                        <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </li>

                <li>
                    <a href="#" rel="noreferrer" target="_blank"
                        class="text-gray-700 transition hover:text-gray-700/75">
                        <span class="sr-only">Twitter</span>
                        <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                    </a>
                </li>

                <li>
                    <a href="#" rel="noreferrer" target="_blank"
                        class="text-gray-700 transition hover:text-gray-700/75">
                        <span class="sr-only">GitHub</span>
                        <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </li>

                <li>
                    <a href="#" rel="noreferrer" target="_blank"
                        class="text-gray-700 transition hover:text-gray-700/75">
                        <span class="sr-only">Dribbble</span>
                        <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
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
