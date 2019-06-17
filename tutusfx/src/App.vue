<template>
  <div id="app">
    <Home msg="Welcome to Tutusfx Vue.js Version"/>
  </div>
</template>

<script>
import Home from './components/Home.vue'

export default {
  name: 'app',
  components: {
    Home
  }
}
</script>

<style>
  #app {
    background: #004300; color: #ffffff; background: -webkit-linear-gradient(to right, #004300, #7B43FF, #004300); background: -moz-linear-gradient(to right, #004300, #7B43FF, #004300); background: -o-linear-gradient(to right, #004300, #7B43FF, #004300); background: linear-gradient(to right, #004300, #7B43FF, #004300); display: inline-block; color: #ffffff; font-family: Arial, Helvetica, sans-serif; margin: 0; padding: 0.1%; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; -o-font-smoothing: grayscale;
  }
</style>
