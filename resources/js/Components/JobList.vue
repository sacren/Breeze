<template>
    <h2 v-show="jobList.length" class="mb-2 font-bold">{{ listName }}</h2>
    <ul>
        <JobItem
            v-for="job in jobList"
            :key="job.id"
            :job="job"
            :fieldName="fieldName"
        />
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
            fieldName: String,
        },
    };
</script>
