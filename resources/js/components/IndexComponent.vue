<template>
    <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Job</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            <template v-for="person in people">
                <show-component :person="person" :ref="`show_${person.id}`"></show-component>
                <edit-component :person="person" :ref="`edit_${person.id}`"></edit-component>
            </template>
            </tbody>
        </table>
    </div>
</template>

<script>
import EditComponent from "./EditComponent.vue";
import ShowComponent from "./ShowComponent.vue";

export default {
    name: "IndexComponent",

    data() {
        return {
            people: null,
            editPersonId: null,
            name: null,
            age: null,
            job: null,
        }
    },

    mounted() {
        this.getPeople()

    },
    components: {
        EditComponent,
        ShowComponent
    },
    methods: {
        getPeople() {
            axios.get('/api/people')
                .then(res => {
                    this.people = res.data
                })
        },

        updatePerson(id) {
            this.editPersonId = null
            axios.patch(`/api/people/${id}`, {name: this.name, age: this.age, job: this.job})
                .then(res => {
                    this.getPeople()
                })
        },

        deletePerson(id) {
            this.editPersonId = null
            axios.delete(`/api/people/${id}`)
                .then(res => {
                    this.getPeople()
                })
        },

        changeEdipPersonId(id, name, age, job) {
            this.editPersonId = id
            let editName = `edit_${id}`
            let fullEditName = this.$refs[editName][0];
            fullEditName.name = name
            fullEditName.age = age
            fullEditName.job = job
        },

        isEdit(id) {
            return this.editPersonId === id
        },

        indexLog() {
            console.log('this is index page');
        }
    }
}
</script>

<style scoped>

</style>
