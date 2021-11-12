require('./bootstrap');
window.Vue = require('vue').default;
import "tailwindcss/tailwind.css";
import router from './routes';
import Index from "./components/Index";
import moment from "moment";

//load components
import StarRating from "./shared/components/StarRating";
Vue.component('star-rating' , StarRating);

Vue.filter('fromNow' , value=>moment(value).fromNow());
// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// Vue.component('bookable-list-item', require('./bookables/BookablesListItem').default);


const app = new Vue({
    el: '#app',
    router,
    components:{
        index:Index
    }
});
