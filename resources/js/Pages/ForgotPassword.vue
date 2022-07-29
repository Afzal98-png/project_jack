<template>
  <TransitionRoot appear :show="isOpen" as="template">
    <Dialog as="div" @close="closeModal" class="relative z-10">
      <TransitionChild
        as="template"
        enter="duration-300 ease-out"
        enter-from="opacity-0"
        enter-to="opacity-100"
        leave="duration-200 ease-in"
        leave-from="opacity-100"
        leave-to="opacity-0"
      >
        <div class="fixed inset-0 bg-black bg-opacity-25" />
      </TransitionChild>

      <div class="fixed inset-0 overflow-y-auto">
        <div
          class="flex min-h-full items-center justify-center p-4 text-center"
        >
          <TransitionChild
            as="template"
            enter="duration-300 ease-out"
            enter-from="opacity-0 scale-95"
            enter-to="opacity-100 scale-100"
            leave="duration-200 ease-in"
            leave-from="opacity-100 scale-100"
            leave-to="opacity-0 scale-95"
          >
            <DialogPanel
              class="
                w-full
                max-w-md
                transform
                overflow-hidden
                rounded-2xl
                bg-white
                p-6
                text-left
                align-middle
                shadow-xl
                transition-all
              "
            >
              <DialogTitle as="h3" class="grid place-content-center">
                <img class="w-24" src="images/logo.png" alt="logo" />
              </DialogTitle>
              <div>
                <h1 class="text-sm mt-1 mb-6 mt-5">No Need to worry !</h1>
              </div>
              <div>
                <h1 class="text-sm text-gray-500 mt-1 mb-3">Please enter email address</h1>
              </div>
              <div class="mt-2">
                <form>
                  <TextField
                    class="mb-10"
                    fieldtype="email"
                    name="email"
                    placeholder="Enter your email address"
                  >
                    Email
                  </TextField>
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
            </DialogPanel>
          </TransitionChild>
        </div>
      </div>
    </Dialog>
  </TransitionRoot>
</template>

<script setup>
import { ref } from "vue";
import {
  TransitionRoot,
  TransitionChild,
  Dialog,
  DialogPanel,
  DialogTitle,
} from "@headlessui/vue";
import TextField from "@/Components/Form/TextField.vue";

const isOpen = ref(true);
</script>