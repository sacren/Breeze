<template>
    <div class="flex gap-2">
        <button
            v-for="tag in tags"
            @click="currentTag = tag"
            class="border-2 rounded-md border-blue-500 px-2 text-xs"
            :class="{ 'bg-blue-500 text-white': currentTag === tag }"
            :key="tag">
            {{ tag }}
        </button>
    </div>
</template>

<script>
    export default {
        props: {
            tagList: Array,
        },

        data() {
            return {
                currentTag: 'all',
            };
        },

        computed: {
            tags() {
                return [ 'all', ...new Set(this.tagList) ];
            },
        },
    };
</script>
