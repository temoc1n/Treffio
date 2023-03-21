<template>
    <div class="card w-25 task-card" :style="getIndex" >
  <div class="card-body text-center">
    <span class="card-number fw-bolder">1</span>
    <h3 class="card-title">Card title</h3>
    <p class="card-text">With supporting text below as a natural lead-in g text below as a natural lead to additional content. </p>
    <a href="#" class="btn delete-btn btn-outline-light me-3">Delete</a>
    <a href="#" class="btn complete-btn btn-outline-light">Completed!</a>
  </div>
</div>
</template>
<script>
import { mapGetters } from 'vuex';
export default {
    name: 'TaskComponent',
    computed: {
        ...mapGetters([
            'getIndex'
        ])
    }
}
</script>
<style scoped>

</style>