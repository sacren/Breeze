<template>
    <Head title="List"></Head>
    <all-jobs></all-jobs>
</template>

<script>
    import { Head } from '@inertiajs/vue3';
    import AllJobs from '@/Components/AllJobs.vue';

    export default {
        components: {
            Head,
            AllJobs,
        },
    };
</script>
