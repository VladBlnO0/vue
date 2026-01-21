<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
  links: Array,
});
</script>

<template>
  <div class="flex gap-1">
    <template v-for="(link, index) in links" :key="index">
      <Link
        v-if="link.url"
        :class="{ 'bg-blue-500 dark:bg-blue-800 text-white': link.active }"
        :href="link.url"
        class="py-2 px-4 rounded-md"
        v-html="link.label"
      />
      <button
        v-else
        class="py-2 px-4 rounded-md text-gray-500 cursor-not-allowed"
        disabled
        v-html="link.label"
      />
    </template>
  </div>
</template>

<style scoped></style>
