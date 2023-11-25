// Composables
import { createRouter, createWebHistory } from "vue-router";

const routes = [
  {
    path: "/",
    component: () => import("@/layouts/default/Default.vue"),
    children: [
      {
        path: "/page1",
        name: "Page1",
        component: () => import("@/views/Page1.vue"),
      },
      {
        path: "/page2",
        name: "Page2",
        component: () => import("@/views/Page2.vue"),
      },
      {
        path: "/labtwo",
        name: "labtwo",
        component: () => import("@/views/Labtwo.vue"),
      },
      {
        path: "/index",
        name: "index",
        component: () => import("@/views/index.vue"),
      },
    ],
  },
  

];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;
