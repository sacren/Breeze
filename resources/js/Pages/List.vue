<template>
    <div class="grid place-content-center min-h-screen space-y-8">
        <section v-show="todo.length">
            <JobList
                    :jobList="todo"
                    listName="To Do"
                    fieldName="todo">
            </JobList>
        </section>

        <section v-show="completed.length">
            <JobList
                    :jobList="completed"
                    listName="Completed"
                    fieldName="completed">
            </JobList>
        </section>
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
