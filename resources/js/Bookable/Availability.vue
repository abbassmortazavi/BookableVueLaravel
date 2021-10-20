<template>
  <div>
    <h1 class="text-blue-400">Availability</h1>
    <div class="w-full max-w-xs">
      <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
            From
          </label>
          <input v-model="from" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Start Date">
        </div>
        <div class="mb-6">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
            To
          </label>
          <input v-model="to" class="shadow appearance-none rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="text" placeholder="End Date">
        </div>
        <div class="flex items-center justify-between">
          <button @click="check" class="bg-blue-500 w-200 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
            Check
          </button>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
export default {
  name: "Availability",
  data(){
    return{
      from: '',
      to: ''
    }
  },
  methods:{
    check(){
      alert('ok');
    }
  }
}
</script>

<style scoped>

</style>