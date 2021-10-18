<template>
  <div class="max-w-sm rounded overflow-hidden shadow-lg mt-5 float-right mr-3">
    <img class="w-full" src="https://via.placeholder.com/60" alt="Sunset in the mountains">
    <div class="px-6 py-4">
      <router-link :to="{name: 'Bookable' , params: {id:id}}">
        <div class="font-bold text-xl mb-2">{{ title }}</div>
      </router-link>

      <p class="text-gray-700 text-base">
        {{ description}}
      </p>
    </div>
    <div class="px-6 pt-4 pb-2">
      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
    </div>
  </div>
</template>

<script>
export default {
    name: "BookableListItem",
    props:['title' , 'description' , 'id']
}
</script>

<style scoped>

</style>
