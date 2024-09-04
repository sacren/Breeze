<template>
    <Head title="Home Page" />
    <div>
        <h1>Home</h1>
    </div>
    <p>
        <input type="text" v-model="greeting">
    </p>

    <p>
        {{ greeting }} ({{ greeting.length }})
    </p>
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
