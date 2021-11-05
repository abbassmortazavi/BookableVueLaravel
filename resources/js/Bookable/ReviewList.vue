<template>
    <div>
        <h6 class="text-center text-green-500">Review List</h6>
        <!-- <div class="border-bottom">
            <div class="row">
                <div class="col-md-6">
                    Piotr Jura
                </div>
                <div class="col-md-6">Star Rating</div>
            </div>
            <div class="row">
                <div class="col-md-12">Added 5 minutes ago</div>
            </div>
            <div class="row">
                <div class="col-md-12">Content Of The Review</div>
            </div>
        </div> -->
        <div class="review" v-for="number in 3" :key="number">
            <div class="flex mb-4">
                <div class="w-3/4 h-12">Piotr Jura</div>
                <div class="w-1/4 h-12">Star Rating</div>
            </div>
            <div class="flex mb-4 mt-0">
                <div class="w-full h-12">Added 5 minutes ago</div>
            </div>
            <div class="flex mb-4 mt-0">
                <div class="w-full h-12">Content Of The Review</div>
            </div>
            <hr>
        </div>
    
    </div>
</template>