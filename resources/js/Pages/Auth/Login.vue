<script setup>
import { useForm } from '@inertiajs/vue3';

const form = useForm({
  email: null,
  password: null,
})

function login() {
  // eslint-disable-next-line no-undef
  form.post(route('login.store'));
}
</script>

<template>
  <form @submit.prevent="login">
    <div class="mx-auto w-1/2">
      <div>
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
        <button class="btn-primary w-full" type="submit">Login</button>
      </div>

    </div>
  </form>
</template>
