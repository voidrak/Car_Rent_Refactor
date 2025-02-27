<script setup>
import ManagerLayout from '@/layout/ManagerLayout.vue';


</script>

<template>
  <ManagerLayout>
    <div class="my-20 flex flex-col justify-center  items-center mx-auto max-w-screen-xl">
      <RouterLink :to="{ name: 'AddNewCar' }">
        <button class="mb-6 bg-pr-400 p-2 text-white drop-shadow-lg hover:bg-pr-600 hover:cursor-pointer rounded-md ">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-8 h-8 inline">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          Add New Car

        </button>
      </RouterLink>
      <div class=" relative overflow-x-hidden shadow-md sm:rounded-lg w-full  ">
        <table class="w-full text-sm text-left text-gray-500 ark:text-gray-400 mx-2">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50 ark:bg-gray-700 ark:text-gray-400">
            <tr>
              <th scope="col" class="px-6 py-3">
                Image
              </th>
              <th scope="col" class="px-6 py-3">
                brand
              </th>
              <th scope="col" class="px-6 py-3">
                model
              </th>
              <th scope="col" class="px-6 py-3">
                engine
              </th>
              <th scope="col" class="px-6 py-3">
                price_per_day
              </th>
              <th scope="col" class="px-6 py-3">
                quantity
              </th>

              <th scope="col" class="px-6 py-3">
                reserved
              </th>
              <th scope="col" class="px-6 py-3">
                Action
              </th>
            </tr>
          </thead>
          <tbody>

            <tr class="bg-white border-b ark:bg-gray-800 ark:border-gray-700 hover:bg-gray-50 ark:hover:bg-gray-600">
              <td class="w-4 p-4">
                <div class="p-0.5 rounded-md border-2 border-pr-400 ">

                  <img loading="lazy" src="/public/images/carHome.png " alt="car image">
                </div>

              </td>
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ark:text-white">
                Honda
              </th>
              <td class="px-6 py-4">
                Civic
              </td>
              <td class="px-6 py-4">
                2.5L
              </td>
              <td class="px-6 py-4">
                5000
              </td>
              <td class="px-6 py-4">
                1
              </td>

              <td class="px-6 py-4">
                available
              </td>
              <td class="flex my-4 py-3  px-6  space-x-3 ">
                <RouterLink :to="{ name: 'UpdateCar' }"
                  class="font-medium text-blue-600 ark:text-blue-500 hover:underline">Edit
                </RouterLink>


                <button type="submit" class="font-medium text-red-600 ark:text-red-500 hover:underline">Remove</button>

              </td>
            </tr>


          </tbody>
        </table>
      </div>

    </div>



  </ManagerLayout>

</template>