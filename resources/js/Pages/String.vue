<template>
    <Head title="String" />

    <div class="min-h-screen grid place-content-center">
        <p class="flex justify-center">
        <input
                name="greeting"
                type="text"
                class="text-center border-green-500 border-2"
                v-model="greeting">
        </p>

        <p class="flex justify-center mt-4">
        {{ greeting }} ({{ greeting.length }})
        </p>
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
                greeting: 'Hello World!',
            };
        },

        mounted() {
            setTimeout(() => {
                this.greeting = 'Hello Vue!';
            }, 4000);
        },
    };
</script>
