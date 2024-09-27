<template>
    <h2 v-show="jobList.length" class="mb-2 font-bold">
        {{ listName }}
        <span class="ml-2 text-red-500">({{ jobList.length }})</span>
    </h2>
    <ul class="border-2 border-green-500 divide-y divide-green-500">
        <job-item
            v-for="job in jobList"
            :key="job.id"
            :job="job">
        </job-item>
    </ul>
</template>

<script>
    import JobItem from './JobItem.vue';

    export default {
        components: {
            JobItem,
        },

        props: {
            jobList: Array,
            listName: String,
        },
    };
</script>
