<template>
  <Head title="Request Service 4,5" />

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
                <div>
                  <SelectOptionField
                    selectedOption="Deportation and Baggage transfer"
                    name="service_type"
                  >
                    <h1 class="font-bold">Service Type</h1>
                  </SelectOptionField>
                </div>
                <div>
                  <SelectOptionField selectedOption="shipment_type" name="type">
                    <h1 class="font-bold">Shipment Type</h1>
                  </SelectOptionField>
                </div>
                <div>
                  <TextField
                    fieldtype="text"
                    name="weight"
                    placeholder="Weight"
                  >
                    <h1 class="font-bold">Location From</h1>
                  </TextField>
                </div>
                <div>
                  <TextField
                    fieldtype="text"
                    name="size"
                    placeholder="Size"
                  >
                    <h1 class="font-bold">Size</h1>
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