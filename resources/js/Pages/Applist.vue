<template>
    <Head title="Applist"></Head>
    <AllOver></AllOver>
</template>

<script>
    import { Head } from '@inertiajs/vue3';
    import AllOver from '@/Components/AllJobs.vue';

    export default {
        components: {
            Head,
            AllOver,
        },
    };
</script>
