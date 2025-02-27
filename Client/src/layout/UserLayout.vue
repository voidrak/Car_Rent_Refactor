<script setup>

</script>

<template>

  <header>
    <nav class="bg-sec-600 border-gray-200 px-4 lg:px-6 py-4 ark:bg-gray-800 ">
      <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl drop-shadow-2xl">
        <div class="flex items-center">
          <img loading="lazy" src="/images/carLogo.png" class="mr-3 h-12" alt="Flowbite Logo" />
        </div>
        <div class="flex items-center  lg:order-2">
          <RouterLink :to="{ name: 'Login' }">
            <button type="button"
              class=" px-4 lg:px-5 py-2 lg:py-2.5 mr-2 text-white bg-gradient-to-br from-pr-400 to-pr-300 hover:bg-gradient-to-bl font-medium rounded-lg text-sm ">
              login
            </button>

          </RouterLink>
          <RouterLink :to="{ name: 'Register' }">
            <button
              class="relative inline-flex items-center justify-center p-0.5 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-red-200 via-red-300 to-yellow-200 group-hover:from-red-200 group-hover:via-red-300 group-hover:to-yellow-200 ark:text-white ark:hover:text-gray-900 ">
              <span
                class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-sec-600 ark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                Register
              </span>
            </button>
          </RouterLink>
          <button data-collapse-toggle="mobile-menu-2" type="button"
            class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 ark:text-gray-400 ark:hover:bg-gray-700 ark:focus:ring-gray-600"
            aria-controls="mobile-menu-2" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd"></path>
            </svg>
            <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
        <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
          <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
            <li>
              <a href="/">
                <div class="group text-center">
                  <div class="group-hover:cursor-pointer">Home</div>
                  <div
                    class="block invisible bg-pr-400 w-12 h-1 rounded-md text-center -bottom-1 mx-auto relative group-hover:visible">
                  </div>
                </div>
              </a>
            </li>
            <li>
              <RouterLink :to="{ name: 'CarsList' }">
                <div class="group text-center">
                  <div class="group-hover:cursor-pointer">Cars</div>
                  <div
                    class="block invisible bg-pr-400 w-8 h-1 rounded-md text-center -bottom-1 mx-auto relative group-hover:visible">
                  </div>
                </div>
              </RouterLink>
            </li>
            <li>
              <RouterLink :to="{ name: 'Location' }">
                <div class="group text-center">
                  <div class="group-hover:cursor-pointer">Location</div>
                  <div
                    class="block invisible bg-pr-400 w-16 h-1 rounded-md text-center -bottom-1 mx-auto relative group-hover:visible">
                  </div>
                </div>
              </RouterLink>
            </li>
            <li>
              <RouterLink :to="{ name: 'ContactUs' }">
                <div class="group text-center">
                  <div class="group-hover:cursor-pointer">Contact Us</div>
                  <div
                    class="block invisible bg-pr-400 w-20 h-1 rounded-md text-center -bottom-1 mx-auto relative group-hover:visible">
                  </div>
                </div>
              </RouterLink>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>


  <div class="min-h-[calc(100vh-150px)]">
    <slot></slot>
  </div>




  <footer class="px-4  sm:p-6 bg-gray-800">
    <div class="pt-10 mx-auto max-w-screen-xl relative">
      <div class="md:flex md:justify-between">
        <div class="mb-12 md:mb-0 flex justify-center ">
          <a href="" class="flex items-center">
            <img loading="lazy" src="/images/carLogo.png" class="mr-3 h-24" alt="Logo" />
          </a>
        </div>

        <div class="grid grid-cols-3 gap-8 ">
          <div>
            <h2 class="mb-6 text-sm font-semibold  uppercase text-white">Info</h2>
            <ul class=" text-gray-400">
              <li class="mb-4">

                <RouterLink :to="{ name: 'ContactUs' }" class="hover:underline">
                  Contact Us
                </RouterLink>
              </li>
              <li>
                <RouterLink :to="{ name: 'Location' }" class="hover:underline">Location</RouterLink>
              </li>
            </ul>
          </div>
          <div>
            <h2 class="mb-6 text-sm font-semibold  uppercase text-white">Follow us</h2>
            <ul class="text-gray-400">
              <li class="mb-4">
                <a href="#" class="hover:underline ">Github</a>
              </li>
              <li>
                <a href="#" class="hover:underline">Linkedin</a>
              </li>
            </ul>
          </div>
          <div>
            <h2 class="mb-6 text-sm font-semibold  uppercase text-white">Legal</h2>
            <ul class=" text-gray-400">
              <li class="mb-4">
                <p class="hover:underline">Privacy
                  Policy</p>
              </li>
              <li>
                <p class="hover:underline">Terms &amp;
                  Conditions</p>
              </li>
            </ul>
          </div>
        </div>

      </div>

      <hr class="my-6  sm:mx-auto border-gray-700 lg:my-8" />

      <div class="sm:flex sm:items-center sm:justify-between md:ms-0 pb-4  ms-32">
        <span class="text-sm sm:text-center text-gray-400 md:ms-0 -ms-8">© 2022 <a href="#" class="hover:underline">
          </a> All Rights
          Reserved.
        </span>
        <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
          <a href="#" class="text-gray-500 hover:text-white">
            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path
                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
            </svg>
          </a>
          <a href="#" class="text-gray-500  hover:text-white">
            <svg class="fill-[#ea9800]" xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 448 512">
              <path
                d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" />
            </svg>
          </a>
          <a href="#" class="text-gray-500  hover:text-white">
            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd"
                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                clip-rule="evenodd" />
            </svg>
          </a>


        </div>
      </div>
    </div>

  </footer>
</template>