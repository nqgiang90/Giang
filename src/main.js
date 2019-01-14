import '@babel/polyfill'
import Vue from 'vue'
import './plugins/bootstrap-vue'
import './plugins/bootstrap-vue'
import VueYoutube from 'vue-youtube'
var VueScrollTo = require('vue-scrollto')
import App from './App.vue'

Vue.use(VueScrollTo, {
  container: "body",
  duration: 800,
  easing: "ease",
  offset: -50,
  force: true,
  cancelable: true,
  onStart: false,
  onDone: false,
  onCancel: false,
  x: false,
  y: true
})

Vue.use(VueYoutube)

Vue.config.productionTip = false

new Vue({
  render: h => h(App),
}).$mount('#app')
