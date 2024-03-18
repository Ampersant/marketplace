<template>
    <div>
    <h1>ASD</h1>
    <form action="/logout" method="post">
       <p>a {{ token }} </p>

       <input type="hidden" name="_token" :value="csrf">

        <button type="submit">Logout</button>
    </form>
    </div>
</template>
<script>
export default {
    data() {
        return {
            token: null
        }
    },
    computed: {
        csrf() {
            return document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        },
    }

}
</script>
<style lang="">
    
</style>