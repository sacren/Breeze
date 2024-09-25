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

                newJob: null,
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
