<template>
    <div>
        <h6 class="text-center text-green-500">Review List</h6>
        <div class="review" v-for="(review , index) in reviews" :key="review.id">
            <div class="flex mb-4">
                <div class="w-3/4 h-12">Piotr Jura</div>
                <div class="w-1/4 h-12">
                  {{ review.rating }}
                  <star-rating></star-rating>
                </div>
            </div>
            <div class="flex mb-4 mt-0">
                <div class="w-full h-12">{{ review.created_at | fromNow}}</div>
            </div>
            <div class="flex mb-4 mt-0">
                <div class="w-full h-12">{{ review.content }}</div>
            </div>
            <hr>
        </div>
    
    </div>
</template>
<script>
// import moment from 'moment';
import StarRating from "../shared/components/StarRating";
export default {
  components: {StarRating},
  props:{
    bookableId: String
  },
  data(){
    return{
      reviews: null
    }
  },
  created() {
    axios.get(`/api/bookables/${this.bookableId}/reviews`)
    .then(res=>{
       this.reviews = res.data.data;
      console.log(res)
    }).catch(err=>{
      console.log(err);
    });
  },
  // filters:{
  //   fromNow(value){
  //     return moment(value).fromNow();
  //   }
  // }
}
</script>