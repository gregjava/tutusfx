import Vue from 'vue'
import Router from 'vue-router'
import Home from './views/Home.vue'

Vue.use(Router)

export default new Router({
  mode: 'history',
  base: process.env.BASE_URL,
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/',
      name: 'about-us-eu',
      // route level code-splitting
      // this generates a separate chunk (about.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import(/* webpackChunkName: "about" */ './views/About.vue')
    },
    {
      path: '/',
      name: 'binary-options-guide-eu',
      // route level code-splitting
      // this generates a separate chunk (about.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import(/* webpackChunkName: "binguide" */ './views/Binary-options-guide.vue')
    },
    {
      path: '/',
      name: 'contact-us-eu',
      // route level code-splitting
      // this generates a separate chunk (about.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import(/* webpackChunkName: "contact" */ './views/Contact.vue')
    },
    {
      path: '/',
      name: 'faqs',
      component: () => import( './views/Faqs.vue')
    },
    {
      path: '/faqs-category/',
      name: 'binary-trading-en',
      component: () => import( './views/faqs-category/Binary-trading.vue')
    },
    {
      path: '/faqs-category/',
      name: 'deposits-en',
      component: () => import( './views/faqs-category/Deposits.vue')
    },
    {
      path: '/faqs-category/',
      name: 'forex-trading-en',
      component: () => import( './views/faqs-category/Forex-trading.vue')
    },
    {
      path: '/faqs-category/',
      name: 'general-en',
      component: () => import( './views/faqs-category/General.vue')
    },
    {
      path: '/faqs-category/',
      name: 'my-account-en',
      component: () => import( './views/faqs-category/My-account.vue')
    },
    {
      path: '/faqs-category/',
      name: 'withdrawals-en',
      component: () => import( './views/faqs-category/Withdrawals.vue')
    },
    {
      path: '/',
      name: 'sitemap-eu',
      component: () => import( './views/Sitemap.vue')
    },
    {
      path: '/sitemap-category/',
      name: 'languages-en',
      component: () => import( './views/sitemap-category/Languages.vue')
    },
    {
      path: '/sitemap-category/',
      name: 'legal-en',
      component: () => import( './views/sitemap-category/Legal.vue')
    },
    {
      path: '/sitemap-category/',
      name: 'menu-en',
      component: () => import( './views/sitemap-category/Menu.vue')
    },
    {
      path: '/sitemap-category/',
      name: 'site-extras-en',
      component: () => import( './views/sitemap-category/Site-extras.vue')
    },
    {
      path: '/sitemap-category/',
      name: 'theme-en',
      component: () => import( './views/sitemap-category/Theme.vue')
    }
  ]
})
