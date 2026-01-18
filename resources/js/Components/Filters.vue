<template>
  <form>
    <div class="mb-8 mt-4 flex flex-wrap gap-2">
      <div class="flex flex-nowrap items-center">
        <input class="input-filter-l" placeholder="Price from" type="text" />
        <input class="input-filter-r" placeholder="Price to" type="text" />
      </div>

      <div class="flex flex-nowrap items-center">
        <select class="input-filter-l w-28">
          <option :value="null">Beds</option>
          <option v-for="n in 5" :key="n" :value="n">{{ n }}</option>
          <option>6+</option>
        </select>
        <select class="input-filter-r w-28">
          <option :value="null">Baths</option>
          <option v-for="n in 5" :key="n" :value="n">{{ n }}</option>
          <option>6+</option>
        </select>
      </div>

      <div class="flex flex-nowrap items-center">
        <input class="input-filter-l" placeholder="Area from" type="text" />
        <input class="input-filter-r" placeholder="Area to" type="text" />
      </div>

      <button class="btn-normal" type="submit">Filter</button>
      <button type="reset">Reset</button>
    </div>
  </form>
</template>
