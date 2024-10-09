<template>
    <div class="flex gap-2">
        <button
            v-for="tag in tags"
            @click="$emit('update:currentTag', tag)"
            class="border-2 rounded-md border-blue-500 px-2 text-xs"
            :class="{ 'bg-blue-500 text-white': tag === currentTag }"
            :key="tag">
            {{ tag }}
        </button>
    </div>
</template>

<script>
    export default {
        props: {
            tagList: Array,
            currentTag: String,
        },

        emits: [ 'update:currentTag' ],

        computed: {
            tags() {
                return [ 'all', ...new Set(this.tagList) ];
            },
        },
    };
</script>
