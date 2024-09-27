<template>
    <div class="grid place-content-center min-h-screen space-y-8">
        <section v-show="filtered.todo.length">
            <job-list
                    :jobList="filtered.todo"
                    listName="To Do">
            </job-list>
        </section>

        <section v-show="filtered.completed.length">
            <job-list
                    :jobList="filtered.completed"
                    listName="Completed">
            </job-list>
        </section>

        <job-add @add-job="addJob"></job-add>
    </div>
</template>

<script>
    import JobList from './JobList.vue';
    import JobAdd from './JobAdd.vue';

    export default {
        components: {
            JobList,
            JobAdd,
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

        methods: {
            addJob(newJob) {
                if (!newJob) {
                    newJob = 'Apply Inertia and Vue';
                }

                this.allJobs.push({
                    name: newJob,
                    status: false,
                    id: this.allJobs.length + 1,
                });
            },
        },
    };
</script>
