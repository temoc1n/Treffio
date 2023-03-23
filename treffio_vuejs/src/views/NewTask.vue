<template>
    <div class="container-fluid">
        <div class="row h-100">
            <div class="col-md-12">
                <div class="text-center">
                </div>
                <div class="col-md-12 d-flex justify-content-center mt-5">
                    <div class="card my-auto shadow-lg task-card" :style="getIndex">
                        <h3 class="text-center mt-3">New Task</h3>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Task Name</label>
                                <input v-model="newTask.name" type="name" class="form-control border-0" id="exampleFormControlInput1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Task Description</label>
                                <textarea v-model="newTask.description" type="description" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                            </div>
                            <div class="form-check form-switch">
                                <input @click="deadlineOpen = !deadlineOpen" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                <label class="form-check-label">Add a deadline to this task</label>
                            </div>
                            <div v-if="deadlineOpen" class="input-append date" id="datepicker" data-date-format="ss-mm-hh">
                                <input v-model="newTask.deadline" class="form-control" type="datetime-local" />
                            </div>
                            <div class="justify-content-center d-flex">
                                <button class="btn btn-success mt-3" @click="CreateTask()">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import { mapGetters } from 'vuex'
import axios from 'axios';
export default {
    name: 'NewTask',
    data(){
        return{
            tasks: undefined,
            deadlineOpen: false,
            newTask: {
                name: undefined,
                description: undefined,
                deadline: null,
                done: 0
            }

        }
    },
    methods: {
        CreateTask() {
            axios.post('http://127.0.0.1/api/v1/tasks', {'name': this.newTask.name, 'description': this.newTask.description, 'deadline': this.newTask.deadline, 'done': this.newTask.done})
            .then(() => {
                this.$router.push('/list-tasks')
            })
        }
    },  
    computed: {
        ...mapGetters([
            'getIndex'
        ])
    }
}
</script>
<style scoped>
    
</style>