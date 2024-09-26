<template>
    <Head title="Button" />

    <div class="min-h-screen grid place-content-center">
        <button :class="party.attributes" @click="flip">
            {{ party.name }}
        </button>
    </div>
</template>

<script>
    import { Head } from '@inertiajs/vue3';

    export default {
        components: {
            Head,
        },

        data() {
            const common = 'text-white font-bold py-2 px-4 rounded';

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

        computed: {
            party() {
                return {
                    name: this.active ? 'Republican' : 'Democrat',
                    attributes: this.active ? this.on : this.off,
                };
            },
        },
    };
</script>
