<template>
    <div class="card w-100 shadow-lg main_card">
        <div class="card-body">
            <h5 class="card-title">{{ card_title }}</h5>
            <p class="card-text">{{ description }}</p>
        </div>
    </div>
</template>
<script>

/*

    This component is only for the card we see in the main page

*/

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