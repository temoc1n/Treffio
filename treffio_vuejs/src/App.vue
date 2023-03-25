<template>
  <div class="main-content-views d-flex">
      <div class="position-relative">
        <div class="position-fixed">
          <!--
            Here we create a transition for the sidebar when it appears

            We also load the components inside the folder Header here to be easier to render
            them in every view
          -->
          <transition name="slide">
            <DashboardSidebar v-if="menu" @SlideOffMenu="menu = false" />
          </transition>
          <!-- Transition's over -->
        </div>
        <DashboardHeader @openMenu="menu = true" />
        <router-view />  <!-- Here we render every view from the router file -->
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
