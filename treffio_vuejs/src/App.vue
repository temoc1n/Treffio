<template>
  <div class="main-content-views d-flex">
      <div class="position-relative">
        <div class="position-fixed">
          <transition name="slide">
            <DashboardSidebar v-if="menu" @SlideOffMenu="menu = false" />
          </transition>
        </div>
        <DashboardHeader @openMenu="menu = true" />
        <router-view/>
      </div>
  </div>
</template>

<script>
import DashboardHeader from '@/components/Header/DashboardHeader.vue'
import DashboardSidebar from '@/components/Header/DashboardSidebar.vue'
export default {
  name: 'App',
  components:{
        'DashboardSidebar': DashboardSidebar,
        'DashboardHeader': DashboardHeader
    },
  data() {
      return {
          menu: false
      }
  }
}
</script>


<style>

</style>
