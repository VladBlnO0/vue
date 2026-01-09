<script setup>
import { useForm } from '@inertiajs/vue3';

const form = useForm({
  beds: 0,
  baths: 0,
  area: 0,
  city: null,
  code: null,
  street: null,
  neighborhood: null,
  price: 0,
});

function create() {
  form.post('/listing');
}
</script>

<template>
  <form @submit.prevent="create">
    <div>
      <div>
        <label>Beds</label>
        <input type="text" v-model.number="form.beds" />
        <div v-if="form['errors'].beds">
          {{ form.errors.beds }}
        </div>
      </div>

      <div>
        <label>Baths</label>
        <input type="text" v-model.number="form.baths" />
        <div v-if="form.errors.baths">
          {{ form.errors.baths }}
        </div>
      </div>

      <div>
        <label>Area</label>
        <input type="text" v-model.number="form.area" />
        <div v-if="form.errors.area">
          {{ form.errors.area }}
        </div>
      </div>

      <div>
        <label>City</label>
        <input type="text" v-model="form.city" />
        <div v-if="form.errors.city">
          {{ form.errors.city }}
        </div>
      </div>

      <div>
        <label>Code</label>
        <input type="text" v-model="form.code" />
        <div v-if="form.errors.code">
          {{ form.errors.code }}
        </div>
      </div>

      <div>
        <label>Street</label>
        <input type="text" v-model="form.street" />
        <div v-if="form.errors.street">
          {{ form.errors.street }}
        </div>
      </div>

      <div>
        <label>Neighborhood</label>
        <input type="text" v-model="form.neighborhood" />
        <div v-if="form.errors.neighborhood">
          {{ form.errors.neighborhood }}
        </div>
      </div>

      <div>
        <label>Price</label>
        <input type="text" v-model.number="form.price" />
        <div v-if="form.errors.price">
          {{ form.errors.price }}
        </div>
      </div>

      <div>
        <button type="submit">Create</button>
      </div>
    </div>
  </form>
</template>

<style scoped>
label {
  margin-right: 2em;
}

div {
  padding: 2px
}
</style>
