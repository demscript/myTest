<template>
  <div class="app">

  </div>
</template>

<script>
import './Styles/app.scss'
export default {
    name : 'app',
    components : {
        Navbar : () => import('./Components/Navbar.vue')
    }
}
</script>

<style>

</style>