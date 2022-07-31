<template>
  <Head title="Home" />

  <div class="min-h-screen bg-[#E4E4E4] grid grid-cols-7">
    <!-- Home Left Index -->
    <HomeIndex />

    <div class="col-span-6 pl-[59px] pr-[115px] pt-[59px] pb-[59px]">
      <!-- Home Head -->
      <RequestHead />
      <!-- Main Content -->
      <div>
        <!-- Services -->
        <div class="grid grid-cols-3">
          <div class="col-span-2 pr-[39px]">
            <div
              class="flex justify-between text-sm mt-[44px] mb-[26px] mr-[115px]"
            >
              <div>
                <h1 class="text-[16px] font-bold">Request Service</h1>
              </div>
            </div>
            <div>
              <form action="">
                <div>
                 <SelectOptionField
                    selectedOption="Towing and Shipping"
                    name="service_type"
                  >
                    <h1 class="font-bold">Service Type</h1>
                  </SelectOptionField>
                </div>
                <div>
                  <SelectOptionField
                      selectedOption="Brand"
                      name="choose_brand"
                    >
                      <h1 class="font-bold">Choose Brand</h1>
                    </SelectOptionField>
                </div>
                <div>
                  <SelectOptionField
                      selectedOption="Type"
                      name="choose_type"
                    >
                      <h1 class="font-bold">Choose Type</h1>
                    </SelectOptionField>
                </div>
                <div>
                  <SelectOptionField
                      selectedOption="Model"
                      name="choose_model"
                    >
                      <h1 class="font-bold">Choose Model</h1>
                    </SelectOptionField>
                </div>
                <div>
                  <TextField
                    fieldtype="text"
                    name="color"
                    placeholder="Select Color"
                  >
                    <h1 class="font-bold">Choose Color</h1>
                  </TextField>
                </div>
                <div>
                  <TextField
                    fieldtype="text"
                    name="plate_number"
                    placeholder="Plate Number"
                  >
                    <h1 class="font-bold">Plate Number</h1>
                  </TextField>
                </div>
                <div>
                  <TextField
                    fieldtype="text"
                    name="location_from"
                    placeholder="Location From"
                  >
                    <h1 class="font-bold">Location From</h1>
                  </TextField>
                </div>
                <div>
                  <TextField
                    fieldtype="text"
                    name="location_to"
                    placeholder="Location To"
                  >
                    <h1 class="font-bold">Location To</h1>
                  </TextField>
                </div>
                <div
                  class="
                    flex
                    justify-center
                    bg-[#24C6C9]
                    text-white
                    rounded-lg
                    py-2
                    mb-[94px]
                  "
                >
                  <button>Post</button>
                </div>
              </form>
            </div> 
          </div>
          <div class="mt-[44px]">
            <h1 class="text-[16px] font-bold mb-[13px]">Add images</h1>
            <div class="mb-[13px]">
              <img src="images/Rectangle 68.png" alt="">
            </div>
            <img src="images/Rectangle 69.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>

</script>