<script setup>
import { useForm, Link } from '@inertiajs/vue3';

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
        <label id="email" class="label">Email</label>

        <input id="email" v-model="form.email" class="input" type="text" />
        <div v-if="form.errors.email" class="input-error">{{ form.errors.email }}</div>
      </div>

      <div class="mt-4">
        <label id="password" class="label">Password</label>

        <input id="password" v-model="form.password" class="input" type="password" />
        <div v-if="form.errors.password" class="input-error">{{ form.errors.password }}</div>
      </div>

      <div class="mt-4">
        <button class="btn-primary w-full" type="submit">Login</button>

        <div class="mt-2 text-center">
          <Link :href="route('user-account.create')" class="text-gray-500 text-sm">Register</Link>
        </div>

      </div>

    </div>
  </form>
</template>
