import { createRouter, createWebHistory } from 'vue-router';
import DashboardView  from "../views/DashboardView.vue";
import About from "../views/About.vue";
import Token from "../views/Token.vue";

const routes = [
    { path: '/', component: DashboardView },
    { path: '/about', component: About },
    { path: '/token', component: Token },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
