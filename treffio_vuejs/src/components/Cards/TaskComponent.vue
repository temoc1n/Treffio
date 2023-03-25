<template>
    <div class="card task-card col-md-3 h-100 col-3 overflow" :style="getIndex" @click="seeTask()" >
        <div class="card-body text-center">
            <div class="text-start" data-toggle="tooltip" :title="card_deadline">
                <i v-if="card_deadline && card_deadline !== '0'" class="fa-solid fa-exclamation fa-beat-fade position-absolute fs-3"></i>
            </div>
            <h3 class="card-title">{{ card_title }}</h3>
            <p class="card-text task-text">{{ card_description }}</p>
        </div>
    </div>
</template>
<script>
import { mapGetters } from 'vuex';
/*

    This is where all the tasks form the task list are created

*/
export default {
    name: 'TaskComponent',
    props: {
        card_number: Number,
        card_title: String,
        card_description: String,
        card_deadline: String
    },
    methods: {
        seeTask() {
            this.$store.commit('updateTask', this.card_number); //stores the id of a task in VUEX store
            this.$router.push('/task/view');       //Redirects us to /task/view so we can see the task details
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