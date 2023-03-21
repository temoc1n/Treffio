<template>
   <div class="container-fluid">
                <div class="new-tasks ps-4 mt-5">
                    <div class="text-start">
                        <h2>New Tasks</h2>
                    </div>
                    <div class="tasks-list d-flex gap-3 pt-3">
                        <TaskComponent />
                    </div>
                </div>
                <div class="deadline-tasks ps-4 mt-5">
                    <div class="text-start">
                        <h2>Deadlines</h2>
                    </div>
                </div>
                <div class="all-tasks ps-4 mt-5" :style="getIndex">
                    <div class="text-start">
                        <h2>All Tasks</h2>
                    </div>
                </div>
            </div>
</template>
<script>
import TaskComponent from '@/components/Cards/TaskComponent.vue'
export default {
    name: 'ListTasks',
    components:{
        'TaskComponent': TaskComponent
    },
}
</script>
<style scoped>

</style>