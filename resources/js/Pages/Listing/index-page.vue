<script setup>
import { Link } from '@inertiajs/vue3';
import ListingAddress from '@/Components/ListingAddress.vue';
import Box from "@/Components/UI/Box.vue";
import ListingSpace from '@/Components/ListingSpace.vue';
import Price from '@/Components/Price.vue';

defineProps({
  listings: {
    type: Array,
  },
});
</script>

<template>
  <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-2">
    <Box v-for="listing in listings" :key="listing.id">

      <div>
        <Link :href="route('listing.show', listing.id)">
          <Price :price="listing.price" class="text-xl font-bold" />
          &nbsp;
          <Price :price="listing.price" :locales="'ja-JP'" :currency="'JPY'" class="text-xl font-bold" />
          <ListingSpace :listing="listing" class="text-lg" />
          <ListingAddress :listing="listing" class="text-gray-400" />
        </Link>
      </div>

      <div>
        <Link :href="route('listing.edit', listing.id)">Edit Listing</Link>
      </div>

      <div>
        <Link :href="route('listing.destroy', listing.id)" method="delete" as="button">Delete Listing</Link>
      </div>

    </Box>
  </div>
</template>
