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
      const p = new Promise((resolve , reject)=>{
        console.log(resolve);
        console.log(reject);
        setTimeout(()=>resolve("Hello"), 5000);
      }).then(result=>console.log(result));

      axios.get('/api/all')
    .then(result=>{
      this.bookables = result.data;
    }).catch(err=>{
        console.log(err);
      });
  }
}
</script>

<style scoped>

</style>
