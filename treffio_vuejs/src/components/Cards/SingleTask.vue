<template>
    <div class="container-fluid">
        <div class="row h-100">
            <div class="col-md-12">
                <div class="text-center">
                </div>
                <div class="col-md-12 d-flex justify-content-center mt-5">
                    <div class="card my-auto shadow-lg task-card" :style="getIndex">
                        <h3 class="text-center mt-3">{{ Task.done ? 'Done!' : 'Not Done' }} <i v-if="!editMode" class="fa-solid fa-lock fs-4 position-absolute mt-2 ms-3"></i><i v-else class="fa-solid fa-lock-open fa-fade fs-4 position-absolute mt-2 ms-3"></i></h3>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Name</label>
                                <input :disabled="!editMode" v-model="Task.name" type="name" class="form-control border-0" id="exampleFormControlInput1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                <textarea :disabled="!editMode" v-model="Task.description" type="description" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                            </div>
                            <div class="input-append date" id="datepicker" data-date-format="ss-mm-hh">
                                <label for="exampleFormControlInput1" class="form-label">Deadline</label>
                                <input :disabled="!editMode" v-model="Task.deadline" class="form-control" type="datetime-local" />
                            </div>
                            <div v-if="!editMode" class="not-edit-mode">
                                    <div class="justify-content-center gap-4 d-flex">
                                    <button v-if="!Task.done" class="btn btn-success mt-3" @click="DoneTask(1)">Done!</button>
                                    <button v-else class="btn btn-success mt-3" @click="DoneTask(0)">Undo!</button>
                                    <button v-if="!Task.done" class="btn btn-light mt-3" @click="editMode = !editMode">Edit</button>
                                    <button class="btn btn-danger mt-3" @click="DeleteTask()">Delete</button>
                                </div>
                            </div>
                            <div v-else class="edit-mode">
                                <div class="justify-content-center gap-4 d-flex">
                                    <button class="btn btn-success mt-3" @click="UpdateTask()">Save!</button>
                                    <button class="btn btn-danger mt-3" @click="Undo()">Undo</button>
                                </div>
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
    name: 'SingleTask',
    data(){
        return{
            copy: undefined,
            editMode: false,
            Task: {
                name: undefined,
                description: undefined,
                deadline: undefined,
                done: undefined
            }
        }
    },
    methods: {
        UpdateTask() {
            axios.put('http://127.0.0.1/api/v1/tasks/'+this.getTask, {'name': this.Task.name, 'description': this.Task.description, 'deadline': this.Task.deadline})
            .then(() => {
                this.editMode = false;
            })
        },
        DeleteTask() {
            axios.delete('http://127.0.0.1/api/v1/tasks/'+this.getTask)
            .then(() => {
                this.$router.push('/list-tasks');
            })
        },
        DoneTask(value) {
            axios.put('http://127.0.0.1/api/v1/tasks/'+this.getTask, {'done': value, 'deadline': 0})
            .then(() => {
                if(value){
                    this.Task.done = 1;
                }else{
                    this.Task.done = 0;
                }
            })
        },
        Undo(){
            this.Task.name = this.copy.name
            this.Task.description = this.copy.description
            this.Task.deadline = this.copy.deadline
            this.editMode = !this.editMode;
        }
    },  
    computed: {
        ...mapGetters([
            'getIndex',
            'getTask'
        ])
    },
    mounted() {
        axios.get('http://127.0.0.1/api/v1/tasks/'+this.getTask)
        .then(response => {
            this.Task.name = response.data.data.name;
            this.Task.description = response.data.data.description;
            this.Task.deadline = response.data.data.deadline;
            this.Task.done = response.data.data.done;
            this.copy = response.data.data;
        })
    }
}
</script>
<style scoped>
    
</style>