import 'material-design-icons-iconfont/dist/material-design-icons.css'
import '@mdi/font/css/materialdesignicons.css'
import 'fontawesome'
import 'font-awesome/css/font-awesome.min.css'
import './plugins/vuetify'
import Vue from 'vue'
import Vuetify from 'vuetify'
import App from './App.vue'
import router from './router'
import store from './store'

Vue.config.productionTip = false

new Vue({
  router,
  store,
  Vuetify,
  render: h => h(App)
}).$mount('#app')
