<template>
  <nav class=" bg-primary">
  <div class="container-fluid">
    <RouterLink to="/" class="text-white">Home</RouterLink>
    <RouterLink to="/conferences" class="text-white">Conferences</RouterLink>
    <RouterLink to="/admin" class="text-white">Admin</RouterLink>
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