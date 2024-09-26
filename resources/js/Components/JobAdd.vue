<template>
    <form @submit.prevent="addJob">
        <div class="border-2 border-green-500">
            <input
                    v-model="newJob"
                    placeholder="New Job"
                    type="text"
                    name="newJob"
                    class="p-2">
            <button type="submit" class="p-2 border-l border-red-500">Add</button>
        </div>
    </form>
</template>

<script>
    export default {
        data() {
            return {
                newJob: null,
            };
        },

        methods: {
            addJob() {
                alert('Add a new job');
            },
        },
    };
</script>
