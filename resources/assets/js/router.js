import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter);

const routes = [
{ path: '/login', component: require('./components/Auth/Login.vue') },
{ path: '/register', component: require('./components/Auth/Login.vue') }
];

const router = new VueRouter({
	routes,
	mode: 'history'
});

export default router;