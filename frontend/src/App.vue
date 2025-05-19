<template>
  <div class="row">
      <Navbar></Navbar>
    </div>
  <div class="container">
    <div class="row">
      <div class="col bg-body-tertiary">
        <RouterView />
      </div>
    </div>
  </div>
</template>

<script>
import { RouterLink, RouterView } from 'vue-router'
import Navbar from './components/Navbar.vue'
import Sidebar from './components/Sidebar.vue'

export default {
  components: {
    RouterView,Navbar,Sidebar
  },
}

</script>