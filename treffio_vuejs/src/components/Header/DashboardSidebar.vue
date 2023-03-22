<template>
    <!-- Sidebar  -->
    <div class="container-fluid overflow-hidden">
        <div class="row vh-100">
            <div class="side_bar">
                <div class="options mt-4">
                    <div class="d-flex">
                        <h1 class="text-white">Task Manager</h1>
                        <!-- This icon only appears for Medium and Large Screens-->
                        <i class="fa-solid fa-bars mt-2 d-none d-lg-block ms-3 fs-1 sidebar-button fixed-end" @click="SlideOff"></i>
                    </div>
                    <hr>
                    <h5 class="sidebar-options rounded-2 p-1" @click="changeRoute('/')">Home</h5>
                    <h5 class="sidebar-options rounded-2 p-1 mt-3" @click="changeRoute('/new-task')">New Task</h5>
                    <h5 class="sidebar-options rounded-2 p-1 mt-3" @click="changeRoute('/list-tasks')">List Tasks</h5>
                    <h5 class="sidebar-options rounded-2 p-1 mt-3" @click="changeRoute('/completed')">Completed Tasks</h5>
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
        unlockScreen(){
            this.$store.commit('unlockScreen') //unlocks the screen
        },
        SlideOff() {
            this.$emit('SlideOffMenu') //Sends an emission to the parent component in order to close the side bar
            this.unlockScreen();
        },
        changeRoute(route) {
            this.$router.push(route) //changes route
            this.SlideOff() //executes SlideOff() function
        }
    }
}
</script>
<style scoped>

</style>