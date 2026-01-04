<script setup>
defineProps({
  'message': String,
});
</script>

<template>
  <div>
    Hi {{ message }}
  </div>
</template>
