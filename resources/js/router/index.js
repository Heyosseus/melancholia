import { createRouter, createWebHistory } from 'vue-router';
import DashboardView  from "../components/DashboardView.vue";
import About from "../components/About.vue";

const routes = [
    { path: '/', component: DashboardView },
    { path: '/about', component: About },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
