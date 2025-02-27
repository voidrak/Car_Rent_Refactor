<script setup>

import ManagerLayout from '@/layout/ManagerLayout.vue';

</script>

<template>
  <ManagerLayout>

    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl ">
      <div class="flex flex-col flex-1 w-full">
        <main class="h-full overflow-y-auto">
          <div class="container px-6 mx-auto grid mb-32 ">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 ark:text-gray-200">
              Dashboard
            </h2>

            <!-- Cards -->
            <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
              <!-- Card -->


              <!-- Card -->
              <a href=" ">
                <div class="flex items-center p-4 bg-white rounded-lg shadow-xs  hover:bg-pr-200 ">
                  <div class="p-3 mr-4 bg-pr-400 rounded-full ">
                    <svg style="fill: #fff" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">


                      <path
                        d="M135.2 117.4L109.1 192H402.9l-26.1-74.6C372.3 104.6 360.2 96 346.6 96H165.4c-13.6 0-25.7 8.6-30.2 21.4zM39.6 196.8L74.8 96.3C88.3 57.8 124.6 32 165.4 32H346.6c40.8 0 77.1 25.8 90.6 64.3l35.2 100.5c23.2 9.6 39.6 32.5 39.6 59.2V400v48c0 17.7-14.3 32-32 32H448c-17.7 0-32-14.3-32-32V400H96v48c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V400 256c0-26.7 16.4-49.6 39.6-59.2zM128 288a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm288 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64z" />
                    </svg>
                  </div>
                  <div>
                    <p class="text-lg font-medium text-pr-400 ">
                      Available Cars
                    </p>
                    <p class="text-lg font-semibold text-gray-700 ark:text-gray-200">
                      25
                    </p>
                  </div>
                </div>
              </a>

              <!-- Card -->
              <a href="javascript:void(0);" onclick="scrollToReservatios();">
                <div class="flex items-center p-4 bg-white rounded-lg shadow-xs  hover:bg-pr-200 ">
                  <div class="p-3 mr-4 bg-pr-400 rounded-full ">
                    <svg style="fill: #fff" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">


                      <path
                        d="M184 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H96c-35.3 0-64 28.7-64 64v16 48V448c0 35.3 28.7 64 64 64H416c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H376V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H184V24zM80 192H432V448c0 8.8-7.2 16-16 16H96c-8.8 0-16-7.2-16-16V192zm176 40c-13.3 0-24 10.7-24 24v48H184c-13.3 0-24 10.7-24 24s10.7 24 24 24h48v48c0 13.3 10.7 24 24 24s24-10.7 24-24V352h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H280V256c0-13.3-10.7-24-24-24z" />
                    </svg>
                  </div>
                  <div>
                    <p class="text-lg font-medium text-pr-400 ">
                      Active Reservations
                    </p>
                    <p class="text-lg font-semibold text-gray-700 ark:text-gray-200">
                      32
                    </p>
                  </div>
                </div>
              </a>
            </div>



            <div class="mt-12">
              <div class="flex align-middle justify-center">
                <hr class=" mt-8 h-0.5 w-1/2 bg-pr-500">
                <p class="my-2 mx-8  p-2 font-car font-bold text-gray-600 text-lg ">RESERVATIONS</p>
                <hr class=" mt-8 h-0.5 w-1/2 bg-pr-500">
                <hr>
              </div>

            </div>

            <!-- New Table -->
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap overflow-scroll table-auto">
                  <thead>
                    <tr
                      class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b ark:border-gray-700 bg-gray-50 ark:text-gray-400 ark:bg-gray-800">
                      <th class="px-4 py-3">Client</th>
                      <th class="px-4 py-3 w-48">Car</th>
                      <th class="px-4 py-3 w-24">Started at</th>
                      <th class="px-4 py-3 w-24">End at</th>
                      <th class="px-4 py-3">Duration</th>
                      <th class="px-4 py-3 w-26">Raimining days</th>
                      <th class="px-4 py-3">Price</th>
                      <th class="px-4 py-3">Paiment Status</th>
                      <th class="px-4 py-3">Status</th>
                      <th class="px-4 py-3 ">Actions</th>
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y ark:divide-gray-700 ark:bg-gray-800">


                    <!-- @forelse ($reservations as $reservation) -->
                    <tr class="text-gray-700 ark:text-gray-400">
                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                          <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                            <img loading="lazy" class="object-cover w-full h-full rounded-full" src="  " alt="" />
                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                          </div>
                          <div>
                            <p class="font-semibold"> Nahom </p>
                            <p class="text-xs text-gray-600 ark:text-gray-400">
                              rakkpoper@gmail.com
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        Honda Civic

                      </td>

                      <td class="px-4 py-3  text-sm">
                        19/02/25</td>
                      <td class="px-4 py-3  text-sm">
                        29/02/25 </td>

                      <td class=" text-xs">
                        <p class="px-4 py-3 text-sm">
                          7 </p>
                      </td>


                      <td class="px-4 py-3 text-xs">
                        <!-- @if ($reservation->start_date > Carbon\Carbon::now()) -->
                        <p class="px-4 py-3 text-sm">

                          13
                        </p>
                        <!-- @else -->
                        <!-- @endif -->
                      </td>

                      <td class="px-4 py-3 text-sm">
                        3200
                      </td>


                      <td class="px-4 py-3 text-sm ">
                        <!-- @if ($reservation->payment_status == 'Pending') -->
                        <!-- <span class="p-2 text-white rounded-md bg-yellow-300 ">{{ $reservation - payment_status
                        }}</span>
                        @elseif ($reservation->payment_status == 'Canceled')
                        <span class="p-2 text-white rounded-md bg-red-500 ">{{ $reservation - payment_status }}</span>
                        @elseif ($reservation->payment_status == 'Paid') -->
                        <span class="p-2 text-white rounded-md bg-green-500 px-5"> payment_status
                        </span>

                      </td>

                      <td class="px-4 py-3 text-sm ">
                        <!-- @if ($reservation->status == 'Pending')
                        <span class="p-2 text-white rounded-md bg-yellow-300 ">{{ $reservation - status }}</span>
                        @elseif ($reservation->status == 'Ended')
                        <span class="p-2 text-white rounded-md bg-black ">{{ $reservation - status }}</span>
                        @elseif ($reservation->status == 'Active')
                        <span class="p-2 text-white rounded-md bg-green-500 px-4">{{ $reservation - status }}</span> -->
                        <!-- @elseif ($reservation->status == 'Canceled') -->

                        <span class="p-2 text-white rounded-md bg-red-500 ">reservation </span>
                        <!-- @endif -->
                      </td>


                      <td class="">

                        <a class="p-2   py-3   text-sm flex flex-col justify-center mb-1 text-white bg-pr-500 hover:bg-pr-400 font-medium rounded text-center"
                          href=" ">
                          <button>Edit Status </button>
                        </a>
                      </td>

                    </tr>



                  </tbody>
                </table>
              </div>

            </div>



          </div>
        </main>
      </div>
    </div>
  </ManagerLayout>
</template>