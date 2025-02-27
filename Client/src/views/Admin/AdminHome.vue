<script setup>
import AdminLayout from '@/layout/AdminLayout.vue';

</script>

<template>
  <AdminLayout>
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl ">
      <div class="flex flex-col flex-1 w-full">
        <div class="h-full overflow-y-auto">
          <div class="container px-6 mx-auto grid mb-32 ">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 ark:text-gray-200">
              Users Dashboard
            </h2>

            <!-- Cards -->
            <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
              <!-- Card -->
              <div>
                <div class="flex items-center p-4 bg-white rounded-lg shadow-xs hover:bg-pr-200  ">
                  <div class="p-3 mr-4 bg-pr-400 rounded-full ">
                    <svg style="fill: #fff" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                      <path
                        d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                      </path>
                    </svg>
                  </div>
                  <div>
                    <p class="text-lg font-medium text-pr-400 ">
                      Total clients
                    </p>
                    <p class="text-lg font-semibold text-gray-700 ark:text-gray-200">
                      50 </p>
                  </div>
                </div>
              </div>

              <!-- Card -->


            </div>







            <div class="mt-12">
              <div class="flex align-middle justify-center">
                <hr class=" mt-8 h-0.5 w-1/2 bg-pr-500">
                <p class="my-2 mx-8  p-2 font-car font-bold text-gray-600 text-lg ">Clients</p>
                <hr class=" mt-8 h-0.5 w-1/2 bg-pr-500">
                <hr>
              </div>

            </div>


            <div class="w-full overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap overflow-scroll table-auto text-center">
                  <thead>
                    <tr
                      class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b ark:border-gray-700 bg-gray-50 ark:text-gray-400 ark:bg-gray-800">
                      <th class="text-center px-4 py-3">Client</th>
                      <th class="text-center px-4 py-3 w-48">Name</th>
                      <th class="text-center px-4 py-3 w-24">Email</th>
                      <th class="text-center px-4 py-3 w-24">Joined at</th>
                      <th class="text-center w-56 px-4 py-3">Reservations</th>
                      <th class="text-center px-4 py-3 w-26">Actions</th>

                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y ark:divide-gray-700 ark:bg-gray-800">
                    <tr class="text-gray-700 ark:text-gray-400">

                      <td class="px-4 py-3 text-sm w-1/12">
                        <img loading="lazy" src="/images/avatars/avatar_1.jpg" alt="">
                      </td>
                      <td class="px-4 py-3 text-sm">
                        <p>
                          Joe Doe
                        </p>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        <p>
                          raklovemusic@gmail.com
                        </p>
                      </td>
                      <td class="px-4 py-3 text-sm w-32">
                        <p>
                          2025/14/25
                        </p>
                      </td>
                      <td class="px-4 py-3 text-sm capitalize text-center">

                        no active reservations!!!

                      </td>

                      <td class="px-4 py-3 text-sm w-32">
                        <a href="">
                          <button type="submit" class="bg-blue-500 text-white p-3 rounded-md hover:bg-blue-700">
                            Details
                          </button>
                        </a>

                      </td>



                    </tr>

                  </tbody>
                </table>
              </div>


            </div>



          </div>
        </div>
      </div>
    </div>
  </AdminLayout>
</template>