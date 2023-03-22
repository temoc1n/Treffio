import { createRouter, createWebHistory } from 'vue-router'
const routes = [
  {
    path: '/',
    name: 'home',
    component: () => import('../views/MainDashboard.vue')
  },
  {
    path: '/new-task',
    name: 'new-task',
    component: () => import('../views/NewTask.vue')
  },
  {
    path: '/list-tasks',
    name: 'list-tasks',
    component: () => import('../views/ListTasks.vue')
  },
  {
    path: '/about',
    name: 'about',
    component: () => import('../views/AboutView.vue')
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
