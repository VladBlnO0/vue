<script setup>
import { useForm } from '@inertiajs/vue3';

const form = useForm({
  name: null,
  email: null,
  password: null,
  password_confirmation: null,
})

function register() {
  // eslint-disable-next-line no-undef
  form.post('');
}
</script>

<template>
  <form @submit.prevent="register">
    <div class="mx-auto w-1/2">

      <div>
        <label class="label" id="name">Name</label>

        <input type="text" id="name" class="input" v-model="form.name" />
        <div class="input-error" v-if="form.errors.name">{{ form.errors.name }}</div>
      </div>

      <div class="mt-4">
        <label class="label" id="email">Email</label>

        <input type="text" id="email" class="input" v-model="form.email" />
        <div class="input-error" v-if="form.errors.email">{{ form.errors.email }}</div>
      </div>

      <div class="mt-4">
        <label class="label" id="password">Password</label>

        <input type="password" id="password" class="input" v-model="form.password" />
        <div class="input-error" v-if="form.errors.password">{{ form.errors.password }}</div>
      </div>

      <div class="mt-4">
        <label class="label" id="password_confirmation">Confirm Password</label>

        <input type="password" id="password_confirmation" class="input" v-model="form.password_confirmation" />
        <div class="input-error" v-if="form.errors.password_confirmation">{{ form.errors.password_confirmation }}</div>
      </div>

      <div class="mt-4">
        <button class="btn-primary w-full" type="submit">Register</button>
      </div>

    </div>
  </form>
</template>
