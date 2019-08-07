<template>
    <button class="btn btn-success" v-on:click="edit">{{ user_info }}</button>
</template>
    <script>
        export default {
            props: ['user_info'], 
            methods: {
                edit() {
                    console.log(this.user_info)
                }
            }
        }
    </script>