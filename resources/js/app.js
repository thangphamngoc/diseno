require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'
import { routes }  from './index';

Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'hash',
    routes
})

const app = new Vue({
    el: '#app',
    router
});

// require('./bootstrap');

// window.Vue = require('vue');

// // import VueRouter from 'vue-router'
// // import { routes }  from './index';

// // Vue.use(VueRouter)

// // const router = new VueRouter({
// //     mode: 'hash',
// //     routes
// // })
// Vue.component('example-component',require('./components/ExampleComponent.vue').default);
// // Vue.component('user',require('./components/User.vue').default);

// const app = new Vue({
//     el: '#app',
//     router
// });
