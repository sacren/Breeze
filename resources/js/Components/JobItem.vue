<template>
    <li>
        <label class="p-2 flex justify-between items-center">
            {{ job.name }}
            <input
                    class="ml-3"
                    name="jobItem"
                    type="checkbox"
                    v-model="job.status">
        </label>
    </li>
</template>

<script>
    export default {
        props: {
            job: Object,
        },
    };
</script>
