<template>
    <div>
        <h1 class="text-green-700">{{ title }}</h1>
        <p class="text-red-800">{{ content }}</p>
    </div>
</template>

<script>
export default {
    name: "BookableListItem",
    props:['title' , 'content']
}
</script>

<style scoped>

</style>
