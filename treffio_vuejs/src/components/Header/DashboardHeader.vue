<template>
  <div class="header vw-100">
    <header>
      <i class="fa-regular fa-square-plus fs-2 p-1 text-white m-1 ms-3 header-button" @click="openMenu()"></i>
    </header>
  </div>
</template>
<script>
export default {
    name: 'DashboardHeader',
    methods: {
        openMenu() {
          this.$store.commit('lockScreen') //changes the background to locked
          this.$emit('openMenu')
        }
    } 
}
</script>
<style scoped>

</style>