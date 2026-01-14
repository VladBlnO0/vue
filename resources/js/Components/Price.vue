<script setup>
import { computed } from 'vue'
const props = defineProps({
  price: [Number, String],
  locales: {
    type: String,
    default: 'en-US',
  },
  currency: {
    type: String,
    default: 'USD',
  },
})
const formattedPrice = computed(
  () => Number(props.price).toLocaleString('en-US', {
    style: 'currency',
    currency: props.currency,
    minimumFractionDigits: 0,
  }),
)
</script>

<template>
  <span>{{ formattedPrice }}</span>
</template>
