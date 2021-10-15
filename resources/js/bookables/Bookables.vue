<template>
    <div class="flex justify-center">
        <BookableListItem content="this is first content" title="Jafar"/>
        <BookableListItem content="this is second content" title="Taghi"/>
    </div>
</template>

<script>
import BookableListItem from "./BookablesListItem";
export default {
    name: "Bookables",
    components:{
        BookableListItem
    }
}
</script>

<style scoped>

</style>
