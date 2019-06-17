<template>
  <v-app>
    <v-content>
      <router-view />
    </v-content>
  </v-app>
</template>

<script>
import About from './components/About'
import Contact from './components/Contact'
import Faqs from './components/Faqs'
import Homepage from './components/Homepage'
import Sitemap from './components/Sitemap'

export default {
  name: 'App',
  components: {
    About, Contact, Faqs, Homepage, Sitemap
  },
  data () {
    return {
      //
    }
  }
}
</script>
