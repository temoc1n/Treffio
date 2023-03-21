<template>
    <!-- Sidebar  -->
    <div class="container-fluid overflow-hidden">
        <div class="row vh-100">
            <div class="col-5 col-md-4 side_bar">
                <div class="options mt-4">
                    <div class="d-flex">
                        <h1>Task Manager</h1>
                        <!-- This icon only appears for Medium and Large Screens-->
                        <i class="fa-solid fa-bars mt-2 d-none d-lg-block ms-3 fs-1 sidebar-button fixed-end" @click="SlideOff"></i>
                    </div>
                    <hr>
                    <h5 class="sidebar-options rounded-2 p-1" @click="this.$router.push('/')">Home</h5>
                    <h5 class="sidebar-options rounded-2 p-1 mt-3" @click="this.$router.push('/new-task')">New Task</h5>
                    <h5 class="sidebar-options rounded-2 p-1 mt-3" @click="this.$router.push('/list-tasks')">List Tasks</h5>
                    <h5 class="sidebar-options rounded-2 p-1 mt-3" @click="this.$router.push('/saved-tasks')">Saved Tasks</h5>
                    <h5 class="sidebar-options rounded-2 p-1 mt-3" @click="this.$router.push('/trash')">Trash</h5>
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
    },
    methods: {
        SlideOff() {
            this.$emit('SlideOffMenu')
        }
    }
}
</script>
<style scoped>

</style>