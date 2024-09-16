<template>
    <Head title="Applist" />
    <div>
        <AllJobs />
    </div>
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
