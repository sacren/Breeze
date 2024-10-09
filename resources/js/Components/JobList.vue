<template>
    <h2 v-show="jobList.length" class="mb-2 font-bold">
        {{ listName }}
        <span class="ml-2 text-red-500">({{ jobList.length }})</span>
    </h2>

    <job-tags
        v-model="currentTag"
        :tag-list="jobList.map(a => a.tag)"
    </job-tags>

    <ul class="border-2 border-green-500 divide-y divide-green-500 mt-4">
        <job-item
            v-for="job in jobsByTag"
            :key="job.id"
            :job="job">
        </job-item>
    </ul>
</template>

<script>
    import JobItem from './JobItem.vue';
    import JobTags from './JobTags.vue';

    export default {
        components: {
            JobItem,
            JobTags,
        },

        props: {
            jobList: Array,
            listName: String,
        },

        data() {
            return {
                currentTag: 'all',
            };
        },

        computed: {
            jobsByTag() {
                if (this.currentTag === 'all') {
                    return this.jobList;
                }

                return this.jobList.filter(a => a.tag === this.currentTag);
            },

            tags() {
                const tags = this.jobList.map(a => a.tag);

                return [ 'all', ...new Set(tags) ];
            },
        },
    };
</script>
