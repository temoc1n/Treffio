<template>
   <div class="container-fluid">
                <div class="new-tasks ps-4 mt-5">
                    <div class="text-start">
                        <h2>New Tasks</h2>
                    </div>
                    <div class="tasks-list d-flex gap-3 pt-3">
                        <TaskComponent :card_number="cards.card1.card_number" :card_title="cards.card1.card_title" :card_description="cards.card1.card_description"/>
                        <TaskComponent :card_number="cards.card2.card_number" :card_title="cards.card2.card_title" :card_description="cards.card2.card_description"/>
                    </div>
                </div>
                <div class="deadline-tasks ps-4 mt-5">
                    <div class="text-start">
                        <h2>Deadlines</h2>
                    </div>
                    <div class="tasks-list d-flex gap-3 pt-3">
                        <TaskComponent :card_number="cards.card1.card_number" :card_title="cards.card1.card_title" :card_description="cards.card1.card_description"/>
                        <TaskComponent card_deadline="13 Mar 2023" :card_number="cards.card2.card_number" :card_title="cards.card2.card_title" :card_description="cards.card2.card_description"/>
                    </div>
                </div>
                <div class="all-tasks ps-4 mt-5 mb-5" :style="getIndex">
                    <div class="text-start">
                        <h2>All Tasks</h2>
                    </div>
                    <div class="tasks-list d-flex gap-3 pt-3">
                        <TaskComponent :card_number="cards.card1.card_number" :card_title="cards.card1.card_title" :card_description="cards.card1.card_description"/>
                        <TaskComponent :card_number="cards.card2.card_number" :card_title="cards.card2.card_title" :card_description="cards.card2.card_description"/>
                    </div>
                </div>
            </div>
</template>
<script>
import TaskComponent from '@/components/Cards/TaskComponent.vue'
export default {
    name: 'ListTasks',
    components:{
        'TaskComponent': TaskComponent
    },
    data() {
        return{
            cards:{
                card1:{
                    card_number: 1,
                    card_title: "Wash Dishes",
                    card_description: "I need to wash the dishes before my mom comes home."
                },
                card2:{
                    card_number: 2,
                    card_title: "Clean Room",
                    card_description: "I need to clean the room before my mom comes home."
                }
            }
        }
    }
}
</script>
<style scoped>

</style>