<template>
  <div>
    <h1 class="text-blue-400">Availability</h1>
    <div class="w-full max-w-xs">
      <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
            From
          </label>
          <input v-model="from" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Start Date"
                 :class="[{'is-invalid': this.errorFor('from')}]">
        </div>
        <div class="mb-6">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
            To
          </label>
          <input v-model="to" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="text" placeholder="End Date"
          :class="[{'is-invalid': this.errorFor('to')}]">
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
  props:{
    bookableId: String
  },
  data(){
    return{
      from: '',
      to: '',
      status: null,
      errors: null
    }
  },
  methods:{
    check(){
      this.errors = null;
      axios.get(`/api/bookables/${this.bookableId}/availability?from=${this.from}&to=${this.to}`)
      .then((result) => {
        this.status = result.status;
      }).catch((err) => {
        if (422 == err.response.status){
          this.errors = err.response.data.errors;
        }
        this.status = err.response.status;
        console.log(err);
      });
    },
    errorFor(field){
      return this.hasErrors && this.errors[field] ? this.errors[field] : null;
    }
  },
  computed:{
    hasErrors(){
      return 422 == this.status && this.errors != null;
    },
    hasAvailability(){
      return 200 == this.status;
    },
    noAvailability(){
      return 400 == this.status;
    }
  },
  mounted() {
    console.log(this.$route.params.id);
  }
}
</script>

<style scoped>
.is-invalid{
  border-color: #e3342f;
}
</style>