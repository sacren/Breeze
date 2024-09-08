<template>
    <div class="min-h-screen grid place-content-center">
        <h2 v-show="jobs.filter(a => !a.status).length" class="mb-2 font-bold">To Do</h2>
        <ul>
            <li v-for="job in jobs.filter(a => !a.status)">
                <label>
                    {{ job.name }}
                    <input type="checkbox" v-model="job.status">
                </label>
            </li>
        </ul>

        <h2 v-show="jobs.filter(a => a.status).length" class="mt-8 mb-2 font-bold">Completed</h2>
        <ul>
            <li v-for="job in jobs.filter(a => a.status)">
                <label>
                    {{ job.name }}
                    <input type="checkbox" v-model="job.status">
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
                { name: 'Patch kernel', status: false },
                { name: 'Update systemd', status: false },
                { name: 'Run docker', status: false },
                { name: 'Install Laravel', status: false },
            ],
        };
    },
};
</script>
