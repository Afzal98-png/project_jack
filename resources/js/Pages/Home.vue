<template>
  <Head title="Home" />
  <div class="min-h-screen grid grid-cols-7">
    <HomeIndex />
    <div class="bg-gray-100 col-span-6 pl-10 pr-20 pt-10 pb-20">
      <div class="flex justify-between">
        <div>
          <h1 class="text-lg font-bold">Hi Zain,</h1>
        </div>
        <div>
          <input 
            type="search" 
            placeholder="Search services"
            class="
            pr-80
            focus:ring-[#24C6C9] focus:border-[#24C6C9]
            block
            w-full
            shadow-sm
            sm:text-sm
            border-gray-300
            rounded-md
          ">
        </div>
      </div>
      <div>
        <div class="flex justify-between text-sm mt-10">
          <div>
            <h1>Services in Riyadh, Saudi Arabia</h1>
          </div>
          <div>
            <a href="">See All</a>
          </div>
        </div>
        <div>
          <div class="">
            <img src="imajes/Car.png" alt="towing vehicle">
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head } from "@inertiajs/inertia-vue3";
import HomeIndex from "@/Components/HomeIndex.vue";
import TextField from "@/Components/Form/TextField.vue";
</script>