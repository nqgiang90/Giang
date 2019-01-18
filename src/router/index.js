import Vue from 'vue'
import VueRouter from 'vue-router'
import Register from '@/components/Auth/Register'
import Home from '@/components/Home/Home'

Vue.use(VueRouter);

export default new VueRouter({
    scrollBehavior() {
        return { x: 0, y: 0 };
    },
    routes: [
        {
            path: '/',
            name: 'Home',
            component: Home
        },
        {
            path: '/register',
            name: 'Register',
            component: Register
        }
    ]
})