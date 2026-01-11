<template>
  <header class="border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 w-full">
    <div class="container mx-auto">
      <nav class="p-4 flex items-center justify-between">
        <div class="text-lg font-medium">
          <Link :href="route('listing.index')">
            Listing
          </Link>
        </div>

        <div class="text-xl text-indigo-600 dark:text-indigo-300">x</div>

        <div class="text-xl text-indigo-600 dark:text-indigo-300">
          <Link :href="route('listing.create')"
            class="bg-indigo-600 hover:bg-indigo-500 text-white font-medium p-2 rounded-md">
            Create Listing
          </Link>
        </div>
      </nav>
    </div>
  </header>
  <main class="container mx-auto p-4">
    <div v-if="flashSuccess"
      class="p-2 mb-4 border rounded shadow-sm border-green-200 dark:border-green-700 bg-green-50 dark:bg-green-900 font-bold">
      {{ flashSuccess }}
    </div>
    <slot />
  </main>

</template>

<script setup>
import { Link, usePage } from "@inertiajs/vue3";
import { computed } from "vue";

const page = usePage();
const flashSuccess = computed(
  () => page.props.flash.success,
);
</script>
