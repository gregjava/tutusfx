<template>
  <v-app>
    <v-content>
      <Homepage />
    </v-content>
  </v-app>
</template>

<script>
import Homepage from './components/Homepage'

export default {
  name: 'App',
  components: {
    Homepage
  },
  computed() {
      library.add(fas);
  },
  data () {
    return {
      //
    }
  }
}
</script>
