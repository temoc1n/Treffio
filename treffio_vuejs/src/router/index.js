import { createRouter, createWebHistory } from 'vue-router'
import MainDashboard from '../views/MainDashboard'
const routes = [
  {
    path: '/',
    name: 'home',
    component: MainDashboard
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
    path: '/saved-tasks',
    name: 'saved-tasks',
    component: () => import('../views/SavedTasks.vue')
  },
  {
    path: '/trash',
    name: 'trash',
    component: () => import('../views/TrashView.vue')
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
