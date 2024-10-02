<template>
    <h2 v-show="jobList.length" class="mb-2 font-bold">
        {{ listName }}
        <span class="ml-2 text-red-500">({{ jobList.length }})</span>
    </h2>

    <div class="flex gap-2">
        <button
            v-for="tag in tags"
            @click="currentTag = tag"
            class="border-2 rounded-md border-blue-500 px-2 text-xs"
            :key="tag">
            {{ tag }}
        </button>
    </div>

    <ul class="border-2 border-green-500 divide-y divide-green-500 mt-4">
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

        data() {
            return {
                currentTag: null,
            };
        },

        computed: {
            tags() {
                const tags = this.jobList.map(a => a.tag);

                return new Set(tags);
            },
        },
    };
</script>
