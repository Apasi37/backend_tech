<template>
<div class="container-fluid">
  <div class="row">
      <Navbar></Navbar>
  </div>
  <div class="row">
    <div class="col"></div>
    <div class="col-7 bg-light min-vh-100">
      <RouterView />
    </div>
    <div class="col"></div>
  </div>
  <div class="row">
    <Footer></Footer>
  </div>
</div>
</template>

<script>
import { RouterLink, RouterView } from 'vue-router'
import Navbar from './components/Navbar.vue'
import Footer from './components/Footer.vue'

export default {
  components: {
    RouterView,Navbar,Footer
  },
}

</script>