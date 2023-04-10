<template>
    <create-component></create-component>
    <index-component ref="index"></index-component>

</template>

<script>

import CreateComponent from "./CreateComponent.vue";
import IndexComponent from "./IndexComponent.vue";

export default {
    name: "PostComponent",

    data() {
        return {

        }
    },

    methods: {
        parentLog() {
            console.log('this is parent component');
        }
    },


    components: {
        CreateComponent,
        IndexComponent
    }
}
</script>

<style scoped>

</style>
