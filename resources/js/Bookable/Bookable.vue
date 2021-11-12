<template>
  <div class="grid grid-cols-2 container mx-auto content-center">
    <div class="max-w-sm rounded overflow-hidden shadow-lg mt-5 mr-3">
      <img class="w-full" src="https://via.placeholder.com/60" alt="Sunset in the mountains">
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">{{ bookable.title }}</div>
        <p class="text-gray-700 text-base">
          {{ bookable.description}}
        </p>
      </div>
      <ReviewList :bookable-id="this.$route.params.id"/>
    </div>
    <!-- ... -->
    <div>
      <Availability :bookable-id="this.$route.params.id"/>
    </div>


  </div>
</template>

<script>

import Availability from "./Availability";
import ReviewList from "./ReviewList.vue";
export default {
  name: "Bookable",
  components: {
    Availability,
    ReviewList,
    },
  data(){
    return{
      bookable: ''
    }
  },
  created() {
    axios.get(`/api/bookables/${this.$route.params.id}`)
    .then(res=>{
      this.bookable = res.data.data;
    }).catch(err=>{
      console.log(err);
    });
  }
}
</script>

<style scoped>

</style>