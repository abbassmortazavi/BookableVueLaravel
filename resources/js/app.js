require('./bootstrap');
window.Vue = require('vue').default;
import "tailwindcss/tailwind.css";
import router from './routes';
import Index from "./components/Index";


// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// Vue.component('bookable-list-item', require('./bookables/BookablesListItem').default);


const app = new Vue({
    el: '#app',
    router,
    components:{
        index:Index
    }
});
