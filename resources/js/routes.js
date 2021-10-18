import Vue from 'vue';
import VueRouter from 'vue-router';
import Bookables from "./bookables/Bookables";
import Bookable from "./Bookable/Bookable";

Vue.use(VueRouter);

const routes = [
    {
        path: '/',
        component: Bookables,
        name: 'home'
    },
    {
        path: '/bookable/:id',
        component: Bookable,
        name: "Bookable"
    }
];

const router = new VueRouter({
    mode:'history',
    routes:routes
});

export default router;
