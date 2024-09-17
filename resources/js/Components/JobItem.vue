<template>
    <li>
        <label>
            {{ job.name }}
            <input
                    name="fieldName"
                    type="checkbox"
                    v-model="job.status">
        </label>
    </li>
</template>

<script>
    export default {
        props: {
            job: Object,
            fieldName: String,
        },
    };
</script>
