<template>
    <Head title="Home Page" />
        <div class="flex flex-col justify-center items-center min-h-screen">
            <p class="flex justify-center">
            <input type="text" v-model="greeting" class="text-center border-green-500 border-2">
            </p>

            <p class="flex justify-center mt-4">
            {{ greeting }} ({{ greeting.length }})
            </p>

            <div class="flex justify-center mt-4">
                <button v-bind:class="buttonUtils" v-on:click="changeColor">Click me</button>
            </div>
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
                buttonUtils: 'bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded',
            };
        },

        mounted() {
            setTimeout(() => {
                this.greeting = 'Hello Vue!';
            }, 4000);
        },

        methods: {
            changeColor() {
                this.buttonUtils = 'bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded';
            },
        },
    };
</script>
