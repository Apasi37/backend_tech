<template>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <RouterLink to="/">Home</RouterLink>
        </li>
        <li class="nav-item">
          <RouterLink to="/wysiwyg">Wysiwyg</RouterLink>
        </li>
      </ul>
    </div>
    <RouterLink to="/login"><button class="btn btn-outline-success">Login</button></RouterLink>
  </div>
</nav>
</template>

<script>
import { RouterLink } from 'vue-router'

export default {
  components: {
    RouterLink,
  },
}
</script>