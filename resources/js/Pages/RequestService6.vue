<template>
  <Head title="Request Service 6" />

  <div class="min-h-screen bg-[#FFFFFF] grid grid-cols-7">
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
              class="
                flex
                justify-between
                text-sm
                mt-[44px]
                mb-[26px]
                mr-[115px]
              "
            >
              <div>
                <h1 class="text-[16px] font-bold">Request Service</h1>
              </div>
            </div>
            <div>
              <form action="">
                <div class="mb-[30px]">
                  <SelectOptionField
                    selectedOption="Deportation and Baggage transfer"
                    name="service_type"
                  >
                    <h1 class="font-bold">Service Type</h1>
                  </SelectOptionField>
                </div>
                <div class="mb-[30px]">
                  <SelectOptionField selectedOption="Free Service" name="free_service">
                    <h1 class="font-bold">Free Service</h1>
                  </SelectOptionField>
                </div>
                <div class="mb-[30px]">
                  <SelectOptionField selectedOption="kind" name="kind">
                    <h1 class="font-bold">What Kind</h1>
                  </SelectOptionField>
                </div>
                <div class="mb-[30px]">
                  <SelectOptionField selectedOption="weight" name="weight">
                    <h1 class="font-bold">Weight</h1>
                  </SelectOptionField>
                </div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="my_location"
                    placeholder="Location"
                  >
                    <h1 class="font-bold">My Location</h1>
                  </TextField>
                </div>
                <div class="mb-[30px]">
                  <TextField
                    fieldtype="text"
                    name="to_location"
                    placeholder="To Location"
                  >
                    <h1 class="font-bold">To Location</h1>
                  </TextField>
                </div>
                <div class="mb-[94px]">
                  <FormButton>Post Request</FormButton>
                </div>
              </form>
            </div>
          </div>
          <div>
            <ImageField />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
</script>