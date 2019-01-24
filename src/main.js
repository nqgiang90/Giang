import '@babel/polyfill'
import Vue from 'vue'
import './plugins/bootstrap-vue'
import './plugins/bootstrap-vue'
import VueYoutube from 'vue-youtube'
var VueScrollTo = require('vue-scrollto')
import Aplayer from 'vue-aplayer'
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
import App from './App.vue'
import router from './router'
import responsive from 'vue-responsive';
import VueAwesomeSwiper from 'vue-awesome-swiper'
import 'swiper/dist/css/swiper.css'
import { loadProgressBar } from 'axios-progress-bar'
import 'axios-progress-bar/dist/nprogress.css'
loadProgressBar();
Vue.use(VueAwesomeSwiper, /* { default global options } */)

Vue.use(responsive);

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

Vue.use(ElementUI);
Vue.use(VueYoutube);
Vue.use(Aplayer);

Vue.config.productionTip = false

new Vue({
  router,
  render: h => h(App),
}).$mount('#app')
