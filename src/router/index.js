import Vue from 'vue'
import VueRouter from 'vue-router'
import Register from '@/components/Auth/Register'
import Home from '@/components/Home/Home'

Vue.use(VueRouter);

const scrollBehavior = function (to, from, savedPosition) {
    if (savedPosition) {
      // savedPosition is only available for popstate navigations.
      return savedPosition
    } else {
      const position = {}
      // scroll to anchor by returning the selector
      if (to.hash) {
        position.selector = to.hash
        if (document.querySelector(to.hash)) {
          return position
        }
  
        // if the returned position is falsy or an empty object,
        // will retain current scroll position.
        return false
      }
  
      return new Promise(resolve => {
        // check if any matched route config has meta that requires scrolling to top
        if (to.matched.some(m => m.meta.scrollToTop)) {
          // coords will be used if no selector is provided,
          // or if the selector didn't match any element.
          position.x = 0
          position.y = 0
        }
  
        // wait for the out transition to complete (if necessary)
        this.app.$root.$once('triggerScroll', () => {
          // if the resolved position is falsy or an empty object,
          // will retain current scroll position.
          resolve(position)
        })
      })
    }
  }

export default new VueRouter({
    mode: 'history',
    scrollBehavior,
    routes: [
        {
            path: '/',
            name: 'Home',
            component: Home,
            meta: { scrollToTop: true }
        },
        {
            path: '/register',
            name: 'Register',
            component: Register,
            meta: { scrollToTop: true }
        }
    ],
    methods: {
        afterLeave () {
          this.$root.$emit('triggerScroll')
        }
    }
})