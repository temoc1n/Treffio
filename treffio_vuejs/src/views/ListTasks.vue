<template>
    <div class="container-fluid">
        <div class="row">
            <h2 class="ps-5">New Tasks</h2>
            <hr>
            <div class="d-flex gap-3 p-5 pt-0 overflow-auto task-lister">
                <TaskComponent v-for="task in newTasks" :key="task" :card_number="task.id" :card_title="task.name" :card_description="task.description" :card_deadline="task.deadline"/>
            </div>
            <h2 class="ps-5">All Tasks</h2>
            <hr>
            <div class="d-flex gap-3 p-5 pt-0 overflow-auto task-lister">
                <TaskComponent v-for="task in all_data" :key="task" :card_number="task.id" :card_title="task.name" :card_description="task.description" :card_deadline="task.deadline" />
            </div>
            <h2 class="ps-5">Deadlines</h2>
            <hr>
            <div class="d-flex gap-3 p-5 pt-0 overflow-auto task-lister">
                <TaskComponent v-for="task in deadlineTasks" :key="task" :card_number="task.id" :card_title="task.name" :card_description="task.description" :card_deadline="task.deadline" />
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
                if(element.deadline){
                    this.deadlineTasks.push(element)
                }
            });
        },
        filterNewTasks() {
            for(let i = 1; i < 4; i++) {
                this.newTasks.push(this.all_data[this.all_data.length - i])
            }
        }
    },
    computed: {
        ...mapGetters([
            'getIndex'
        ])
    },
    mounted() {
        axios.get('http://localhost/api/v1/tasks')
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