import { createRouter, createWebHistory } from 'vue-router'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: () => import('../views/HomeView.vue')
    },
    {
      path: '/about',
      name: 'about',
      component: () => import('../views/AboutView.vue')
    },
    {
      path: "/login",
      name: 'login',
      component: () => import("../views/LoginView.vue")
    },
    {
      path: "/register",
      name: 'register',
      component: () => import("../views/RegisterView.vue")
    },
    {
      path: "/beer",
      name: 'beer',
      component: () => import("../views/BeersView.vue")
    },
    {
      path: "/pedido",
      name: 'pedido',
      component: () => import("../views/PedidoView.vue")
    },
    {
      path: "/historial",
      name: 'historial',
      component: () => import("../views/HistorialView.vue")
    }
  ]
})

export default router
