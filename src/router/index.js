import Vue from 'vue'
import VueRouter from 'vue-router'
import indx from '../views/indx.vue'
import ListHobbie from '../views/ListHobbie.vue'

Vue.use(VueRouter)

const routes = [
   {
    path:'/',
    name:'index',
    component:indx
   
  },
  {
    path:'/Hobbie',
    name:'Hobbie',
    component:ListHobbie

  },
  
]

const router = new VueRouter({
  routes
})

export default router
