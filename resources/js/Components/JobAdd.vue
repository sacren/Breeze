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
        props: {
            allJobs: Array,
        },

        data() {
            return {
                newJob: null,
            };
        },

        methods: {
            addJob() {
                if (!this.newJob) {
                    this.newJob = 'Apply Inertia and Vue';
                }

                this.allJobs.push({
                    name: this.newJob,
                    status: false,
                    id: this.allJobs.length + 1,
                });

                this.newJob = null;
            },
        },
    };
</script>
