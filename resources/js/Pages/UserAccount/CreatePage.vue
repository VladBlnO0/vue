<script setup>
import { useForm, Link } from "@inertiajs/vue3";

const form = useForm({
  name: null,
  email: null,
  password: null,
  password_confirmation: null,
});

function register() {
  // eslint-disable-next-line no-undef
  form.post(route("user-account.store"));
}
</script>

<template>
  <form @submit.prevent="register">
    <div class="mx-auto w-1/2">
      <div>
        <label id="name" class="label">Name</label>

        <input id="name" v-model="form.name" class="input" type="text" />
        <div v-if="form.errors.name" class="input-error">
          {{ form.errors.name }}
        </div>
      </div>

      <div class="mt-4">
        <label id="email" class="label">Email</label>

        <input id="email" v-model="form.email" class="input" type="text" />
        <div v-if="form.errors.email" class="input-error">
          {{ form.errors.email }}
        </div>
      </div>

      <div class="mt-4">
        <label id="password" class="label">Password</label>

        <input
          id="password"
          v-model="form.password"
          class="input"
          type="password"
        />
        <div v-if="form.errors.password" class="input-error">
          {{ form.errors.password }}
        </div>
      </div>

      <div class="mt-4">
        <label id="password_confirmation" class="label">Confirm Password</label>

        <input
          id="password_confirmation"
          v-model="form.password_confirmation"
          class="input"
          type="password"
        />
        <div v-if="form.errors.password_confirmation" class="input-error">
          {{ form.errors.password_confirmation }}
        </div>
      </div>

      <div class="mt-4">
        <button class="btn-primary w-full" type="submit">Register</button>
      </div>

      <div class="mt-2 text-center">
        <Link :href="route('login')" class="text-gray-500 text-sm">Login</Link>
      </div>
    </div>
  </form>
</template>
