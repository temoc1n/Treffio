<template>
    <div class="card w-100 shadow-lg">
        <div class="card-body">
            <h5 class="card-title">{{ card_title }}</h5>
            <p class="card-text">{{ description }}</p>
        </div>
    </div>
</template>
<script>
export default {
    name: 'CardComponent',
    props: {
        card_title: String,
        description: String
    }
}
</script>
<style scoped>

</style>