<template>
  <div class="row">
      <Navbar></Navbar>
  </div>
  <div class="container">
    <div class="row">
      <div class="col"></div>
      <div class="col-9 bg-light min-vh-100">
        <RouterView />
      </div>
      <div class="col"></div>
    </div>
  </div>
  <div class="row">
    <Footer></Footer>
  </div>
</template>

<script>
import { RouterLink, RouterView } from 'vue-router'
import Navbar from './components/Navbar.vue'
import Sidebar from './components/Sidebar.vue'
import Footer from './components/Footer.vue'

export default {
  components: {
    RouterView,Navbar,Sidebar,Footer
  },
}

</script>