<template>
    <footer>
        <div class="position-relative">
            <span class="text-white">@{{ year }} TaskManager</span>
        </div>
    </footer>
</template>
<script>
export default {
    name: 'MainFooter',
    data() {
        return {
            year: new Date().getFullYear()      //Gets the current year
        }
    }
}
</script>
<style scoped>

</style>