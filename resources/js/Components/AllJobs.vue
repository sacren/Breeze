<template>
    <div class="min-h-screen grid place-content-center">
        <h2 v-show="todo.length" class="mb-2 font-bold">To Do</h2>
        <ul>
            <li
                v-for="job in todo"
                :key="job.id">

                <label>
                    {{ job.name }}
                    <input
                            name="todo"
                            type="checkbox"
                            v-model="job.status">
                </label>
            </li>
        </ul>

        <h2 v-show="completed.length" class="mt-8 mb-2 font-bold">Completed</h2>
        <ul>
            <li
                v-for="job in completed"
                :key="job.id">

                <label>
                    {{ job.name }}
                    <input
                            name="completed"
                            type="checkbox"
                            v-model="job.status">
                </label>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
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
