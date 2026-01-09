<template>
  <Link href="/">
    Home
  </Link>&nbsp;
  <Link href="/show">
    Show
  </Link>
  <div v-if="flashSuccess" class="success">
    {{ flashSuccess }}
  </div>
  <slot />
</template>

<script setup>
import { Link, usePage } from "@inertiajs/vue3";
import { computed } from "vue";
const page = usePage();

const flashSuccess = computed(
  () => page.props.flash.success,
);
</script>

<style scoped>
.success {
  text-decoration: none;
  color: green;
  font-weight: bold;
}
</style>
