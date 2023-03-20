<template>
    <!-- Sidebar  -->
    <div class="container-fluid overflow-hidden">
        <div class="row vh-100">
            <div class="col-5 col-md-4 side_bar">
                <div class="options mt-4">
                    <div class="d-flex">
                        <h1>Task Manager</h1>
                        <!-- This icon only appears for Medium and Large Screens-->
                        <i class="fa-solid fa-bars mt-2 d-none d-lg-block ms-5 fs-1 sidebar-button fixed-end"></i>
                    </div>
                    <hr>
                    <h5 class="sidebar-options">Home</h5>
                    <h5 class="sidebar-options mt-3">New Task</h5>
                    <h5 class="sidebar-options mt-3">List Tasks</h5>
                    <h5 class="sidebar-options mt-3">Saved Tasks</h5>
                    <h5 class="sidebar-options mt-3">Trash</h5>
                    <hr>
                </div>
                <div class="vh-100 footer fixed-bottom m-1 position-relative">
                    <MainFooter />
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import MainFooter from '@/components/Footer/MainFooter';
export default {
    name: 'DashboardSidebar',
    components: {
        'MainFooter': MainFooter
    }
}
</script>
<style scoped>

</style>