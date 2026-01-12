<script setup>
defineProps({
  listing: {
    type: Object,
  },
});
</script>

<template>
  <span>
    {{ listing.street }}
    {{ listing.street_num }},
    {{ listing.city }}
  </span>
</template>
