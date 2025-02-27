<script setup>
</script>

<template>

  <header>
    <nav class="bg-sec-600 border-gray-200 px-4 lg:px-6 py-4 ark:bg-gray-800">
      <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">

        <div class="flex items-center">
          <img loading="lazy" src="/images/carLogo.png" class="mr-3 h-12" alt="  Logo" />
        </div>
        <div class="hidden justify-between mb-6 items-center w-full lg:flex lg:w-auto" id="mobile-menu-2">
          <ul class="flex flex-col  font-medium lg:flex-row lg:space-x-8 lg:mt-0 ">


          </ul>
        </div>

        <div class="flex">
          <a class="block px-4 py-2 hover:bg-pr-200 ">Admin </a>
          <a class="block px-4 py-2 hover:bg-pr-200 ">logout</a>
        </div>
      </div>
    </nav>
  </header>
  <div class="min-h-[calc(100vh-180px)]">
    <slot />
  </div>
  <footer class="px-4 h-[100px]  sm:p-6 bg-gray-800 flex justify-center items-center">
    <p class="text-gray-100 font-car font-medium text-5xl  uppercase">admin panel</p>
  </footer>
</template>