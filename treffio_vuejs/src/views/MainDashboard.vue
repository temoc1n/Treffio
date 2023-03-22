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
                <CardComponent :card_title="cards.savedtasks_card.title" :description="cards.savedtasks_card.description" @click="changeRoute('/trash')"/>
                <CardComponent :card_title="cards.about_card.title" :description="cards.about_card.description" @click="changeRoute('/about')"/>
            </div>
        </div>
    </div>
</template>
<script>
//Here I want to put some news about the app, plus, some ways of redirecting the user to other pages
import CardComponent from '@/components/Cards/CardComponent.vue'
import { mapGetters } from 'vuex'
export default {
    name: 'MainDashboard',
    components: {
        'CardComponent': CardComponent
    },
    data() {
        return {
            //Card content
            cards: {
                newtasks_card:{
                    title: 'New Task',
                    description: 'Add a new Task to your schedule!'
                },
                deadline_card:{
                    title: 'Deadlines',
                    description: 'Don\'t forget your deadline tasks! Go take a look...'
                },
                savedtasks_card:{
                    title: 'Completed Tasks!',
                    description: 'Each task is a step forward 😉'
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
    }
}
</script>
<style scoped>

</style>