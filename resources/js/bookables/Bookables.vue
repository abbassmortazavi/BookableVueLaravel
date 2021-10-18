<template>
    <div class="container-fluid">
      <div v-for="(book,id) in bookables" :key="book.id">
        <BookableListItem v-bind="book"/>
      </div>

    </div>
</template>

<script>
import BookableListItem from "./BookablesListItem";
export default {
    name: "Bookables",
    components:{
        BookableListItem
    },
  data(){
      return{
        bookables : []
      }
  },
  created() {
      axios.get('/api/bookables')
    .then(result=>{
      this.bookables = result.data.data;
    }).catch(err=>{
        console.log(err);
      });
  }
}
</script>

<style scoped>

</style>
