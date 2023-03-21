<template>
    <div class="container-fluid">
        <!-- Still working on the darker background-->
        <div class="position-fixed">
            <div class="cape vh-100 wh-100 m-0 position-absolute">
            </div>
        </div>
        <!---->
        <div class="row h-100">
            <div class="col-md-12">
                <div class="text-center">
                </div>
                <div class="col-md-12 d-flex justify-content-center mt-5">
                    <div class="card my-auto shadow-lg" :style="getIndex">
                        <h3 class="text-center mt-3">New Task</h3>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Task Name</label>
                                <input type="name" class="form-control" id="exampleFormControlInput1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Task Description</label>
                                <textarea type="description" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                            </div>
                            <div class="form-check form-switch">
                                <input @click="deadline = !deadline" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                <label class="form-check-label">Add a deadline to this task</label>
                            </div>
                            <div v-if="deadline" class="input-append date" id="datepicker" data-date-format="ss-mm-hh">
                                <input class="form-control" value="12:22:01" type="datetime-local" />
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
export default {
    name: 'NewTask',
    data(){
        return{
            tasks: undefined,
            deadline: false
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