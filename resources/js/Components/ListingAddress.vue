<script setup>
defineProps({
  listing: {
    type: Object,
  },
});
</script>

<template>
  <span>
    {{ listing.title }}
    {{ listing.city }}
    {{ listing.baths }}
    {{ listing.beds }}
    {{ listing.price }}
  </span>
</template>
