<template>
    <Head title="Button" />

    <div class="min-h-screen grid place-content-center">
        <button :class="active ? buttonOn : buttonOff" @click="toggle">Click me</button>
    </div>
</template>

<script>
    import { Head } from '@inertiajs/vue3';

    export default {
        components: {
            Head,
        },

        data() {
            return {
                buttonOff: 'bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded',
                buttonOn: 'bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded',
                active: false,
            };
        },

        methods: {
            toggle() {
                this.active = !this.active;
            },
        },
    };
</script>
