<template>
    <div class="min-h-screen grid place-content-center">
        <JobList
            :jobList="filtered.todo"
            listName="To Do"
            fieldName="todo"
        />

        <div class="mt-8"></div>

        <JobList
            :jobList="filtered.completed"
            listName="Completed"
            fieldName="completed"
        />
    </div>
</template>

<script>
    import JobList from './JobList.vue';

    export default {
        components: {
            JobList,
        },

        data() {
            return {
                allJobs: [
                    { name: 'Patch kernel', status: false, id: 1 },
                    { name: 'Update systemd', status: false, id: 2 },
                    { name: 'Run docker', status: false, id: 3 },
                    { name: 'Install Laravel', status: false, id: 4 },
                ],
            };
        },

        computed: {
            filtered() {
                return {
                    todo: this.allJobs.filter(a => !a.status),
                    completed: this.allJobs.filter(a => a.status),
                };
            },
        },
    };
</script>
