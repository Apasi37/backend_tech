<template>
  <nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <RouterLink to="/" class="text-white">Home</RouterLink>
        </li>
        <li class="nav-item">
          <RouterLink to="/conferences" class="text-white">Conferences</RouterLink>
        </li>
        <li class="nav-item">
          <RouterLink to="/admin" class="text-white">Admin</RouterLink>
        </li>
      </ul>
    </div>
    <RouterLink to="/login" v-if="!UserStore.name" class="text-white">Login</RouterLink>
    <RouterLink to="/profile" v-if="UserStore.name" class="text-white">{{ UserStore.name }}</RouterLink>
  </div>
</nav>
</template>

<script>
import { RouterLink } from 'vue-router'
import { useUserStore } from '@/stores/UserStore.js'

export default {
  components: {
    RouterLink,
  },
  data(){
    return {
      UserStore: useUserStore(),
    };
  },
  methods: {
    
  },
}
</script>