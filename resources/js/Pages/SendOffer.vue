<template>
  <Head title="Home" />

  <div class="min-h-screen bg-white grid grid-cols-7">
    <!-- Home Left Index -->
    <ProviderIndex />

    <div class="col-span-6 pl-[59px] pr-[115px] pt-[59px] pb-[59px]">
      <!-- Home Head -->
      <HomeHead />
      <!-- Main Content -->
      <div>
        <!-- Services -->
        <div class="mt-[10px]">
          <div>
            <h1 class="text-[16px] font-bold">Send Offer</h1>
          </div>
          <div class="grid grid-cols-3 gap-[37px] mt-[45px]">
            <div class="col-span-2">
              <div>
                <TextField
                  fieldtype="text"
                  name="service_cost"
                  placeholder="Enter estimated cost of the service"
                >
                  <h1 class="font-bold">Service Cost</h1>
                </TextField>
              </div>
              <div>
                <TextField
                  fieldtype="text"
                  name="due_time"
                  placeholder="Enter estimated time"
                >
                  <h1 class="font-bold">Due Time</h1>
                </TextField>
              </div>
              <div>
                <DescriptionTextField
                  fieldtype="text"
                  name="details"
                  placeholder="Describe your way of service"
                >
                  <h1 class="font-bold">Details</h1>
                </DescriptionTextField>
              </div>
              <div class="mt-[57px]">
                <FormButton>Send Offer</FormButton>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
</script>