<template>
    <Head title="Home Page" />
    <div>
        <h1>Home</h1>
    </div>

    {{ greeting }}
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
    };
</script>
