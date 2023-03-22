<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="greetings">
                    <div class="text-center">
                        <h1 class="text-white"><i class="fa-solid fa-house-user fa-beat me-3 mt-5"></i>Hey, there!</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-12 d-flex gap-4 justify-content-center mt-5" :style="getIndex">
                <CardComponent :card_title="cards.newtasks_card.title" :description="cards.newtasks_card.description" @click="changeRoute('/new-task')"/>
                <CardComponent :card_title="cards.deadline_card.title" :description="cards.deadline_card.description" @click="changeRoute('/list-tasks')"/>
            </div>
            <div class="col-md-12 d-flex gap-4 mt-4 justify-content-center" :style="getIndex">
                <CardComponent :card_title="cards.savedtasks_card.title" :description="cards.savedtasks_card.description + totalDone + ' tasks'" />
                <CardComponent :card_title="cards.about_card.title" :description="cards.about_card.description" @click="changeRoute('/about')"/>
            </div>
        </div>
    </div>
</template>
<script>
//Here I want to put some news about the app, plus, some ways of redirecting the user to other pages
import CardComponent from '@/components/Cards/CardComponent.vue'
import { mapGetters } from 'vuex'
import axios from 'axios'
export default {
    name: 'MainDashboard',
    components: {
        'CardComponent': CardComponent
    },
    data() {
        return {
            //Card content
            totalDone: 0,
            cards: {
                newtasks_card:{
                    title: 'New Task',
                    description: 'Add a new Task to your schedule!'
                },
                deadline_card:{
                    title: 'Task List',
                    description: 'Check out how many tasks you still have left!'
                },
                savedtasks_card:{
                    title: 'Completed Tasks!',
                    description: 'You have completed a total of '
                },
                about_card:{
                    title: 'About the page',
                    description: 'Click to see more about this page'
                },
            }
        }
    },
    methods: {
        changeRoute(route) {
            this.$router.push(route) //changes route
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
            let dataTasks = response.data.data
            for(let i = 0; i < dataTasks.length; i++) {
                if(dataTasks[i].done) {
                    this.totalDone++;
                }
            }
        })
    }
}
</script>
<style scoped>

</style>