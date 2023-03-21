<template>
  <div class="main-content-views d-flex">
    <transition name="slide">
        <DashboardSidebar v-if="menu" @SlideOffMenu="menu = false" />
      </transition>
      <button v-if="!menu" @click="menu = true">Menu</button>
    <router-view/>
  </div>
</template>

<script>
import DashboardSidebar from '@/components/Header/DashboardSidebar.vue'
export default {
  name: 'App',
  components:{
        'DashboardSidebar': DashboardSidebar
    },
  data() {
      return {
          menu: true
      }
  }
}
</script>


<style>

</style>
