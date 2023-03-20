<template>
    <div class="main-content-views d-flex">
        <DashboardSidebar />
    </div>
</template>
<script>
import DashboardSidebar from '@/components/Header/DashboardSidebar.vue'
export default {
    name: 'MainDashboard',
    components:{
        'DashboardSidebar': DashboardSidebar
    }
}
</script>
<style scoped>

</style>