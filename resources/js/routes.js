import Vue from 'vue';
import VueRouter from 'vue-router';
import Bookables from "./bookables/Bookables";

Vue.use(VueRouter);

const routes = [
    {
        path: '/',
        component: Bookables,
        name: 'home'
    },
    // {
    //     path: '/test',
    //     component: Test
    // }
];

const router = new VueRouter({
    mode:'history',
    routes:routes
});

export default router;
