import 'material-design-icons-iconfont/dist/material-design-icons.css'
import '@mdi/font/css/materialdesignicons.css'
import '@fortawesome/fontawesome-svg-core'
import '@fortawesome/vue-fontawesome'
import '@fortawesome/pro-light-svg-icons'
import '@fortawesome/free-brands-svg-icons'
import 'fontawesome'
import 'font-awesome/css/font-awesome.min.css'
import './plugins/vuetify'
import Vue from 'vue'
import Vuetify from 'vuetify'
import App from './App.vue'
import router from './router'
import store from './store'

Vue.use(Vuetify)

Vue.config.productionTip = false

new Vue({
  router,
  store,
  Vuetify,
  render: h => h(App)
}).$mount('#app')
