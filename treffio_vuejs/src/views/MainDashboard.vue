<template>
    <div class="main-content-views d-flex">
        <transition name="slide">
            <DashboardSidebar v-if="menu" @SlideOffMenu="menu = false" />
        </transition>
        <button @click="menu = true">Menu</button>
    </div>
</template>
<script>
import DashboardSidebar from '@/components/Header/DashboardSidebar.vue'
export default {
    name: 'MainDashboard',
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
<style scoped>

</style>