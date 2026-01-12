<script setup>
import ListingAddress from '@/Components/ListingAddress.vue';
import ListingSpace from '@/Components/ListingSpace.vue';
import Price from '@/Components/Price.vue';
import Box from '@/Components/UI/Box.vue';

defineProps({
  listing: {
    type: Object,
  },
});
</script>

<template>
  <div class="flex flex-col-reverse md:grid md:grid-cols-12 gap-4">

    <Box class="md:col-span-7 flex items-center">
      <div class="w-full text-center text-gray-500">image</div>
    </Box>

    <div class="md:col-span-5 flex flex-col gap-2">

      <Box>
        <template #title>Info</template>
        <Price :price="listing.price" class="text-xl font-bold" />
        &nbsp;
        <Price :price="listing.price" :locales="'ja-JP'" :currency="'JPY'" class="text-xl font-bold" />
        <ListingSpace :listing="listing" class="text-lg" />
        <ListingAddress :listing="listing" class="text-gray-400" />
      </Box>

      <Box>
        <template #title>Buy</template>
        Buy
      </Box>
    </div>

  </div>
</template>
