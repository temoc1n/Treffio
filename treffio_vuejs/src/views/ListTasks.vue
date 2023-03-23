<template>
    <div class="container-fluid">
        <div class="row">
            <h2 class="ps-5">All Tasks</h2>
            <hr>
            <div class="d-flex gap-3 p-5 pt-0 overflow-auto task-lister">
                <TaskComponent v-for="task in all_data" :key="task.id" :card_number="task.id" :card_title="task.name" :card_description="task.description" :card_deadline="task.deadline" />
            </div>
            <h2 class="ps-5">Deadlines</h2>
            <hr>
            <div class="d-flex gap-3 p-5 pt-0 overflow-auto task-lister">
                <TaskComponent v-for="task in deadlineTasks" :key="task.id" :card_number="task.id" :card_title="task.name" :card_description="task.description" :card_deadline="task.deadline" />
            </div>
            <h2 class="ps-5">Done!</h2>
            <hr>
            <div class="d-flex gap-3 p-5 pt-0 overflow-auto task-lister">
                <TaskComponent v-for="task in newTasks" :key="task.id" :card_number="task.id" :card_title="task.name" :card_description="task.description" :card_deadline="task.deadline"/>
            </div>

        </div>
    </div>
</template>
<script>
import { mapGetters } from 'vuex';
import axios from 'axios';
import TaskComponent from '@/components/Cards/TaskComponent.vue';
export default {
    name: 'ListTasks',
    components:{
        'TaskComponent': TaskComponent
    },
    data() {
        return{
            all_data: undefined,
            deadlineTasks: [],
            newTasks: []
        }
    },
    methods: {
        filterDeadline() {
            this.all_data.forEach(element => {
                if(element.deadline !== "0"){
                    console.log("Debugame MAIN")
                }
                if(element.deadline !== null && element.deadline !== "0"){
                    this.deadlineTasks.push(element)
                }
            });
        },
        filterNewTasks() {
            this.all_data.forEach(element => {
                if(element.done){
                    this.newTasks.push(element)
                }
            });
        }
    },
    computed: {
        ...mapGetters([
            'getIndex'
        ])
    },
    mounted() {
        axios.get('http://127.0.0.1/api/v1/tasks')
        .then(response => {
            this.all_data = response.data.data;
            this.filterDeadline();
            this.filterNewTasks();
        })
    }
}
</script>
<style scoped>

</style>