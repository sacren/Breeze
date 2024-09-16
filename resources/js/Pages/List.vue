<template>
    <div class="min-h-screen grid place-content-center">
        <JobList
            :jobList="todo"
            listName="To Do"
            fieldName="todo"
        />

        <div v-if="todo.length && completed.length" class="mt-8"></div>

        <JobList
            :jobList="completed"
            listName="Completed"
            fieldName="completed"
        />
    </div>
</template>

<script>
    import JobList from '@/Components/JobList.vue';

    export default {
        components: {
            JobList,
        },

        data() {
            return {
                jobs: [
                    { name: 'Patch kernel', status: false, id: 1 },
                    { name: 'Update systemd', status: false, id: 2 },
                    { name: 'Run docker', status: false, id: 3 },
                    { name: 'Install Laravel', status: false, id: 4 },
                ],
            };
        },

        computed: {
            todo() {
                return this.jobs.filter(a => !a.status);
            },

            completed() {
                return this.jobs.filter(a => a.status);
            },
        },
    };
</script>
