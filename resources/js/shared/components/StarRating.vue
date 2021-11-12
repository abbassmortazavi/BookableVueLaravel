<template>
  <div class="flex">
    <i class="fa fa-star" v-for="star in fullStars" :key="'full' + star"></i>
    <i class="fas fa-star-half-alt" v-if="halfStar"></i>
    <i class="far fa-star" v-for="star in emptyStars" :key="'empty' + star"></i>
  </div>
</template>

<script>
export default {
  name: "StarRating",
  props:{
    rating: Number
  },
  computed:{
    halfStar(){
      return true;
    },
    fullStars(){
      return 3;
    },
    emptyStars(){
      return 1;
    }
  }
}
</script>

<style scoped>

</style>