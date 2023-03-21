<template>
    <div class="card w-25 task-card" :style="getIndex" >
        <div class="card-body text-center">
            <div class="text-start">
                <i @mouseover="showDeadline(card_deadline)" v-if="card_deadline" class="fa-solid fa-exclamation fa-beat-fade position-absolute fs-3"></i>
            </div>
            <span class="card-number fw-bolder">{{ card_number }}</span>
            <h3 class="card-title">{{ card_title }}</h3>
            <p class="card-text">{{ card_description }}</p>
            <a href="#" class="btn delete-btn btn-outline-light me-3">Delete</a>
            <a href="#" class="btn complete-btn btn-outline-light">Completed!</a>
        </div>
    </div>
</template>
<script>
import { mapGetters } from 'vuex';
export default {
    name: 'TaskComponent',
    props: {
        card_number: Number,
        card_title: String,
        card_description: String,
        card_deadline: String
    },
    methods: {
        showDeadline() {

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