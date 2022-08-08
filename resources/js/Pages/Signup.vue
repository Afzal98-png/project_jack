<template>
  <Head title="index" />
    <HeadIndex></HeadIndex>
    <div class="bg-gray-100 pb-20">
        <div class="min-h-screen">
            <div class="flex mx-48 pb-5 pt-20">
                <div class="bg-white rounded-full">
                </div>
                <div>
                    <h1 class="text-lg font-bold">Create Account</h1>
                </div>
            </div>
            <div class="bg-white mx-48 px-10 py-10 rounded-lg">
            <div class="mb-5">
                <div class="mb-2">
                <h1>Account Type</h1>
                </div>
                <div>
                <button
                    class="bg-green-100 text-[#24C6C9] rounded-lg py-2 px-16 mr-6"
                >
                    User
                </button>
                <button class="bg-gray-100 rounded-lg py-2 px-16">Seller</button>
                </div>
            </div>
            <div>
                <form>
                <div class="grid grid-cols-2 mb-10">
                    <div class="mb-5 mr-5">
                    <TextField
                        fieldtype="text"
                        name="first_name"
                        placeholder="Enter First Name"
                    >
                        First Name
                    </TextField>
                    </div>
                    <div class="mb-5 ml-5">
                    <TextField
                        fieldtype="text"
                        name="last_name"
                        placeholder="Enter Last Name"
                    >
                        Last Name
                    </TextField>
                    </div>
                    <div class="mb-5 mr-5">
                    <TextField
                        fieldtype="text"
                        name="country"
                        placeholder="Enter Country"
                    >
                        Country
                    </TextField>
                    </div>
                    <div class="mb-5 ml-5">
                    <TextField fieldtype="text" name="city" placeholder="Enter City">
                        City
                    </TextField>
                    </div>
                    <div class="mb-5 mr-5">
                    <TextField
                        fieldtype="number"
                        name="contact_number"
                        placeholder="Enter Contact Number"
                    >
                        Contact Number
                    </TextField>
                    </div>
                    <div class="mb-5 ml-5">
                    <TextField
                        fieldtype="email"
                        name="email"
                        placeholder=" Enter Email"
                    >
                        Email
                    </TextField>
                    </div>
                    <div class="mr-5">
                    <TextField
                        fieldtype="Password"
                        name="password"
                        placeholder="Create Password"
                    >
                        Password
                    </TextField>
                    </div>
                    <div class="ml-5">
                    <TextField
                        fieldtype="Password"
                        name="confirm_Password"
                        placeholder="Confirm Password"
                    >
                        Confirm Password
                    </TextField>
                    </div>
                </div>
                <div
                    class="
                    flex
                    justify-center
                    bg-[#24C6C9]
                    text-white
                    rounded-lg
                    py-2
                    mt-5
                    mb-10
                    "
                >
                    <button><a href="">Next</a></button>
                </div>
                </form>
            </div>
            </div>
        </div>
    </div>
 
</template>

<script setup>
</script>