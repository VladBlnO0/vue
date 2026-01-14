<script setup>
import { Link } from '@inertiajs/vue3';
import ListingAddress from '@/Components/ListingAddress.vue';
import Box from "@/Components/UI/Box.vue";
import ListingSpace from '@/Components/ListingSpace.vue';
import Price from '@/Components/Price.vue';
import { useMonthlyPayment } from '@/Composable/useMonthlyPayment';

const props = defineProps({listing: Object});
const { monthlyPayment } = useMonthlyPayment(props.listing.price, 2.5, 25);
</script>

<template>
  <Box>

    <div>
      <Link :href="route('listing.show', listing.id)">
        <div class="flex gap-1 items-center">
          <Price :price="listing.price" class="text-xl font-bold" />
          <div class="text-gray-500 text-xs">
            <Price :price="monthlyPayment" />
          </div>
        </div>
        <ListingSpace :listing="listing" class="text-lg" />
        <ListingAddress :listing="listing" class="text-gray-400" />
      </Link>
    </div>

    <div>
      <Link :href="route('listing.edit', listing.id)" as="button" class="btn-primary mb-4">Edit Listing</Link>
    </div>

    <div>
      <Link :href="route('listing.destroy',{ listing: listing.id})" method="DELETE" as="button" class="btn-primary">Delete Listing</Link>
    </div>

  </Box>
</template>
