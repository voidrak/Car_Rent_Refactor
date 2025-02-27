import { createRouter, createWebHistory } from 'vue-router'
import { useAuthStore } from "@/stores/auth";
import HomeView from '../views/HomeView.vue'
import LoginPage from '@/views/Auth/LoginPage.vue'
import RegisterPage from '@/views/Auth/RegisterPage.vue'
import ContactUsPage from '@/views/User/ContactUsPage.vue'
import LocationPage from '@/views/User/LocationPage.vue'
import CarsListPage from '@/views/User/CarsListPage.vue'
import CarReservationPage from '@/views/User/CarReservationPage.vue'
import AdminHome from '@/views/Admin/AdminHome.vue'
import ManagerHome from '@/views/Manager/ManagerHome.vue'
import ManagerCarsPage from '@/views/Manager/ManagerCarsPage.vue'
import ManagerAddCarPage from '@/views/Manager/ManagerAddCarPage.vue'
import ManagerEditCarPage from '@/views/Manager/ManagerEditCarPage.vue'



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
    {
      path: '/manager/cars',
      name: 'ManagerCars',
      component: ManagerCarsPage,
      meta: { manager: true }
    },
    {
      path: '/manager/add-car',
      name: 'AddNewCar',
      component: ManagerAddCarPage,
      meta: { manager: true }
    },
    {
      path: '/manager/cars/car/edit',
      name: 'AddNewCar',
      component: ManagerEditCarPage,
      meta: { manager: true }
    },

  ],
})

router.beforeEach(async (to, from) => {
  const authStore = useAuthStore();
  await authStore.getUser();

  if (authStore.user?.role === "manager" && to.meta.guest) {
    return { name: "ManagerHome" };
  }
  if (authStore.user?.role === "manager" && to.meta.auth) {
    return { name: "ManagerHome" };
  }
  if (authStore.user?.role === "manager" && to.meta.admin) {
    return { name: "ManagerHome" };
  }



  if (authStore.user?.role === "admin" && to.meta.guest) {
    return { name: "AdminHome" };
  }
  if (authStore.user?.role === "admin" && to.meta.auth) {
    return { name: "AdminHome" };
  }
  if (authStore.user?.role === "admin" && to.meta.manager) {
    return { name: "AdminHome" };
  }



  if (authStore.user && to.meta.guest) {
    return { name: "Home" };
  }
  if (!authStore.user && to.meta.auth) {
    return { name: "Login" };
  }



});

export default router
