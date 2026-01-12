<script setup>
defineProps({
  listing: {
    type: Object,
  },
});
</script>

<template>
  <div>
    <span class="font-bold">
      {{ listing.beds }}
    </span>
    beds
    <span class="text-gray-400">|</span>
    
    &nbsp;
    <span class="font-bold">
      {{ listing.baths }}
    </span>
    baths
    <span class="text-gray-400">|</span>

    &nbsp;
    <span class="font-bold">
      {{ listing.area }}
    </span>
    area
  </div>
</template>
