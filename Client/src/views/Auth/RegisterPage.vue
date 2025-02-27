<script setup>
import UserLayout from '@/layout/UserLayout.vue';
import { useAuthStore } from '@/stores/auth';
import { storeToRefs } from 'pinia';
import { reactive, ref } from 'vue';

const authStore = useAuthStore();
const { errors } = storeToRefs(authStore);

const formData = reactive({
  name: "",
  email: "",
  password: "",
  password_confirmation: "",
});

const submitForm = () => {
  authStore.authenticate("register", formData);

  // console.log(formData);
};

</script>

<template>
  <UserLayout>
    <div class="grid place-items-center ">
      <div class="border p-5 md:w-1/2 w-4/5 bg-sec-100 my-12">
        <form @submit.prevent="submitForm">
          <div class="mb-6">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ark:text-white">Name : </label>
            <input v-model="formData.name" type="text" id="name" name="name"
              class="bg-pr-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pr-500 focus:border-pr-500 block w-full p-2.5 ">
            <p v-if="errors?.value?.name" class="text-sm text-red-500">
              {{ errors.value.name[0] }}
            </p>
          </div>

          <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ark:text-white">Email Address :
            </label>
            <input v-model="formData.email" type="email" id="email" name="email"
              class="bg-pr-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pr-500 focus:border-pr-500 block w-full p-2.5 ">

            <p v-if="errors?.value?.email" class="text-sm text-red-500">
              {{ errors.value.email[0] }}
            </p>
          </div>


          <div class="mb-6">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ark:text-white">
              password :</label>
            <input v-model="formData.password" type="password" id="password"
              class="bg-pr-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pr-500 focus:border-pr-500 block w-full p-2.5 "
              name="password">

            <p v-if="errors?.value?.password" class="text-sm text-red-500">
              {{ errors.value.password[0] }}
            </p>
          </div>

          <div class="mb-6">
            <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 ark:text-white">
              Confirm password :</label>
            <input v-model="formData.password_confirmation" type="password" id="password_confirmation"
              class="bg-pr-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pr-500 focus:border-pr-500 block w-full p-2.5 "
              name="password_confirmation">

            <p v-if="errors?.value?.password_confirmation" class="text-sm text-red-500">
              {{ errors.value.password_confirmation[0] }}
            </p>
          </div>


          <button type="submit"
            class="text-white bg-pr-400 hover:bg-pr-600 focus:ring-4 focus:outline-none focus:ring-pr-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ark:bg-pr-600 ark:hover:bg-pr-700 ark:focus:ring-pr-800">Register</button>
        </form>
      </div>
    </div>
  </UserLayout>
</template>