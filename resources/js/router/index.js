import { createRouter, createWebHistory } from 'vue-router';
import DashboardView  from "../views/DashboardView.vue";
import About from "../views/About.vue";

const routes = [
    { path: '/', component: DashboardView },
    { path: '/about', component: About },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
