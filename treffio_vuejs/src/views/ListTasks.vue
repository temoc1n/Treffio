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
import TaskComponent from '@/components/Cards/TaskComponent.vue';
import API_REQUEST from '@/services/ApiRequests';

export default {
    name: 'ListTasks',
    components:{
        'TaskComponent': TaskComponent
    },
    data() {
        return {
            all_data: undefined,
            deadlineTasks: [],
            newTasks: []
        }
    },

    /*
        This filter problem has 2 solutions:
        
        1. Create a filter on the backend in order to provide the data needed already filtered,
        making it easier for the frontend developer to quicly consume the data and render it

        2. Create a filter in the frontend to prevent more requests to the backend than needed,
        since this are simple filters they can be implemented quickly and efficiently.

        :: I chose solution 2 to prevent more requests than what is usefull.
    */

    methods: {
        filterDeadline() {  //filter tasks that have deadlines set
            this.all_data.forEach(element => {
                if(element.deadline !== null && element.deadline !== "0") {
                    this.deadlineTasks.push(element);
                }
            });
        },
        filterNewTasks() {      //Filter tasks that are done
            this.all_data.forEach(element => {
                if(element.done) {
                    this.newTasks.push(element);
                }
            });
        }
    },
    computed: {
        ...mapGetters([         //It allow us to return the value of VUEX store and lock or unlocks the screen depending if we are or not with the menu open 
            'getIndex'
        ])
    },
    mounted() {

        //Gets a list of all tasks through ApiRequests.js file
        const apiService = new API_REQUEST; 

        apiService.getTasks().then((tasks) => {
            this.all_data = tasks;                  //Adds all tasks to "all_data" variable
            this.filterDeadline();                  //Calls function filterDeadline() in order to filter the services with deadlines
            this.filterNewTasks();                  //Calls function filterNewTasks() in order to filter the services that are done
        })
    }
}
</script>
<style scoped>

</style>