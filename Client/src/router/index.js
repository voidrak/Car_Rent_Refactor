import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import LoginPage from '@/views/Auth/LoginPage.vue'
import RegisterPage from '@/views/Auth/RegisterPage.vue'
import ContactUsPage from '@/views/User/ContactUsPage.vue'
import LocationPage from '@/views/User/LocationPage.vue'
import CarsListPage from '@/views/User/CarsListPage.vue'
import CarReservationPage from '@/views/User/CarReservationPage.vue'
import AdminHome from '@/views/Admin/AdminHome.vue'
import ManagerHome from '@/views/Manager/ManagerHome.vue'



const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'Home',
      component: HomeView,
      meta: { welcome: true }
    },
    {
      path: '/login',
      name: 'Login',
      component: LoginPage,
      meta: { guest: true }
    },
    {
      path: '/register',
      name: 'Register',
      component: RegisterPage,
      meta: { guest: true }
    },
    {
      path: '/contact-us',
      name: 'ContactUs',
      component: ContactUsPage,
    },
    {
      path: '/location',
      name: 'Location',
      component: LocationPage,
    },
    {
      path: '/cars',
      name: 'CarsList',
      component: CarsListPage,
    },
    {
      path: '/cars/car-reservation',
      name: 'CarReservation',
      component: CarReservationPage,
      meta: { auth: true }
    },
    {
      path: '/admin/home',
      name: 'AdminHome',
      component: AdminHome,
      meta: { admin: true }
    },
    {
      path: '/manager/home',
      name: 'ManagerHome',
      component: ManagerHome,
      meta: { manager: true }
    },

  ],
})

export default router
