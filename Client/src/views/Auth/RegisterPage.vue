<script setup>
import UserLayout from '@/layout/UserLayout.vue';
import avatar1 from '/images/avatars/avatar_1.jpg';
import avatar2 from '/images/avatars/avatar_2.jpg';
import avatar3 from '/images/avatars/avatar_3.jpg';
import avatar4 from '/images/avatars/avatar_4.jpg';
import avatar5 from '/images/avatars/avatar_5.jpg';
import avatar6 from '/images/avatars/avatar_6.jpg';

import { ref } from 'vue';

const selectedAvatar = ref(null);
</script>

<template>
  <UserLayout>
    <div class="grid place-items-center ">
      <div class="border p-5 md:w-1/2 w-4/5 bg-sec-100 my-12">
        <form>


          <div class="mb-6">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ark:text-white">Name : </label>
            <input type="text" id="name" name="name"
              class="bg-pr-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pr-500 focus:border-pr-500 block w-full p-2.5 ">

            <!-- <span>
                            <strong>{{ $message }}</strong>
                        </span> -->

          </div>

          <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ark:text-white">Email Address
              : </label>
            <input type="email" id="email" name="email"
              class="bg-pr-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pr-500 focus:border-pr-500 block w-full p-2.5 ">

            <!-- <span>
                            <strong>{{ $message }}</strong>
                        </span> -->

          </div>


          <div class="mb-6">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ark:text-white">
              password :</label>
            <input type="password" id="password"
              class="bg-pr-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pr-500 focus:border-pr-500 block w-full p-2.5 "
              name="password">

            <!-- <span>
              <strong>{{ $message }}</strong>
            </span> -->

          </div>

          <div class="mb-6">
            <label for="password-confirm" class="block mb-2 text-sm font-medium text-gray-900 ark:text-white">
              Confirm password :</label>
            <input type="password" id="password-confirm"
              class="bg-pr-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pr-500 focus:border-pr-500 block w-full p-2.5 "
              name="password_confirmation">

          </div>


          <button type="submit"
            class="text-white bg-pr-400 hover:bg-pr-600 focus:ring-4 focus:outline-none focus:ring-pr-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ark:bg-pr-600 ark:hover:bg-pr-700 ark:focus:ring-pr-800">Register</button>


        </form>
      </div>

    </div>
  </UserLayout>
</template>