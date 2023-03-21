<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="greetings">
                    <div class="text-center">
                        <h1><i class="fa-solid fa-house-user fa-beat me-3 mt-5"></i>Hello, {{ username }}!</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-12 d-flex gap-4 justify-content-center mt-5">
                <CardComponent :style="getIndex" :card_title="cards.newtasks_card.title" :description="cards.newtasks_card.description"/>
                <CardComponent :style="getIndex" :card_title="cards.deadline_card.title" :description="cards.deadline_card.description"/>
            </div>
            <div class="col-md-12 d-flex gap-4 mt-4 justify-content-center">
                <CardComponent :style="getIndex" :card_title="cards.savedtasks_card.title" :description="cards.savedtasks_card.description"/>
                <CardComponent :style="getIndex" :card_title="cards.about_card.title" :description="cards.about_card.description"/>
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
            index: undefined,
            username: 'User',
            //Card content
            cards: {
                newtasks_card:{
                    title: 'New Tasks',
                    description: 'No tasks added recently...'
                },
                deadline_card:{
                    title: 'Almost on deadline',
                    description: 'No tasks added recently...'
                },
                savedtasks_card:{
                    title: 'Saved Tasks',
                    description: 'No tasks added recently...'
                },
                about_card:{
                    title: 'About the page',
                    description: 'Click to see more about this page'
                },
            }
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