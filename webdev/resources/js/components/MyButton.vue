  
<template>
    
        <button :type="type" class="btn btn-primary" v-text="test.name"></button>
    
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
            axios.post('api/vue', {})
                .then(response => {
                    this.test = response.data;
                });
        },
        data: function () {
            return {
                test: {name:"name"},
            }
        },
        props: [
            'text',
            'type'
        ]
    }
</script>

<style>
    .my-button {
        background-color: #333;
        color: #fff;
        padding: 10px 20px;
        font-weight: bold;
    }
</style>