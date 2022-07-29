<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
</script>

<template>
    <Head title="index" />
    <div class="min-h-screen">
        <div class="flex justify-between py-5 px-16 bg-white">
            <div class="w-20">
                <img src="images/logo.png" alt="logo">
            </div>
            <div class="flex font-semibold">
                <h1 class="pr-16 self-center">
                    Home
                </h1>
                <h1 class="pr-16 self-center">
                    Services
                </h1>
                <h1 class="pr-16 self-center">
                    About
                </h1>
                <h1 class="self-center text-teal-500">
                    <a href="/signin">Join</a>
                </h1>
            </div>
        </div>
        <div class="bg-teal-500 min-h-screen grid grid-cols-2">
            <div class="self-center p-24">
                <div class="font-medium text-5xl text-white mb-20">
                    Lorem ipsum dolor sit amet, consectetur
                </div>
                <div>
                    <button class="bg-white rounded-lg font-semibold text-teal-500 py-2 px-16 ">
                        Join Now
                    </button>
                </div>
            </div>
            <div class="self-center">
                <img src="images/car.png" alt="">
            </div>
        </div>
    </div>

    <div>
        <div class="grid place-content-center my-20">
            <h1 class="font-medium text-4xl mb-1">Featured Services</h1>
            <div class="grid place-content-center">
                <img src="images/Line 1.png" alt="line 1">
            </div>
        </div>
        <div class="grid grid-cols-3 gap-24 mx-24">
            <div class="bg-green-200 p-24 rounded-lg">
                <div class="grid place-content-center">
                    <img class="mb-8" src="images/Oil.png" alt="oil">
                </div>
                <div class="grid place-content-center">
                    <h1 class="font-bold text-green-600">Oil Change</h1>
                </div>
            </div>
            <div class="bg-green-200 p-24 rounded-lg">
                <div class="grid place-content-center">
                    <img class="mb-8" src="images/Petrol.png" alt="petrol">
                </div>
                <div class="grid place-content-center">
                    <h1 class="font-bold text-green-600">Mobile Filling</h1>
                </div>
            </div>
            <div class="bg-green-200 p-24 rounded-lg">
                <div class="grid place-content-center">
                    <img class="mb-8" src="images/Switch.png" alt="switch">
                </div>
                <div class="grid place-content-center">
                    <h1 class="font-bold text-green-600">Trouble Starting</h1>
                </div>
            </div>
            <div class="bg-green-200 p-24 rounded-lg">
                <div class="grid place-content-center">
                    <img class="mb-8" src="images/Air.png" alt="air">
                </div>
                <div class="grid place-content-center">
                    <h1 class="font-bold text-green-600">Cooling</h1>
                </div>
            </div>
            <div class="bg-green-200 p-24 rounded-lg">
                <div class="grid place-content-center">
                    <img class="mb-8" src="images/Switch.png" alt="switch">
                </div>
                <div class="grid place-content-center">
                    <h1 class="font-bold text-green-600">Trouble Starting</h1>
                </div>
            </div>
            <div class="bg-green-200 p-24 rounded-lg">
                <div class="grid place-content-center">
                    <img class="mb-8" src="images/Oil.png" alt="oil">
                </div>
                <div class="grid place-content-center">
                    <h1 class="font-bold text-green-600">Oil Change</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-teal-500 mt-40">
        <div class="grid place-content-center mb-20 pt-8">
            <h1 class="font-medium text-4xl text-white mb-2">Why Us</h1>
            <div class="grid place-content-center">
                <img src="images/Line 2.png" alt="line 2">
            </div>
        </div>
        <div class="flex place-content-center text-white pb-24">
            <div class="flex mr-32">
                <div class="mr-5">
                    <img class="" src="images/Ellipse 2.png" alt="Ellipse">
                </div>
                <div>
                    <h1 class="mb-2 text-lg opacity-80">Lorem ipsum</h1>
                    <p class="text-sm opacity-75 w-48">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Ad vitae recusandae quam soluta officia ipsam</p>
                </div>
            </div>
            <div class="flex mr-32">
                <div class="mr-5">
                    <img class="" src="images/Ellipse 2.png" alt="Ellipse">
                </div>
                <div>
                    <h1 class="mb-2 text-lg opacity-80">Lorem ipsum</h1>
                    <p class="text-sm opacity-75 w-48">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Ad vitae recusandae quam soluta officia ipsam</p>
                </div>
            </div>
            <div class="flex">
                <div class="mr-5">
                    <img class="" src="images/Ellipse 2.png" alt="Ellipse">
                </div>
                <div>
                    <h1 class="mb-2 text-lg opacity-80">Lorem ipsum</h1>
                    <p class="text-sm opacity-75 w-48">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Ad vitae recusandae quam soluta officia ipsam</p>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center my-20">
        <div class="grid place-content-center mt-20 mb-16">
            <h1 class="font-medium text-4xl mb-1">What They Think</h1>
            <div class="grid place-content-center">
                <img src="images/Line 1.png" alt="line 1">
            </div>
        </div>
        <div>
            <div class="flex justify-center mb-3">
                <img class="w-28" src="images/Ellipse 8.png" alt="">
            </div>
            <div>
                <div class="flex justify-between mx-20 mb-2">
                    <img src="images/Vector (1).png" alt="Vector">
                    <div class="grid place-content-center">
                        <h1 class="font-semibold">Davis Calzoni</h1>
                        <div class="flex">
                            <img src="images/Star.png" alt="star">
                            <img src="images/Star.png" alt="star">
                            <img src="images/Star.png" alt="star">
                            <img src="images/Star.png" alt="star">
                            <img src="images/Star.png" alt="star">
                        </div>
                    </div>
                    <img src="images/Vector.png" alt="Vector">
                </div>
                <div class="grid place-content-center px-40 mx-40">
                    <p class="text-sm w-80 text-gray-800">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Deleniti ducimus cupiditate nobis nemo non, ipsum eaque quis laudantium architecto quaerat nam, 
                        ratione ut dicta dolore eligendi qui earum? Explicabo, error?</p>
                </div>
            </div>
        </div>
    </div>

    <div>

        <div class="flex justify-center bg-teal-800 pt-16 pb-10">
            <div class="text-white">
                <div class="w-40 mb-10">
                    <img src="images/logo.png" alt="logo">
                </div>
                <div class="font-light text-lg">
                    <div class="flex mb-8">
                        <img class="mr-5" src="images/phone.png" alt="phone icon">
                        <h1>+66 32329 r23523</h1>
                    </div>
                    <div class="flex">
                        <img class="mr-5" src="images/android-mail.png" alt="mail icon">
                        <h1>Serviceprovider@gmail.com</h1>
                    </div>
                </div>
            </div>
            
            <div class="ml-12">
                <img class="h-64" src="images/Line 5.png" alt="">
            </div>

            <div class="text-white mx-20">
                <div class="mb-8 font-medium text-xl">
                    <h1>Site Map</h1>
                </div>
                <div class="flex font-light text-lg">
                    <div class="mr-24 ">
                        <h1 class="mb-3">Commodo</h1>
                        <h1 class="mb-3">Tristique</h1>
                        <h1 class="mb-3">Risus</h1>
                        <h1 class="mb-3">Eu</h1>
                        <h1 class="mb-3">Viverra</h1>
                    </div>
                    <div class="mr-24 ">
                        <h1 class="mb-3">Commodo</h1>
                        <h1 class="mb-3">Tristique</h1>
                        <h1 class="mb-3">Risus</h1>
                        <h1 class="mb-3">Eu</h1>
                        <h1 class="mb-3">Viverra</h1>
                    </div>
                    <div class="">
                        <h1 class="mb-3">Commodo</h1>
                        <h1 class="mb-3">Tristique</h1>
                        <h1 class="mb-3">Risus</h1>
                        <h1 class="mb-3">Eu</h1>
                        <h1 class="mb-3">Viverra</h1>
                    </div>
                </div>
            </div>

            <div class="mr-12">
                <img class="h-64" src="images/Line 5.png" alt="vertical line">
            </div>

            <div class="text-white">
                <div class="mb-8 font-medium text-xl">
                    <h1>Social</h1>
                </div>
                <div class="font-light text-lg">
                    <div class="flex mb-5">
                        <img class="mr-5" src="images/facebook.png" alt="facebook">
                        <h1>
                            Facebook
                        </h1>
                    </div>
                    <div class="flex mb-5">
                        <img class="mr-5" src="images/Twitter.png" alt="twitter">
                        <h1>
                            Twitter
                        </h1>
                    </div>
                    <div class="flex mb-5">
                        <img class="mr-5" src="images/linkedin.png" alt="linked in">
                        <h1>
                            Linked In
                        </h1>
                    </div>
                    <div class="flex mb-5">
                        <img class="mr-5" src="images/instagram.png" alt="Instagram">
                        <h1>
                            Instagram
                        </h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex place-content-center bg-teal-900 font-light text-white text-sm py-4">
            <h1 class="opacity-50 tracking-wider">Copyright 2022 @ Service provider. All rights Reserved</h1>
        </div>

    </div>
</template>