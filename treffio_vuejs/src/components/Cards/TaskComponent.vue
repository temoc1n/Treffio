<template>
    <div class="card task-card col-md-3 h-100 col-3 overflow" :style="getIndex" >
        <div class="card-body text-center">
            <div class="text-start" data-toggle="tooltip" :title="card_deadline">
                <i v-if="card_deadline" class="fa-solid fa-exclamation fa-beat-fade position-absolute fs-3"></i>
            </div>
            <span class="card-number fw-bolder">{{ card_number }}</span>
            <h3 class="card-title">{{ card_title }}</h3>
            <p class="card-text task-text">{{ card_description }}</p>
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
    computed: {
        ...mapGetters([
            'getIndex'
        ])
    }
}
</script>
<style scoped>

</style>