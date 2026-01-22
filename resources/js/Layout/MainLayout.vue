<script setup>
import { Link, usePage } from "@inertiajs/vue3";
import { computed } from "vue";

const page = usePage();
const flashSuccess = computed(() => page.props.flash.success);
const user = computed(() => page.props.user);
</script>

<template>
  <header
    class="border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 w-full"
  >
    <div class="container mx-auto">
      <nav class="p-4 flex items-center justify-between">
        <div class="text-lg font-medium">
          <Link :href="route('listing.index')"> Listing </Link>
        </div>

        <div class="text-xl text-blue-600 dark:text-blue-300">
          <Link :href="route('listing.index')">Estate For Sale</Link>
        </div>

        <div v-if="user" class="flex items-center gap-4">
          <Link :href="route('realtor.listing.index')" class="text-gray-500">{{
            user.name
          }}</Link>
          <Link :href="route('realtor.listing.create')" class="btn-primary">
            Create Listing
          </Link>
          <div>
            <Link :href="route('logout')" as="button" method="delete"
              >Logout</Link
            >
          </div>
        </div>
        <div v-else class="flex gap-2 items-center">
          <Link :href="route('user-account.create')">Register</Link>
          <Link :href="route('login')">Sign-In</Link>
        </div>
      </nav>
    </div>
  </header>
  <main class="container mx-auto p-4 w-full">
    <div
      v-if="flashSuccess"
      class="p-2 mb-4 border rounded shadow-sm border-green-200 dark:border-green-700 bg-green-50 dark:bg-green-900 font-bold"
    >
      {{ flashSuccess }}
    </div>
    <slot />
  </main>
</template>
