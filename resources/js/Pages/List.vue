<template>
    <div class="min-h-screen grid place-content-center">
        <h2 class="mb-2 font-bold">Procedures</h2>
        <ul>
            <li v-for="p in procedures">{{ p.name }} <input type="checkbox"></li>
        </ul>
    </div>
</template>

<script>
export default {
    data() {
        return {
            procedures: [
                { name: 'Patch kernel' },
                { name: 'Update systemd' },
                { name: 'Run docker' },
                { name: 'Install Laravel' },
            ],
        };
    },
};
</script>
