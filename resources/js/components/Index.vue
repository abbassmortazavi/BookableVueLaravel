<template>
    <div>
        <nav class="flex px-8 bg-gray-100 justify-between">
            <!-- left side -->
            <div class="flex items-center space-x-3">
                <router-link :to="{name:'home'}" class="block p-3 cursor-pointer hover:bg-yellow-300 text-blue-900 hover:text-red-600 rounded transition duration-300">Home</router-link>
                <router-link to="/test" class="block p-3 cursor-pointer hover:bg-yellow-300 text-blue-900 hover:text-red-600 rounded transition duration-300">Test</router-link>
                <a class="block p-3 cursor-pointer hover:bg-yellow-300 text-blue-900 hover:text-red-600 rounded transition duration-300">Pricing</a>
            </div>

            <!-- right side -->
            <div class="flex items-center space-x-3">
                <a class="block p-3">Sign Up</a>
                <a class="block p-3">Login</a>
            </div>
        </nav>
        <router-view></router-view>
    </div>
</template>

<script>
export default {
    name: "Index"
}
</script>

<style scoped>

</style>
