<template>
<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <div class="navbar-nav">
      <RouterLink to="/" class="nav-link text-white">Home</RouterLink>
      <RouterLink to="/admin" class="nav-link text-white" v-if="UserStore.role=='editor' || UserStore.role=='admin'">Admin</RouterLink>
    </div>
    <RouterLink to="/login" v-if="!UserStore.name" class="nav-link text-white">Login</RouterLink>
    <RouterLink to="/profile" v-if="UserStore.name" class="nav-link text-white">{{ UserStore.name }}</RouterLink>
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