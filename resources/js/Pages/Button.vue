<template>
    <Head title="Button" />

    <div class="min-h-screen grid place-content-center">
        <button :class="active ? on : off" @click="flip">Click me</button>
    </div>
</template>

<script>
    import { Head } from '@inertiajs/vue3';

    export default {
        components: {
            Head,
        },

        data() {
            const common = 'hover:bg-blue-700 text-white font-bold py-2 px-4 rounded';

            return {
                on: `bg-red-500 ${common}`,
                off: `bg-blue-500 ${common}`,
                active: false,
            };
        },

        methods: {
            flip() {
                this.active = !this.active;
            },
        },
    };
</script>
