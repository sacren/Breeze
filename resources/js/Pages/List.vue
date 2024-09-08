<template>
    <div class="min-h-screen grid place-content-center">
        <h2 class="mb-2 font-bold">To Do</h2>
        <ul>
            <li v-for="p in procedures">
                <label>
                    {{ p.name }}
                    <input type="checkbox" v-model="p.checked">
                </label>
            </li>
        </ul>

        <h2 class="mt-8 mb-2 font-bold">Completed</h2>
        <ul>
            <li v-for="p in procedures">
                <label>
                    {{ p.name }}
                    <input type="checkbox" v-model="p.checked">
                </label>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    data() {
        return {
            procedures: [
                { name: 'Patch kernel', checked: false },
                { name: 'Update systemd', checked: false },
                { name: 'Run docker', checked: false },
                { name: 'Install Laravel', checked: false },
            ],
        };
    },
};
</script>
