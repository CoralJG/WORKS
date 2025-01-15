import { createRouter, createWebHistory } from '@ionic/vue-router';
import { RouteRecordRaw } from 'vue-router';
import HomePage from '../views/HomePage.vue'
import InputPage from '@/views/InputPage.vue';

const routes: Array<RouteRecordRaw> = [
	{
		path: '/',
		redirect: '/home'
	},
	{
		path: '/home',
		name: 'Home',
		component: HomePage
	},
	{
		path: '/input',
		name: 'input',
		component: InputPage
	}
]

const router = createRouter({
	history: createWebHistory(import.meta.env.BASE_URL),
	routes
})

export default router
